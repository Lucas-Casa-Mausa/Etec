<?php
	include_once("conn.php");

	$nomeAnimal = $_POST['txtAnimal'];
	$codTipoAnimal = $_POST['selectTipoAnimal'];
	$codCliente = $_POST['selectCliente'];

	$result_animal = "INSERT INTO animal(nomeAnimal,codTipoAnimal,codCliente) VALUES ('$nomeAnimal','$codTipoAnimal','$codCliente')";

	$resultado_animal = mysqli_query($conn, $result_animal);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
					<script type=\"text/javascript\">
						alert(\"Animal cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAnimal.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
