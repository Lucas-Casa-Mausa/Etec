<?php
//A sessao precisa ser iniciada em cada página diferente
if(!isset($_SESSION)) session_start();

//Verifica se não há a variavel da sessao que identifica o usuario
if(!isset($_SESSION['UsuarioID']) or $_SESSION['UsuarioNivel']!=1){

    session_destroy();
    header("Location: index.php"); exit;
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>

    <form name="form1" method="POST" action="cadUsuario.php">
        <table>
            <tr><td>Usuario</td><td><input type="text" name="txt_usuario"></td></tr>
            <tr><td>Senha</td><td><input type="text" name="txt_senha"></td></tr>
            <tr><td>Nivel</td><td><input type="text" name="txt_nivel"></td></tr>
        </table>

    <input type="submit" name="submit" value="Cadastrar"></input>
    </form>
<?php

require_once("conn.php");
$usuario=$_POST['txt_usuario'];
$senha=$_POST['txt_senha'];
$nivel=$_POST['txt_nivel'];

if(empty($usuario) || empty($senha) ||empty($nivel))
{
    echo "Por favor , preencha todos os dados";
}
else  {
    $insere=mysqli_query($conn,"INSERT INTO usuarios(usuario,senha, nivel) values ('$usuario','$senha','$nivel')") or die (mysqli_error()*);

    echo "Cadastrado";
}
?>
</body>
</html>