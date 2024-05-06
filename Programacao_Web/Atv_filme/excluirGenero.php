<html>
<head>
<title>Excluir Produto</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<form name="form1" method="post" action="excluirGenero.php">
  <p> 
    <input type="text" name="txt_cod">
  </p>
  <p> 
    <input type="submit" name="bt" value="Confirma">
  </p>
  <p>
<?php

	error_reporting(0);
	ini_set("display_errors", 0 );

	$cons=$_POST['txt_cod'];
	$bt=$_POST['bt'];
	
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select tbGeneroSerie.codGeneroSerie, tbGeneroSerie.nomeGenero, tbSerie.nomeSerie from tbGeneroSerie inner JOIN tbSerie on tbSerie.codSerie = tbGeneroSerie.codGeneroSerie");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codGenero=$linha['codGeneroSerie'];
		$nomeGenero=$linha['nomeGenero'];
		$Serie=$linha['nomeSerie'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo do Genero</td><td>$codGenero</td>";
		echo "<tr><td> Nome do Genero </td><td> $nomeGenero</td>";
		echo "<tr><td> Serie </td><td> $Serie</td></tr></table>";
	}
	
	if ($bt!='')
	{
			mysqli_query($conn,"DELETE FROM tbGeneroSerie WHERE codGeneroSerie='$cons'") or die("Erro na Exclusão");
			
			echo " Excluído";
			
			echo"<script>alert('Produto Excluído')</script>";
			echo"<meta http-equiv='refresh'content='0'>";
	}
?>
</form>
</body>
</html>
