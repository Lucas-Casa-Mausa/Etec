<?php

    if(!isset($_SESSION)) session_start();

    if(!isset($_SESSION['UsuarioID'])){
        session_destroy();
        header("Location:index.php"); exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do Usuário</title>
    <style>
    .a1{
            text-decoration: none;
            font-size: 25px;
        }
        </style>
</head>
<body> 
    <center>
    <?php
    if($_SESSION['UsuarioNivel']==1)
    {
        header("Location:homepage.php");

    }
    if($_SESSION['UsuarioNivel']==2){
        echo "<a href='Consulta.php'class='a1'>Consulta geral</a><br>";
    }

    ?>
    </center>
</body>
</html>