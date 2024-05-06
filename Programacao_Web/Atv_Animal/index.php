 <?php /* 
 if(!isset($_SESSION)) session_start();

 if(!isset($_SESSION['UsuarioID']) or $_SESSION['UsuarioNivel']){
    session_destroy();
    header("Location:index.php"); exit;
 }

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
    *{
        font-family: Helvetica;
        
    }


    </style>
</head>
<body> 
    <form action="validar.php" method="POST">
    
    Login:
    <label>
        <input type="text" maxlength="50" required name="txtusuario"/>
    </label><br><br>
    Senha:
    <label>
        <input type="password" required  name="txtsenha"/>
    </label><br><br>
    
    <input type="submit" value="Entrar">

</form><br><br>

<p>
    Ainda não tem cadastro? 
    <a href="cadUsuario.php">Cadastre-se</a>
    
</p>
    
</body>
</html>