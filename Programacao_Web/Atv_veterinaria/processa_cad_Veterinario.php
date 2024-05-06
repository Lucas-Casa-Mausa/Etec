<?php
	include_once("conn.php");
	$vet = $_POST['txtVet'];
	

	$result_vet = "INSERT INTO veterinario(nomeVet) VALUES ('$vet')";

	$resultado_vet = mysqli_query($conn, $result_vet);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
					<script type=\"text/javascript\">
					alert(\"Cadastrado com Sucesso\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadVeterinario.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
