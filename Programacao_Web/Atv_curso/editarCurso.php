<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Curso</title>
</head>

<body>
    <header>
    <nav  class="menu">
            <h1>Cadastro de disciplinas</h1>
        </nav>
    </header>
    <main>
        <form name="form1" method="post" action="editarDadosCurso.php" class="form" >

            <?php

            error_reporting(0);
            ini_set("display_errors", 0);

            require_once("conn.php");


            $resultado = mysqli_query($conn, "select * from tbCursos");

            while ($linha = mysqli_fetch_array($resultado)) 
            { 
            ?> <a href="editarDadosCurso.php?id=<?php echo $linha['codCurso']; ?>">
                    <!– passando o valor do id para a página editar1.php –>
                    <?php
                    echo $linha['codCurso'] . " - " . $linha['NomeCurso']; 
                    echo "<br />";
                }
                    ?>
                </a>

        </form>
    </main>
    <footer>

    </footer>
</body>

</html>