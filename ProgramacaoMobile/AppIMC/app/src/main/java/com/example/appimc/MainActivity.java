Package com.caique.appimc;



        Import androidx.appcompat.app.AppCompatActivity;



        Import android.os.Bundle;

        Import android.view.View;

        Import android.widget.EditText;

        Import android.widget.ImageView;

        Import android.widget.TextView;



        Public class MainActivity extends AppCompatActivity {



    EditText edtPeso,edtAltura,txtCategoria1;

    TextView edtvalor1,edtvalor2txtCategoria1;

    ImageView imvCategoria;







    @Override

    Protected void onCreate(Bundle savedInstanceState) {

        Super.onCreate(savedInstanceState);

        setContentView(R.layout.activity_main);





        edtPeso     = findViewById(R.id.edtpeso);

        edtAltura    = findViewById(R.i.d.edtAltura);

        edtvalor1    = findViewById(R.id.edtValor1);

        edtvalor2    = findViewById(R.id.edtValor2);

        imvCategoria = findViewById(R.id.imvCategoria);

        txtCategoria1 = findViewById(R.id.txtCategoria1);



    }



    Public void vereficar (View view);

    {

        Int peso = Integer.parseInt( edtvalor1. getText().toString() );

        Int altura = Integer.parseInt( edtvalor2. getText().toString() );

        If(edtvalor1 > 18 && peso <= 30)

        {

            txtCategoria1.setText(“ normal”);

            imvCategoria.setImageResource(R.drawable.normal);

        }

        Else if( peso <= 17 && altura <=100)

    {

        txtCategoria1.setText(“Muito abaixo”);

        imvCategoria.setImageResource(R.drawable.muito_abaixo);

    }

        Else if(peso >= 17 && peso <19 && altura>100 && altura <=180)

    {

        txtCategoria1.setText(“A baixo do peso”);

        imvCategoria.setImageResource(R.drawable.abaixo);

    }



        Else if(peso >= 25 && peso <30 && altura>150 && altura <=160)

    {

        txtCategoria1.setText(“A cima do peso”);

        imvCategoria.setImageResource(R.drawable.acima);

    }

        Else if(idade > 60)

    {

        txtCategoria.setText(“Categoria: Idoso”);

        imvCategoria.setImageResource(R.drawable.idoso);  //trocando a imagem

    }

        Else

        {

            txtCategoria.setText(“Idade inválida”);

            imvCategoria.setImageResource(R.drawable.aviso); //trocando a imagem

        }

    }