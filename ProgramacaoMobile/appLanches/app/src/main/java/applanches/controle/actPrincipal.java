package applanches.controle;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.CheckBox;
import android.widget.RadioButton;
import android.widget.TextView;

public class actPrincipal extends AppCompatActivity {
    RadioButton rdbXburger, rdbXsalada, rdbXtudo;
    CheckBox chkCheddar, chkMaionese, chkBacon;
    TextView txtExibir;
    String   lanche, opcionais;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_act_principal);

        rdbXburger = findViewById(R.id.rdbXburger);
        rdbXsalada = findViewById(R.id.rdbXsalada);
        rdbXtudo   = findViewById(R.id.rdbXtudo);

        chkCheddar  = findViewById(R.id.chkCheddar);
        chkMaionese = findViewById(R.id.chkMaionese);
        chkBacon    = findViewById(R.id.chkBacon);

        txtExibir   = findViewById(R.id.txtExibir);
    }
    public void Lanche(View view){
        if(rdbXburger.isChecked()){
            lanche = "X burguer";
        }
        else if (rdbXsalada.isChecked()){
            lanche = "X salada";
        }
        else if (rdbXtudo.isChecked()){
            lanche = "X tudo";
        }
        else{
            lanche = "Nenhum lanche escolhido";
        }
    }
    public void opcionais(View view){
         if (chkCheddar.isChecked()){
             opcionais = "Cheddar";
         }
         if (chkMaionese.isChecked()){
             opcionais = opcionais + " - Maionese";
         }
         if (chkBacon.isChecked()){
             opcionais += " - Bacon";
         }
    }
    public void Exibir(View view){
        Lanche(view);
        opcionais(view);
        txtExibir.setText("Lanche: " + lanche + "\nOpcionais: " + opcionais);
    }
}