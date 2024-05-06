<html>
	<head>
		<title> Cadastro de Series</title>
		<meta charset="utf-8">
	</head>
	</body>
	<?php
		include_once("conn.php");
	?>

		<form method="POST" action="processa_cadSerie.php">
		Serie: <input type="text" name="txtSerie"><br><br>
				<select name="selectSerie">
					<option>Selecione Genero</option>
					<?php
						$result_for = "SELECT * FROM tbGeneroSerie";
						$resultado_sel_for = mysqli_query($conn, $result_for);
						while($row_for = mysqli_fetch_assoc($resultado_sel_for)){ ?>
							<option value="<?php echo $row_for['codGeneroSerie']; ?>"><?php echo $row_for['nomeGenero']; ?></option> <?php
						}
					?>
				</select><br><br>

			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>
