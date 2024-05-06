<?php

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
 if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha'])))
{
header("Location: index.php");
exit;
}

 else
{
 require_once("conn.php");
  $usuario = mysqli_real_escape_string($conn, $_POST[ 'usuario']);    
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

 // Validação do usuário/senha digitados
 $sql = "SELECT id, usuario, nivel FROM usuarios WHERE (usuario = '".$usuario ."') AND (senha = '". ($senha) ."')";

 $query = mysqli_query($conn,$sql);
 if (mysqli_num_rows($query) != 1)
 {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
 echo "Login inválido!";
 exit;
 } 
 else{
     //salva os dados encontrados na variavel $resultado
     $resultado=mysqli_fetch_assoc($query);

     //Se a sessao nao existir, inicia uma 
     if(!isset($_SESSION))
     {
         session_start();
     }

     //salva os dados da sessao 
     $_SESSION['UsuarioID'] =$resultado['id'];
     $_SESSION['UsuarioNome'] =$resultado['usuario'];
     $_SESSION['UsuarioNivel'] =$resultado['nivel'];

     //redireciona o visitante
     header("Location: restrito.php");
     exit;
 }
}

?>