<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar as Disciplinas</title>
</head>

<body>
    <header>
        <nav class="menu">
            <h1>Bem vindo à edição das disciplinas</h1>
        </nav>
    </header>
    <main>
        <form name="form1" method="post" action="editarDadosDisc.php" class="form">
            <?php
            error_reporting(0);
            ini_set("display_errors", 0);
            require_once("conn.php");

            $resultado = mysqli_query($conn, "select tbDisciplina.codDisciplina, tbDisciplina.NomeDisciplina, tbCursos.NomeCurso from tbDisciplina inner JOIN tbCursos on tbCursos.codCurso = tbDisciplina.codCurso");



            while ($linha = mysqli_fetch_array($resultado)) {
            ?> <a href="editarDadosDisc.php?id=<?php echo $linha['codDisciplina']; ?>">
                
                    <?php
                    echo $linha['codDisciplina'] . " - " . $linha['NomeDisciplina'] . " - " . $linha['NomeCurso'];
                }
                    ?>
                </a>

        </form>
    </main>
    <footer>

    </footer>
</body>

</html>