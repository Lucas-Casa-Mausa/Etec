using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Media;
using ProjetoFeira.Properties;

namespace ProjetoFeira
{
    public partial class Form1 : Form
    {
        bool[,] caminho = new bool[8, 2];
        int contLinhas = 0;
        bool tecla = false;
        DateTime crono;
        public Form1()
        {
            InitializeComponent();
            preencherCaminho(); //será executado automaticamente ao abrir o jogo
            crono = Convert.ToDateTime("00:01:30");
        }

        public void pintarPegada(int coluna)
        {
            foreach (Control ctl in this.Controls)
            {
                if (ctl.Name == "ptb" + contLinhas + coluna)
                {
                    PictureBox pic = (PictureBox)ctl;
                    pic.Image = Resources.acertou;
                }
            }
        }

        public void zerarPegadas()
        {
            foreach (Control ctl in this.Controls)
            {
                if (ctl is PictureBox)
                {
                    PictureBox pic = (PictureBox)ctl;
                    pic.Image = Resources.caminho;
                }
            }
        }

        public void verificarPegada(int coluna)
        {
            if (contLinhas < 8)
            {
                if (caminho[contLinhas, coluna] == true)
                {
                   
                    lblMensagem.Text = "Acertou!";
                    pintarPegada(coluna);
                    SoundPlayer sp = new SoundPlayer("acerto.wav");
                    sp.Play();
                    contLinhas++; //avançar uma casa
                    timerApagar.Enabled = true;

                    if (contLinhas == 8)
                    {
                        lblMensagem.Text = "Parabéns, você chegou ao final!";
                        timerCrono.Enabled = false;
                        timerApagar.Enabled = true;
                    }
                }
                else
                {
                    
                    lblMensagem.Text = "Errou!";
                    SoundPlayer sp = new SoundPlayer("erro.wav");
                    sp.Play();
                    contLinhas = 0; //zerar a caminhada
                    zerarPegadas();
                    ResetarTimer();
                    timerApagar.Enabled = true;
                }

                //timerRevelar.Enabled = true; //zerar texto da label após 2 seg
            }
            else
            {
                lblMensagem.Text = "Jogo Finalizado!";
                timerCrono.Enabled = false;
                


            }
        }

        public void preencherCaminho()
        {
            Random rdm = new Random();
            for (int i = 0; i < 8; i++)
            {
                int sorteioColuna = rdm.Next(0, 2);
                if (sorteioColuna == 0)
                    caminho[i, 0] = true;
                else
                    caminho[i, 1] = true;
            }
        }



        private void Form1_KeyDown(object sender, KeyEventArgs e)
        {
           
            

            //if (!tecla)
            //{
            //    if (e.KeyCode == Keys.A) //coluna 0
            //    {
            //        verificarPegada(0);
            //    }
            //    else if (e.KeyCode == Keys.B) //coluna 1
            //    {
            //        verificarPegada(1);
            //    }
            //    tecla = true;
            //}
        }

        private void btnReiniciar_Click(object sender, EventArgs e)
        {
            zerarPegadas();
            contLinhas = 0;
            for (int i = 0; i < 8; i++)
            {
                for (int x = 0; x < 2; x++)
                {
                    caminho[i, x] = false;
                }
            }
            preencherCaminho();
        }

        public void timer1_Tick(object sender, EventArgs e)
        {
            zerarPegadas();
            timerRevelar.Stop();

        }

        private void btnRevelar_Click(object sender, EventArgs e)
        {
            timerRevelar.Start();
            for (int i = 0; i < 8; i++)
            {
                if (caminho[i, 0] == true)
                {
                    foreach (Control ctl in this.Controls)
                    {
                        if (ctl.Name == "ptb" + i + 0)
                        {
                            PictureBox pic = (PictureBox)ctl;
                            pic.Image = Resources.acertou;
                        }
                    }
                }
                else
                {
                    foreach (Control ctl in this.Controls)
                    {
                        if (ctl.Name == "ptb" + i + 1)
                        {
                            PictureBox pic = (PictureBox)ctl;
                            pic.Image = Resources.acertou;
                        }
                    }
                }
            }
        }

        private void btnIniciar_Click(object sender, EventArgs e)
        {
            timerCrono.Start();
        }

        private void timerCrono_Tick(object sender, EventArgs e)
        {
            crono = crono.AddSeconds(-1);
            lblContagem.Text = crono.ToLongTimeString();
            if(crono == Convert.ToDateTime("00:00:00"))
            {
                timerCrono.Enabled = false;
                crono = Convert.ToDateTime("00:01:30");
                lblMensagem.Text = "Tempo Esgotado!";
            }
        }

        private void btnResetar_Click(object sender, EventArgs e)
        {
            ResetarTimer();
        }
        public void ResetarTimer()
        {
            lblContagem.Text = ("00:01:30");
            crono = Convert.ToDateTime("00:01:30");
            timerCrono.Enabled = false;
        }

        private void timerApagar_Tick(object sender, EventArgs e)
        {
            lblMensagem.Text = "";
            timerApagar.Enabled = false;
        }

        private void Form1_KeyUp(object sender, KeyEventArgs e)
        {
            tecla = false;
        }

        private void Form1_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (!tecla)
            {
                if (e.KeyChar == 'A') //coluna 0
                {
                    verificarPegada(0);
                }
                else if (e.KeyChar == 'B') //coluna 1
                {
                    verificarPegada(1);
                }
            }
            tecla = true;
        }
    }
}