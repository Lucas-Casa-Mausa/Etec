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
    <?php
    if($_SESSION['UsuarioNivel']==1)
    {
        echo "<a href='cadCliente.php' class='a1'>Cadastro de  cliente</a> <br>
        <a href='cadAnimal.php' class='a1'>Cadastro de Animal</a><br>
        <a href='cadTipoAnimal.php' class='a1'>Cadastro tipo de animal</a><br>
        <a href='cadVeterinario.php' class='a1'>Cadastro Veterinario</a><br>
        <a href='cadAtendimento.php' class='a1'>Cadastro Atendimento</a><br>
        <a href='cadUsuario.php' class='a1'>Cadastro de Usuario</a><br>";    
    }
    if($_SESSION['UsuarioNivel']==2){
        echo "<a href='Consulta.php' class='a1'>Consulta geral</a><br>";
    }

    ?>
</body>
</html>