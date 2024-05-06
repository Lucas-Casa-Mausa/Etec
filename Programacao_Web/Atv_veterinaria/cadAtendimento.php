<html>
	<head>
		<title> Cadastro de Atendimento</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	</body>
	<?php
		include_once("conn.php");
	?>

		<form method="POST" action="processa_cad_Atendimento.php">
		Diagnostico: <br>
		<textarea  name="txtDiagnostico"
          rows="5" cols="33" maxlength="100">

			</textarea><br><br>
				<select name="selectAnimal">
					<option>Selecione o  animal </option>
					<?php
						$result_for = "SELECT * FROM animal";
						$resultado_sel_for = mysqli_query($conn, $result_for);
						while($row_for = mysqli_fetch_assoc($resultado_sel_for)){ ?>
							<option value="<?php echo $row_for['codAnimal']; ?>"><?php echo $row_for['nomeAnimal']; ?></option> <?php
						}
					?>
				</select><br><br>
				<select name="selectVeterinario">
					<option>Selecione o Veterinario </option>
					<?php
						$result_for = "SELECT * FROM veterinario";
						$resultado_sel_for = mysqli_query($conn, $result_for);
						while($row_for = mysqli_fetch_assoc($resultado_sel_for)){ ?>
							<option value="<?php echo $row_for['codVet']; ?>"><?php echo $row_for['nomeVet']; ?></option> <?php
						}
					?>
				</select><br><br>

			<input type="submit" value="Cadastrar">
		</form>
		<a href="homepage.php">Voltar</a>
	</body>
</html>
