<?php
	include_once("conn.php");
	$cliente = $_POST['txtCliente'];
	$tel = $_POST['txtTel'];
	$email =$_POST['txtEmail'];

	$result_cliente = "INSERT INTO cliente(nomeCliente,telefoneCliente,EmailCliente	) VALUES ('$cliente','$tel','$email')";

	$resultado_cliente = mysqli_query($conn, $result_cliente);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCliente.php'>
					<script type=\"text/javascript\">
					alert(\"Cadastrado com Sucesso\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCliente.php'>
					<script type=\"text/javascript\">
						alert(\"Erro ao cadastrar!\");
					</script>
				";	
			}
?>
