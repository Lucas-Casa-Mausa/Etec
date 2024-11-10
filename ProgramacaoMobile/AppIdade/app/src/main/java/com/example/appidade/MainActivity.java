package com.example.appidade;

import androidx.appcompat.app.AppCompatActivity;

import android.net.wifi.p2p.WifiP2pManager;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    EditText edtIdade;
    TextView txtCategoria;
    ImageView imvCategoaria;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        edtIdade        = findViewById(R.id.edtidade);
        txtCategoria    = findViewById(R.id.txtCategoria);
        imvCategoaria   = findViewById(R.id.imvCategoria);

    }

    public void Verificar(View view)
    {
        int idade = Integer.parseInt( edtIdade.getText().toString() );
        if(idade > 0 && idade <= 11)
        {
            txtCategoria.setText("Categoria: Criança");
            imvCategoaria.setImageResource(R.drawable.crianca);
        }
        else if(idade >= 12 && idade <= 17)
        {
            txtCategoria.setText("Categoria: Adolescente");
            imvCategoaria.setImageResource(R.drawable.aborrecente);
        }
        else if(idade >= 18 && idade <= 60)
        {
            txtCategoria.setText("Categoria: Adulto");
            imvCategoaria.setImageResource(R.drawable.adulto);
        }
        else if(idade > 60)
        {
            txtCategoria.setText("Categoria: Idoso");
            imvCategoaria.setImageResource(R.drawable.idoso);
        }
        else
        {
            txtCategoria.setText("Idade inválida");
        }
    }
}