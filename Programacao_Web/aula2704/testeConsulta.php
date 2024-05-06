<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de usuarios</title>
</head>
<body>
    <form name="form1" method="POST" action="editar_dados.php">
    <?php
    error_reporting(0);
    ini_set("display_errors",0);

    require_once("conn.php");

    $resultado= mysqli_query($conn, "SELECT * FROM usuarios"); // A variavel $resultado faz uma consulta em nossa tabela selecionando todos os registros de todos os campos

    while($linha = mysqli_fetch_array($resultado))// Já a  instrução while faz um loop entre todos os registros e armazena seus valores na váriavel $linha
    {//Inicia o loop
        ?><a href="editar_dados.php?id=<?php echo $linha['id'];?>">
        <?php
        echo $linha['id'] . " - " . $linha['usuario'] . " - " . $linha['nivel'];  //Mostra o valor de registro dentro do loop
        echo "<br />";
    }
    ?>
    </a>
    </form>
</body>
</html>