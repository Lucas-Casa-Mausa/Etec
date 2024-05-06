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
        <nav class="menu">
            <h1>Editar o curso</h1>
        </nav>
    </header>
    <main>
        <?php
        $id = $_POST['codCurso'];
        $Curso = $_POST['NomeCurso'];

        require_once("conn.php");
        mysqli_query($conn, "UPDATE tbCursos SET NomeCurso='$Curso' WHERE codCurso='" . $id . "'") or die("Erro");

        echo "Cadastro atualizado com sucesso";
        ?>
    </main>
    <footer>
        <p><a href="index.html"> Voltar</a>
    </footer>
</body>

</html>