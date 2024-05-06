<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Cursos</title>
</head>

<body>
    <header>
        <nav class="menu">
            <h1>Bem vindo ao Cadastro de cursos</h1>
        </nav>
    </header>
    <div class="form">
        <main>
            <form action="Processa_Curso.php" method="post" id="Form1">
                Digite o nome do Curso:<span> <input type="text" required maxlength="100" name="txtCurso" class="curso"></span><br><br>

                <button class="confirma" value="Cadastrar" type="button" onclick="enviarFormulario()">Cadastrar</button>
            </form>
        </main>
    </div>
    <footer>
        <a href="index.html">Voltar</a>
    </footer>
    <script>
        function enviarFormulario() {
            var formulario = document.getElementById("Form1");
            formulario.submit();
        }
    </script>
</body>

</html>