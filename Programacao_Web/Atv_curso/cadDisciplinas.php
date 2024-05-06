<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de disciplinas</title>
</head>

<body>
    <header>
        <nav class="menu">
            <h1>Cadastro de disciplinas</h1>
        </nav>
    </header>
    <?php
    include_once("conn.php");
    ?>

    <main>
        <form action="Processa_disciplina.php" method="post" class="form" id="Form1">
            Digite a disciplina:<span> <input type="text" maxlength="100" required name="txtDisc" class="curso"></span><br><br>

            <select name="selectCurso" required class="select">
                <option value="" selected disabled>Selecione o Curso</option>
                <?php
                $result_for = " SELECT * FROM  tbCursos";
                $resultado_for = mysqli_query($conn, $result_for);
                while ($row_for = mysqli_fetch_assoc($resultado_for)) { ?>
                    <option value="<?php echo $row_for['codCurso']; ?>"><?php echo $row_for['NomeCurso']; ?>
                    </option><?php

                            }

                                ?>
            </select><br><br>


            <button class="confirma" value="Cadastrar" type="button" onclick="enviarFormulario()">Cadastrar</button>
        </form>
    </main>
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