<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição das disciplinas</title>
</head>

<body>
    <header>
        <nav class="menu">
            <h1>Bem vindo à edição de Disciplinas</h1>
        </nav>
    </header>
    <main>
        <?php
        error_reporting(0);
        ini_set("display_errors", 0);
        $id = $_GET['id'];

        require_once("conn.php");

        $resultado = mysqli_query($conn, "select tbDisciplina.codDisciplina, tbDisciplina.NomeDisciplina, tbDisciplina.codCurso, tbCursos.NomeCurso from tbDisciplina inner JOIN tbCursos on tbCursos.codCurso = tbDisciplina.codCurso where codDisciplina = '" . $id . "'");

        while ($linha = mysqli_fetch_array($resultado)) {
        ?>
            <form method="post" action="editarDadosDisc2.php">
                <input type="hidden" name="codDisciplina" value="<?php echo $linha['codDisciplina']; ?>" />
                <table>

                    <tr>
                        <td>Disciplina:</td>
                        <td> <input type="text" name="NomeDisciplina" value="<?php echo $linha['NomeDisciplina']; ?>" /> </td>
                    </tr>

                    <tr>
                        <td>Escolha o curso:</td>
                        <td>
                            <select name="selectCurso">
                                <option disabled selected></option>
                              
                                <?php
                                $result_for = "SELECT * FROM tbCursos";
                                $resultado_sel_for = mysqli_query($conn, $result_for);
                                while ($row_for = mysqli_fetch_assoc($resultado_sel_for)) { ?>
                                    <option value="<?php echo $row_for['codCurso']; ?>"><?php echo $row_for['NomeCurso']; ?></option> <?php
                                                                                                                                            }
                                                                                                                                                ?>
                            </select>
                        </td>
                    </tr>

                </table>

                <input type="submit" value="Editar" />
            </form>
        <?php
        }
        ?>
    </main>
    <footer>

    </footer>

</body>

</html>
<!-- <option value="<?php echo $linha['codCurso']; ?>"><?php echo $linha['NomeCurso']; ?></option> -->