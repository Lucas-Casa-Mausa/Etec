package appcalculadora.controle;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class Appcalculadora extends AppCompatActivity {
    EditText edtNumero1,edtNumero2,edtResultado;
    float n1,n2,resultado; // atributo
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_appcalculadora);
        edtNumero1=findViewById(R.id.edt1);
        edtNumero2=findViewById(R.id.edt2);
        edtResultado=findViewById(R.id.edtResultado);
    }
    public void Somar(View view){
        //float n1= Float.parseFloat(edtNumero1.getText().toString());
        n1 = Float.parseFloat(edtNumero1.getText().toString());
        n2 = Float.parseFloat(edtNumero2.getText().toString());
        resultado = n1 + n2;
        edtResultado.setText(String.valueOf(resultado));
        // int numero1 = Integer.parseInt(edtNumero1.getText().toString()); converter valores
    }
    public void Subtrair(View view){
        //float n1= Float.parseFloat(edtNumero1.getText().toString());
        n1 = Float.parseFloat(edtNumero1.getText().toString());
        n2 = Float.parseFloat(edtNumero2.getText().toString());
        resultado = n1 - n2;
        edtResultado.setText(String.valueOf(resultado));
    }
    public void Multiplicar (View view){
        //float n1= Float.parseFloat(edtNumero1.getText().toString());
        n1 = Float.parseFloat(edtNumero1.getText().toString());
        n2 = Float.parseFloat(edtNumero2.getText().toString());
        resultado = n1 * n2;
        edtResultado.setText(String.valueOf(resultado));
    }
    public void Dividir (View view){
        //float n1= Float.parseFloat(edtNumero1.getText().toString());
        n1 = Float.parseFloat(edtNumero1.getText().toString());
        n2 = Float.parseFloat(edtNumero2.getText().toString());
        resultado = n1 / n2;
        edtResultado.setText(String.valueOf(resultado));
    }


}