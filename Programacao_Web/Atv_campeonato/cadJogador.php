<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro</title>
		<meta charset="utf-8">
	</head>
	</body>

	<?php
		include_once("conn.php");
	?>

		<form method="POST" action="processa_cadJogador.php">

		Nome do Jogador: <input type="text" name="txtNome"><br><br>
		
				<select name="selectPosicao">
					<option>Selecione a posição</option>
					<?php
						$result_pos = "SELECT * FROM tbposicao";
						$resultado_sel_pos = mysqli_query($conn, $result_pos);
						while($row_pos = mysqli_fetch_assoc($resultado_sel_pos)){ ?>
							<option value="<?php echo $row_pos['codPosicao']; ?>"><?php echo $row_pos['posicao']; ?></option> <?php
						}
					?>
				</select><br><br>

		Idade: <input type="text" name="txtIdade"><br><br>
		Altura: <input type="text" name="txtAltura"><br><br>
		Peso: <input type="text" name="txtPeso"><br><br>

			<input type="submit" value="Cadastrar"><br><br>
            <a href="index.php">Voltar</a>
		</form>
	</body>
</html>
