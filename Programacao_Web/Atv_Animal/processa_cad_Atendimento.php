<?php
	include_once("conn.php");

	$diagnostico = $_POST['txtDiagnostico'];
	$codAnimal = $_POST['selectAnimal'];
	$codVet = $_POST['selectVeterinario'];

	$result_atendi = "INSERT INTO atendimento(codAnimal,codVet,Diagnostico) VALUES ('$codAnimal','$codVet','$diagnostico')";

	$result_atendimento = mysqli_query($conn, $result_atendi);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
					<script type=\"text/javascript\">
						alert(\"Atendimento cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAtendimento.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
