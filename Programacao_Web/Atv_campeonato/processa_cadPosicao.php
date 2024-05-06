<?php
	include_once("conn.php");
	$pos = $_POST['txtPosicao'];
	$result_pos = "INSERT INTO tbposicao(posicao) VALUES ('$pos')";

	$resultado_pos = mysqli_query($conn, $result_pos);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadPosicao.php'>
					<script type=\"text/javascript\">
						alert(\"Posição cadastrada com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadPosicao.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
