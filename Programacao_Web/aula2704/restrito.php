<?php

// A sessao precisa ser iniciada  em cada página diferente
if(!isset($_SESSION)) session_start();

//Verifica se não há uma variavel da sessao que identifica o usuario
if(!isset($_SESSION['UsuarioID'])){
    //Destroi a sessao por segurança
    session_destroy();
    //Redireciona o visitanete para o index
    header("Location: index.php"); exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restrito</title>
</head>
<body>
    
    <h1>Pagina restrita</h1>
    <p>Olá, <?php echo $_SESSION['UsuarioNome'];?>!</p>
    <p>O seu nivel de acesso é:<?php echo $_SESSION['UsuarioNivel'];?>!</p>

    <?php 
    
    if($_SESSION['UsuarioNivel']==1)
    {
        echo "<a href='cadUsuario.php'>Cadastro de Usuario</a>,<br>
        <a href='teste_excluir.php'>Excluir</a><br>";   
    }
    
    ?>

    <a href="teste_seleciona.php">Consultar Usuarios</a><br>
    <a href="testeConsulta.php">Editar usuarios</a><br>
    
    <a href="sair.php">Sair</a><br>

</body>
</html>