<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Buscar um curso</title>
</head>
<body>
    <header>
        <nav class="menu"><h1>Bem vindo à página de busca de cursos</h1></nav>
    </header>
    <main>
        <form action="BuscaCurso.php" method="POST" class="form" id="Form1">
            Digite o nome do curso:<span><input type="text" maxlength="100" required name="txtCurso" class="curso"></span><br><br>
            <button class="confirma" value="Cadastrar" type="button" onclick="enviarFormulario()">Cadastrar</button>
        </form>
    </main>
    <footer>

    </footer>

    <?php
    require_once("conn.php");
    if (isset($_POST['txtCurso'])) {
    $nomeCurso = $_POST['txtCurso'];
    strtolower($nomeCurso);
    
    $pesquisa = "SELECT NomeCurso from tbCursos where '$nomeCurso' = NomeCurso";
    $pesquisa_resul = mysqli_query($conn,$pesquisa);
    if(mysqli_affected_rows($conn) !=0){
        
        echo "Temos esse curso disponivel";
    }else{
        echo" Não temos esse curso disponivel ";
    }

    }
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