<html>
<head>
<title>Consulta do Fornecedor</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
Listagem de Series

<form name="form1" method="post" action="">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from tbSerie");
	









	while($linha=mysqli_fetch_array($sql))
	{
		$codForn=$linha['codSerie'];
		$nomeForn=$linha['nomeSerie'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo</td><td>$codForn</td>";
		echo "<tr><td>Series</td><td> $nomeForn</td></tr></table>";
	}
	
?>
</form>
</body>
</html>
