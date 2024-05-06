<html>
<head>
<title>Consulta de Cliente</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<center>
Listagem de Clientes

<form name="form1" method="post" action="">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from cliente ");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codCLiente=$linha['codCLiente'];
		$nomeCliente=$linha['nomeCliente'];
		$telefoneCliente=$linha['telefoneCliente'];
        $emailCliente=$linha['EmailCliente'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo do cliete:</td><td>$codCLiente</td>";
		echo "<table><tr><td>Nome do cliete:</td><td>$nomeCliente</td>";
        echo "<table><tr><td>Telefone do cliete:</td><td>$telefoneCliente</td>";
		echo "<tr><td>Email do Cliente:</td><td> $emailCliente</td></tr></table>";
	}
	
?>
</form>
</center>
</body>
</html>
