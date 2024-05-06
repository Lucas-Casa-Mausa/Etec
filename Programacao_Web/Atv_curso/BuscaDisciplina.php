<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buscar as Disciplinas</title>
</head>

<body>
    <header>
        <nav class="menu">
            <h1>Bem vindo à página de busca das Disciplinas</h1>
        </nav>
    </header>
    <main>
        <form action="BuscaDisciplina.php" method="POST" class="form" id="Form1">
            Digite o nome da Disciplina:<span><input type="text" maxlength="100" required name="txtDisciplina" class="curso"></span><br><br>
            <button class="confirma" value="Cadastrar" type="button" onclick="enviarFormulario()">Cadastrar</button>
        </form>
    </main>
    <footer>

    </footer>
    <?php
    require_once("conn.php");
    if (isset($_POST['txtDisciplina'])) {

    $nomeDisciplina = $_POST['txtDisciplina'];
    strtolower($nomeDisciplina);

    $pesquisa = "SELECT tbCursos.NomeCurso
    FROM tbCursos
    INNER JOIN tbDisciplina ON tbCursos.codCurso = tbDisciplina.codCurso
    WHERE tbDisciplina.NomeDisciplina = '$nomeDisciplina'";

    $pesquisa_resul = mysqli_query($conn, $pesquisa);
    if ($pesquisa_resul->num_rows>0) {
        while($row = $pesquisa_resul->fetch_assoc()){
        echo "Temos essa Disciplina disponivel no curso '{$row['NomeCurso']}'";
        }
    } else {
        echo " Não temos essa disciplina em nenhum curso ";
    }
    }
    $conn->close();
    ?>
    <a href="index.html">Voltar</a>
    <script>
        function enviarFormulario() {
            var formulario = document.getElementById("Form1");
            formulario.submit();
        }
    </script>
</body>
</html>