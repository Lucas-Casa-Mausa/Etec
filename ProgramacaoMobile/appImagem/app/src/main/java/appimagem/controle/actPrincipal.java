package appimagem.controle;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

public class actPrincipal extends AppCompatActivity {
    ImageView imgEscola;
        @Override
        protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_act_principal);
            imgEscola = findViewById(R.id.imgEscola);
            imgEscola.animate().setDuration(4000);
        }
        public void Rotacao(View view){
            imgEscola.animate().rotation(380);
            imgEscola.animate().rotationX(460);
            imgEscola.animate().rotationY(670);
        }
        public void Transparencia(View view){
            imgEscola.animate().alpha(0.1f);
        }
        public void Reset(View view){
            imgEscola.animate().alpha(1);
            imgEscola.animate().rotation(0);
            imgEscola.animate().rotationY(0);
            imgEscola.animate().rotationX(0);
        }
}