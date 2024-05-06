<?php
	include_once("conn.php");
	$jog = $_POST['selectJogador'];
	$time = $_POST['selectTime'];
    $status = $_POST['selectStatus'];

	$result_jog = "INSERT INTO tbjogadortime(codJogador, codTime, codStatus) VALUES ('$jog', '$time', '$status')";
	$resultado_jog = mysqli_query($conn, $result_jog);
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadJogadorTime.php'>
					<script type=\"text/javascript\">
						alert(\"Jogador cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadJogadorTime.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>