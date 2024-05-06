<html>
<head>
<title>Consulta do Fornecedor</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<center>
Listagem de Animais

<form name="form1" method="post" action="">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from animal ");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codAnimal=$linha['codAnimal'];
		$nomeAnimal=$linha['nomeAnimal'];
		$codTipoAnimal=$linha['codTipoAnimal'];
		$codCliente=$linha['codCliente'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo do Animal:</td><td>$codAnimal</td>";
		echo "<table><tr><td>Nome do animalzinho:</td><td>$nomeAnimal</td>";
		echo "<table><tr><td>Codigo do Tipo Animal:</td><td>$codTipoAnimal</td>";
		echo "<tr><td>Codigo do Cliente:</td><td> $codCliente</td></tr></table>";
	}
	
?>
</form>
			<a href="ED_Animal.php">Editar Dados</a>
</center>
</body>
</html>
