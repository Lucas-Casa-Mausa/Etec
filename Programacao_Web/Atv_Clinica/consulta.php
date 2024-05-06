<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
</head>
<body>
            <fieldset>
                <form action="cad_consulta.php" method="POST">

                INFORME A DATA DA CONSULTA:
                    <input type="date" name="dateCon" id="">

                    <br><br>

                INFORME A HORA DA CONSULTA:
                    <input type="time" name="timeCon" id="">

                    <br><br>

                    <select name="selectpaciente">
                                <option>Selecione</option>
                                    <?php
                                    include_once("conn.php");
                                    

                                        $result_niveis_acessos = "SELECT * FROM tbpaciente";
                                        $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                                        while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                                            <option value="<?php echo $row_niveis_acessos['codPaciente']; ?>"><?php echo $row_niveis_acessos['nomePaciente']; ?></option> <?php
                                        }
                                    ?>
                        </select><br><br>

                        <select name="selectmedico">
                                <option>Selecione</option>
                                    <?php
                                    include_once("conn.php");
                                    

                                        $result_niveis_acessos = "SELECT * FROM tbmedico";
                                        $resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
                                        while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                                            <option value="<?php echo $row_niveis_acessos['codMedico']; ?>"><?php echo $row_niveis_acessos['nomeMedico']; ?></option> <?php
                                        }
                                    ?>
                        </select><br><br>

                DIAGNOSTICO DO AGENDAMENTO:
                    <input type="text" name="txtdda" id="">

                                        <input type="submit" value="Agendar">
                </form>
            </fieldset>
</body>
</html>