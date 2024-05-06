<!DOCTYPE html>
<html>
	<head>
		<title>Cadastro</title>
		<meta charset="utf-8">
	</head>
	</body>

	<?php
		include_once("conn.php");
	?>

		<form method="POST" action="processa_cadJogadorTime.php">

				<select name="selectJogador">
					<option>Selecione o Jogador</option>
					<?php
						$result_jog = "SELECT * FROM tbjogador";
						$resultado_sel_jog = mysqli_query($conn, $result_jog);
						while($row_pos = mysqli_fetch_assoc($resultado_sel_jog)){ ?>
							<option value="<?php echo $row_pos['codJogador']; ?>"><?php echo $row_pos['nomeJogador']; ?></option> <?php
						}
					?>
				</select><br><br>

                <select name="selectTime" id="">
                    <option>Selecione o Time</option>
                    <?php
						$result_time = "SELECT * FROM tbtime";
						$resultado_sel_time = mysqli_query($conn, $result_time);
						while($row_pos = mysqli_fetch_assoc($resultado_sel_time)){ ?>
							<option value="<?php echo $row_pos['codTime']; ?>"><?php echo $row_pos['clube']; ?></option> <?php
						}
					?>
                </select><br><br>
                    
                <select name="selectStatus" id="">
                    <option>Selecione o Status</option>
                        <?php
                            $result_status = "SELECT * FROM tbstatus";
                            $resultado_sel_status = mysqli_query($conn, $result_status);
                            while($row_pos = mysqli_fetch_assoc($resultado_sel_status)){ ?>
                                <option value="<?php echo $row_pos['codStatus']; ?>"><?php echo $row_pos['descricaoStatus']; ?></option> <?php
                            }
                        ?>
                </select><br><br>

			<input type="submit" value="Cadastrar"><br><br>
            <a href="index.php">Voltar</a>
		</form>
	</body>
</html>
