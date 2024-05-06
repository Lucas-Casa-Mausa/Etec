<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar os dados do curso</title>
</head>

<body>
    <header>
        <nav class="menu">
            <h1>Bem vindo a edição dos cursos</h1>
        </nav>
    </header>
    <main>
        <?php
        error_reporting(0);
        ini_set("display_errors", 0);
        $id = $_GET['id'];
        require_once("conn.php");
        $resultado = mysqli_query($conn, "select * from tbCursos where codCurso = '" . $id . "'");
        while ($linha = mysqli_fetch_array($resultado)) {
        ?>
            <form method="post" action="editarDadosCurso2.php" class="form" id="Form1">
                <input type="hidden" name="codCurso" value="<?php echo $linha['codCurso']; ?>">

                <table class="table2">

                    <tr>
                    <tr>Digite o nome que você deseja</tr>
                    <td>Curso:</td>
                    <td> <input type="text" name="NomeCurso" value="<?php echo $linha['NomeCurso']; ?>" class="dadosCurso" /> </td>
                    </tr>

                </table><br>

                <button class="confirma" value="Cadastrar" type="button" onclick="enviarFormulario()">Cadastrar</button>
            </form>
        <?php
        }
        ?>
    </main>
    <footer>

    </footer>
    <script>
        function enviarFormulario() {
            var formulario = document.getElementById("Form1");
            formulario.submit();
        }
    </script>
</body>

</html>