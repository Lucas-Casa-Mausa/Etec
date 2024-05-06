<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consultar as disciplinas</title>
</head>

<body>
    <header>
        <nav class="menu"><h1>Bem vindo à listagem de disciplinas</h1></nav>
    </header>
    <main>


        <p>
            <?php
            require_once("conn.php");

            $sql = mysqli_query($conn, "select * from VW_see_all");

            while ($linha = mysqli_fetch_array($sql)) {
                $codDisc = $linha['codDisciplina'];
                $nomeDisciplina = $linha['NomeDisciplina'];
                $codCurso = $linha['codCurso'];
                $nomeCurso = $linha['nomeCurso'];
                echo "</p>";

                echo "<table class='table'><tr><td>Codigo da disciplina:</td><td>$codDisc</td>";
                echo "<tr><td> Disciplina:</td><td> $nomeDisciplina</td></tr>";
                echo "<tr><td>Código do Curso:</td><td> $codCurso</td></tr>";
                echo "<tr><td>Nome do Curso:</td><td> $nomeCurso</td></tr>
        </table>";
            }
            ?>
        </p>
    </main>
    <footer>
        <a href="index.html">Voltar</a>
    </footer>
</body>

</html>