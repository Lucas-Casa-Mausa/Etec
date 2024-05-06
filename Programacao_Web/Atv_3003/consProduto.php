<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
Código

<form name="form1" method="post" action="teste_seleciona.php">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"SELECT * FROM tbProduto");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codProduto=$linha['codProduto'];
		$nomeProduto=$linha['nomeProduto'];
		$qtdeEstoque=$linha['qtdeEstoque'];
		$descProduto=$linha['descProduto'];
		$respCadastro=$linha['respCadastro'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo do Produto</td><td>$codProduto</td>";
		echo "<tr><td> Nome do Produto </td><td> $nomeProduto</td>";
		echo "<tr><td>Quantidade em Estoque </td><td> $qtdeEstoque</td>";
		echo "<tr><td>Descrição do Produto </td><td> $descProduto</td>";
		echo "<tr><td>Responsável pelo cadastro </td><td> $respCadastro</td></table>";
	}
	
?>
</form>
</body>
</html>
