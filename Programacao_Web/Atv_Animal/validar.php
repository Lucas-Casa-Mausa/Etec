<?php

if(!empty ($_POST) and (empty($_POST['txtusuario'])or empty($_POST['txtsenha'])))
{
    
    header("Location:index.php");
    exit;
}
else
{

    require_once("conn.php");
    $usuario= mysqli_real_escape_string($conn,$_POST['txtusuario']);
    $senha= mysqli_real_escape_string($conn,$_POST['txtsenha']);

    $sql= "SELECT id, usuario, nivel FROM usuarios where(usuario = '".($usuario)."') and (senha = '".($senha)."')" ;

    $query= mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) != 1){

        echo "Login inválido";
        exit;
    }
        else{

            $resultado= mysqli_fetch_assoc($query);
        

        if(!isset($_SESSION))
        {
            session_start();
        }

        $_SESSION['UsuarioID'] = $resultado['id'];
        $_SESSION['UsuarioNome'] = $resultado['usuario'];
        $_SESSION['UsuarioNivel'] = $resultado['nivel'];

        header("Location:restrito.php");
        exit;
        }
}

?>