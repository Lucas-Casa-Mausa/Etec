<html>
<head>
<title>Consulta dos Generos</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
Listagem de Generos

<form name="form1" method="post" action="">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from tbGeneroSerie");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codForn=$linha['codGeneroSerie'];
		$nomeForn=$linha['nomeGenero'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo</td><td>$codForn</td>";
		echo "<tr><td>Genero</td><td> $nomeForn</td></tr></table>";
	}
	
?>
</form>
</body>
</html>
