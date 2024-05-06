    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>
    
    <form action="cadUsuario.php" method="POST" name="form1">
        Usuario:
        <label>
          <input type="text" name="txtUsuario">
        </label><br><br>
        Senha:
        <label>
            <input type="password" name="txtSenha">
        </label><br><br>
        Nivel:
        <label>
            <input type="text" name="txtNivel">
        </label><br><br>   


    <input type="submit" value="Cadastrar">
    </form>
    <?php
        require_once("conn.php");

        $Usuario=$_POST['txtUsuario'];
        $Senha=$_POST['txtSenha'];
        $Nivel=$_POST['txtNivel'];

    if(empty($Usuario) || empty($Senha) || empty($Nivel))
    {
        echo "Por gentileza preencha todos os dados ";
    }
    else{
        $inserir=mysqli_query($conn,"INSERT INTO usuarios(usuario,senha,nivel) values('$Usuario','$Senha','$Nivel')") or die (mysqli_error());
        echo "<script>Usuario Cadastrado</script>";
        header("Location:index.php");
    }

        ?>

</body>
</html> 