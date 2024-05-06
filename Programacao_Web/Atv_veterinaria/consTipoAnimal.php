<html>
<head>
<title>Listagem dos tipos de Animais</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<center>
Listagem de Tipo de Animais

<form name="form1" method="post" action="">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from TipoAnimal ");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codTipoAnimal=$linha['codTipoAnimal'];
		$tipoAnimal=$linha['tipoAnimal'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo do Tipo do animal:</td><td>$codTipoAnimal</td>";
		echo "<tr><td>Tipo do Animal:</td><td>$tipoAnimal</td></tr></table>";
	}
	
?>
</form>
</center>
</body>
</html>
