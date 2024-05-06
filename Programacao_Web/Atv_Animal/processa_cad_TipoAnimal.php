<?php
	include_once("conn.php");
	$TipoAnimal = $_POST['txtTipoAnimal'];
	

	$result_T_animal = "INSERT INTO tipoAnimal(tipoAnimal) VALUES ('$TipoAnimal')";

	$resultado_TipoAnimal = mysqli_query($conn, $result_T_animal);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadTipoAnimal.php'>
					<script type=\"text/javascript\">
					alert(\"Cadastrado com Sucesso\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadTipoAnimal.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
