<html>
<head>
<title>Consulta do Fornecedor</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<center>
Listagem dos Veterinarios

<form name="form1" method="post" action="">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from Veterinario ");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codVet=$linha['codVet'];
		$nomeVet=$linha['nomeVet'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo do veterinario:</td><td>$codVet</td>";
		echo "<tr><td>Nome do Veterinario:</td><td> $nomeVet</td></tr></table>";
	}
	
?>
</form>
</center>
</body>
</html>
