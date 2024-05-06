namespace ProjetoFeira
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Form1));
            this.btnReiniciar = new System.Windows.Forms.Button();
            this.lblMensagem = new System.Windows.Forms.Label();
            this.timerRevelar = new System.Windows.Forms.Timer(this.components);
            this.btnRevelar = new System.Windows.Forms.Button();
            this.timerCrono = new System.Windows.Forms.Timer(this.components);
            this.btnIniciar = new System.Windows.Forms.Button();
            this.btnResetar = new System.Windows.Forms.Button();
            this.lblContagem = new System.Windows.Forms.Label();
            this.ptb71 = new System.Windows.Forms.PictureBox();
            this.ptb31 = new System.Windows.Forms.PictureBox();
            this.ptb70 = new System.Windows.Forms.PictureBox();
            this.ptb30 = new System.Windows.Forms.PictureBox();
            this.ptb61 = new System.Windows.Forms.PictureBox();
            this.ptb21 = new System.Windows.Forms.PictureBox();
            this.ptb60 = new System.Windows.Forms.PictureBox();
            this.ptb20 = new System.Windows.Forms.PictureBox();
            this.ptb51 = new System.Windows.Forms.PictureBox();
            this.ptb50 = new System.Windows.Forms.PictureBox();
            this.ptb11 = new System.Windows.Forms.PictureBox();
            this.ptb41 = new System.Windows.Forms.PictureBox();
            this.ptb10 = new System.Windows.Forms.PictureBox();
            this.ptb40 = new System.Windows.Forms.PictureBox();
            this.ptb01 = new System.Windows.Forms.PictureBox();
            this.ptb00 = new System.Windows.Forms.PictureBox();
            this.timerApagar = new System.Windows.Forms.Timer(this.components);
            ((System.ComponentModel.ISupportInitialize)(this.ptb71)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb31)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb70)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb30)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb61)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb21)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb60)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb20)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb51)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb50)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb11)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb41)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb10)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb40)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb01)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb00)).BeginInit();
            this.SuspendLayout();
            // 
            // btnReiniciar
            // 
            this.btnReiniciar.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.btnReiniciar.BackColor = System.Drawing.Color.Black;
            this.btnReiniciar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnReiniciar.Font = new System.Drawing.Font("Arial", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnReiniciar.ForeColor = System.Drawing.SystemColors.Window;
            this.btnReiniciar.Location = new System.Drawing.Point(893, 573);
            this.btnReiniciar.Name = "btnReiniciar";
            this.btnReiniciar.Size = new System.Drawing.Size(193, 40);
            this.btnReiniciar.TabIndex = 8;
            this.btnReiniciar.Text = "NOVO JOGO";
            this.btnReiniciar.UseVisualStyleBackColor = false;
            this.btnReiniciar.Click += new System.EventHandler(this.btnReiniciar_Click);
            // 
            // lblMensagem
            // 
            this.lblMensagem.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.lblMensagem.BackColor = System.Drawing.Color.Maroon;
            this.lblMensagem.Font = new System.Drawing.Font("Arial Black", 15.75F, System.Drawing.FontStyle.Bold);
            this.lblMensagem.ForeColor = System.Drawing.Color.White;
            this.lblMensagem.Location = new System.Drawing.Point(888, 494);
            this.lblMensagem.Name = "lblMensagem";
            this.lblMensagem.Size = new System.Drawing.Size(486, 54);
            this.lblMensagem.TabIndex = 9;
            this.lblMensagem.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // timerRevelar
            // 
            this.timerRevelar.Interval = 1000;
            this.timerRevelar.Tick += new System.EventHandler(this.timer1_Tick);
            // 
            // btnRevelar
            // 
            this.btnRevelar.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.btnRevelar.BackColor = System.Drawing.Color.Black;
            this.btnRevelar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnRevelar.Font = new System.Drawing.Font("Arial", 9.75F, System.Drawing.FontStyle.Bold);
            this.btnRevelar.ForeColor = System.Drawing.SystemColors.Window;
            this.btnRevelar.Location = new System.Drawing.Point(1180, 573);
            this.btnRevelar.Name = "btnRevelar";
            this.btnRevelar.Size = new System.Drawing.Size(194, 40);
            this.btnRevelar.TabIndex = 9;
            this.btnRevelar.Text = "REVELAR";
            this.btnRevelar.UseVisualStyleBackColor = false;
            this.btnRevelar.Click += new System.EventHandler(this.btnRevelar_Click);
            // 
            // timerCrono
            // 
            this.timerCrono.Interval = 1000;
            this.timerCrono.Tick += new System.EventHandler(this.timerCrono_Tick);
            // 
            // btnIniciar
            // 
            this.btnIniciar.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.btnIniciar.BackColor = System.Drawing.Color.Black;
            this.btnIniciar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnIniciar.Font = new System.Drawing.Font("Arial", 9.75F, System.Drawing.FontStyle.Bold);
            this.btnIniciar.ForeColor = System.Drawing.SystemColors.Window;
            this.btnIniciar.Location = new System.Drawing.Point(895, 284);
            this.btnIniciar.Name = "btnIniciar";
            this.btnIniciar.Size = new System.Drawing.Size(236, 40);
            this.btnIniciar.TabIndex = 10;
            this.btnIniciar.Text = "INICIAR CONTAGEM";
            this.btnIniciar.UseVisualStyleBackColor = false;
            this.btnIniciar.Click += new System.EventHandler(this.btnIniciar_Click);
            // 
            // btnResetar
            // 
            this.btnResetar.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.btnResetar.BackColor = System.Drawing.Color.Black;
            this.btnResetar.FlatStyle = System.Windows.Forms.FlatStyle.Popup;
            this.btnResetar.Font = new System.Drawing.Font("Arial", 9.75F, System.Drawing.FontStyle.Bold);
            this.btnResetar.ForeColor = System.Drawing.SystemColors.Window;
            this.btnResetar.Location = new System.Drawing.Point(1137, 284);
            this.btnResetar.Name = "btnResetar";
            this.btnResetar.Size = new System.Drawing.Size(237, 40);
            this.btnResetar.TabIndex = 11;
            this.btnResetar.Text = "RESETAR CONTAGEM";
            this.btnResetar.UseVisualStyleBackColor = false;
            this.btnResetar.Click += new System.EventHandler(this.btnResetar_Click);
            // 
            // lblContagem
            // 
            this.lblContagem.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.lblContagem.BackColor = System.Drawing.Color.Red;
            this.lblContagem.Font = new System.Drawing.Font("Arial Black", 50.75F, System.Drawing.FontStyle.Bold);
            this.lblContagem.ForeColor = System.Drawing.Color.Black;
            this.lblContagem.Location = new System.Drawing.Point(879, 142);
            this.lblContagem.Name = "lblContagem";
            this.lblContagem.Size = new System.Drawing.Size(495, 103);
            this.lblContagem.TabIndex = 9;
            this.lblContagem.Text = "00:01:30";
            this.lblContagem.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // ptb71
            // 
            this.ptb71.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb71.Image = ((System.Drawing.Image)(resources.GetObject("ptb71.Image")));
            this.ptb71.Location = new System.Drawing.Point(677, 12);
            this.ptb71.Name = "ptb71";
            this.ptb71.Size = new System.Drawing.Size(100, 100);
            this.ptb71.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb71.TabIndex = 7;
            this.ptb71.TabStop = false;
            // 
            // ptb31
            // 
            this.ptb31.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb31.Image = ((System.Drawing.Image)(resources.GetObject("ptb31.Image")));
            this.ptb31.Location = new System.Drawing.Point(677, 436);
            this.ptb31.Name = "ptb31";
            this.ptb31.Size = new System.Drawing.Size(100, 100);
            this.ptb31.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb31.TabIndex = 7;
            this.ptb31.TabStop = false;
            // 
            // ptb70
            // 
            this.ptb70.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb70.Image = ((System.Drawing.Image)(resources.GetObject("ptb70.Image")));
            this.ptb70.Location = new System.Drawing.Point(571, 12);
            this.ptb70.Name = "ptb70";
            this.ptb70.Size = new System.Drawing.Size(100, 100);
            this.ptb70.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb70.TabIndex = 6;
            this.ptb70.TabStop = false;
            // 
            // ptb30
            // 
            this.ptb30.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb30.Image = ((System.Drawing.Image)(resources.GetObject("ptb30.Image")));
            this.ptb30.Location = new System.Drawing.Point(571, 436);
            this.ptb30.Name = "ptb30";
            this.ptb30.Size = new System.Drawing.Size(100, 100);
            this.ptb30.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb30.TabIndex = 6;
            this.ptb30.TabStop = false;
            // 
            // ptb61
            // 
            this.ptb61.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb61.Image = ((System.Drawing.Image)(resources.GetObject("ptb61.Image")));
            this.ptb61.Location = new System.Drawing.Point(677, 118);
            this.ptb61.Name = "ptb61";
            this.ptb61.Size = new System.Drawing.Size(100, 100);
            this.ptb61.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb61.TabIndex = 5;
            this.ptb61.TabStop = false;
            // 
            // ptb21
            // 
            this.ptb21.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb21.Image = ((System.Drawing.Image)(resources.GetObject("ptb21.Image")));
            this.ptb21.Location = new System.Drawing.Point(677, 542);
            this.ptb21.Name = "ptb21";
            this.ptb21.Size = new System.Drawing.Size(100, 100);
            this.ptb21.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb21.TabIndex = 5;
            this.ptb21.TabStop = false;
            // 
            // ptb60
            // 
            this.ptb60.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb60.Image = ((System.Drawing.Image)(resources.GetObject("ptb60.Image")));
            this.ptb60.Location = new System.Drawing.Point(571, 118);
            this.ptb60.Name = "ptb60";
            this.ptb60.Size = new System.Drawing.Size(100, 100);
            this.ptb60.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb60.TabIndex = 4;
            this.ptb60.TabStop = false;
            // 
            // ptb20
            // 
            this.ptb20.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb20.Image = ((System.Drawing.Image)(resources.GetObject("ptb20.Image")));
            this.ptb20.Location = new System.Drawing.Point(571, 542);
            this.ptb20.Name = "ptb20";
            this.ptb20.Size = new System.Drawing.Size(100, 100);
            this.ptb20.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb20.TabIndex = 4;
            this.ptb20.TabStop = false;
            // 
            // ptb51
            // 
            this.ptb51.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb51.Image = ((System.Drawing.Image)(resources.GetObject("ptb51.Image")));
            this.ptb51.Location = new System.Drawing.Point(677, 224);
            this.ptb51.Name = "ptb51";
            this.ptb51.Size = new System.Drawing.Size(100, 100);
            this.ptb51.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb51.TabIndex = 3;
            this.ptb51.TabStop = false;
            // 
            // ptb50
            // 
            this.ptb50.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb50.Image = ((System.Drawing.Image)(resources.GetObject("ptb50.Image")));
            this.ptb50.Location = new System.Drawing.Point(571, 224);
            this.ptb50.Name = "ptb50";
            this.ptb50.Size = new System.Drawing.Size(100, 100);
            this.ptb50.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb50.TabIndex = 2;
            this.ptb50.TabStop = false;
            // 
            // ptb11
            // 
            this.ptb11.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb11.Image = ((System.Drawing.Image)(resources.GetObject("ptb11.Image")));
            this.ptb11.Location = new System.Drawing.Point(677, 648);
            this.ptb11.Name = "ptb11";
            this.ptb11.Size = new System.Drawing.Size(100, 100);
            this.ptb11.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb11.TabIndex = 3;
            this.ptb11.TabStop = false;
            // 
            // ptb41
            // 
            this.ptb41.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb41.Image = ((System.Drawing.Image)(resources.GetObject("ptb41.Image")));
            this.ptb41.Location = new System.Drawing.Point(677, 330);
            this.ptb41.Name = "ptb41";
            this.ptb41.Size = new System.Drawing.Size(100, 100);
            this.ptb41.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb41.TabIndex = 1;
            this.ptb41.TabStop = false;
            // 
            // ptb10
            // 
            this.ptb10.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb10.Image = ((System.Drawing.Image)(resources.GetObject("ptb10.Image")));
            this.ptb10.Location = new System.Drawing.Point(571, 648);
            this.ptb10.Name = "ptb10";
            this.ptb10.Size = new System.Drawing.Size(100, 100);
            this.ptb10.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb10.TabIndex = 2;
            this.ptb10.TabStop = false;
            // 
            // ptb40
            // 
            this.ptb40.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb40.Image = ((System.Drawing.Image)(resources.GetObject("ptb40.Image")));
            this.ptb40.Location = new System.Drawing.Point(571, 330);
            this.ptb40.Name = "ptb40";
            this.ptb40.Size = new System.Drawing.Size(100, 100);
            this.ptb40.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb40.TabIndex = 0;
            this.ptb40.TabStop = false;
            // 
            // ptb01
            // 
            this.ptb01.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb01.Image = ((System.Drawing.Image)(resources.GetObject("ptb01.Image")));
            this.ptb01.Location = new System.Drawing.Point(677, 754);
            this.ptb01.Name = "ptb01";
            this.ptb01.Size = new System.Drawing.Size(100, 100);
            this.ptb01.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb01.TabIndex = 1;
            this.ptb01.TabStop = false;
            // 
            // ptb00
            // 
            this.ptb00.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.ptb00.Image = global::ProjetoFeira.Properties.Resources.caminho;
            this.ptb00.Location = new System.Drawing.Point(571, 754);
            this.ptb00.Name = "ptb00";
            this.ptb00.Size = new System.Drawing.Size(100, 100);
            this.ptb00.SizeMode = System.Windows.Forms.PictureBoxSizeMode.StretchImage;
            this.ptb00.TabIndex = 0;
            this.ptb00.TabStop = false;
            // 
            // timerApagar
            // 
            this.timerApagar.Interval = 2000;
            this.timerApagar.Tick += new System.EventHandler(this.timerApagar_Tick);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.Red;
            this.ClientSize = new System.Drawing.Size(1453, 782);
            this.Controls.Add(this.btnResetar);
            this.Controls.Add(this.btnIniciar);
            this.Controls.Add(this.btnRevelar);
            this.Controls.Add(this.lblContagem);
            this.Controls.Add(this.lblMensagem);
            this.Controls.Add(this.btnReiniciar);
            this.Controls.Add(this.ptb71);
            this.Controls.Add(this.ptb31);
            this.Controls.Add(this.ptb70);
            this.Controls.Add(this.ptb30);
            this.Controls.Add(this.ptb61);
            this.Controls.Add(this.ptb21);
            this.Controls.Add(this.ptb60);
            this.Controls.Add(this.ptb20);
            this.Controls.Add(this.ptb51);
            this.Controls.Add(this.ptb50);
            this.Controls.Add(this.ptb11);
            this.Controls.Add(this.ptb41);
            this.Controls.Add(this.ptb10);
            this.Controls.Add(this.ptb40);
            this.Controls.Add(this.ptb01);
            this.Controls.Add(this.ptb00);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedToolWindow;
            this.KeyPreview = true;
            this.Name = "Form1";
            this.ShowIcon = false;
            this.Text = "----------------";
            this.WindowState = System.Windows.Forms.FormWindowState.Maximized;
            this.KeyDown += new System.Windows.Forms.KeyEventHandler(this.Form1_KeyDown);
            this.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.Form1_KeyPress);
            this.KeyUp += new System.Windows.Forms.KeyEventHandler(this.Form1_KeyUp);
            ((System.ComponentModel.ISupportInitialize)(this.ptb71)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb31)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb70)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb30)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb61)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb21)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb60)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb20)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb51)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb50)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb11)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb41)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb10)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb40)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb01)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.ptb00)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.PictureBox ptb00;
        private System.Windows.Forms.PictureBox ptb01;
        private System.Windows.Forms.PictureBox ptb11;
        private System.Windows.Forms.PictureBox ptb10;
        private System.Windows.Forms.PictureBox ptb31;
        private System.Windows.Forms.PictureBox ptb30;
        private System.Windows.Forms.PictureBox ptb21;
        private System.Windows.Forms.PictureBox ptb20;
        private System.Windows.Forms.Button btnReiniciar;
        private System.Windows.Forms.Label lblMensagem;
        private System.Windows.Forms.Timer timerRevelar;
        private System.Windows.Forms.PictureBox ptb40;
        private System.Windows.Forms.PictureBox ptb41;
        private System.Windows.Forms.PictureBox ptb50;
        private System.Windows.Forms.PictureBox ptb51;
        private System.Windows.Forms.PictureBox ptb60;
        private System.Windows.Forms.PictureBox ptb61;
        private System.Windows.Forms.PictureBox ptb70;
        private System.Windows.Forms.PictureBox ptb71;
        private System.Windows.Forms.Button btnRevelar;
        private System.Windows.Forms.Timer timerCrono;
        private System.Windows.Forms.Button btnIniciar;
        private System.Windows.Forms.Button btnResetar;
        private System.Windows.Forms.Label lblContagem;
        private System.Windows.Forms.Timer timerApagar;
    }
}

