<?php
	include_once("conn.php");
	$time = $_POST['txtTime'];
	$result_time = "INSERT INTO tbtime(Clube) VALUES ('$time')";

	$resultado_time = mysqli_query($conn, $result_time);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadTime.php'>
					<script type=\"text/javascript\">
						alert(\"Time cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadTime.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
