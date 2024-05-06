<html>
	<head>
		<title> Cadastro de Animais</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	</body>
	<?php
		include_once("conn.php");
	?>

		<form method="POST" action="processa_cad_Animal.php">
		Nome do animal: <input type="text" name="txtAnimal"><br><br>


				<select name="selectTipoAnimal">
					<option>Selecione o tipo do animal </option>
					<?php
						$result_for = "SELECT * FROM tipoAnimal";
						$resultado_sel_for = mysqli_query($conn, $result_for);
						while($row_for = mysqli_fetch_assoc($resultado_sel_for)){ ?>
							<option value="<?php echo $row_for['codTipoAnimal']; ?>"><?php echo $row_for['tipoAnimal']; ?></option> <?php
						}
					?>
				</select><br><br>
				<select name="selectCliente">
					<option>Selecione o cliente </option>
					<?php
						$result_for2 = "SELECT * FROM cliente";
						$resultado_sel_for2 = mysqli_query($conn, $result_for2);
						while($row_for2 = mysqli_fetch_assoc($resultado_sel_for2)){ ?>
							<option value="<?php echo $row_for2['codCLiente']; ?>"><?php echo $row_for2['nomeCliente']; ?></option> <?php
						}
					?>
				</select><br><br>

			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>
