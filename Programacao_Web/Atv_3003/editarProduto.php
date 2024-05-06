<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<form name="form1" method="post" action="editar_dados.php">
 
<?php

error_reporting(0);
ini_set("display_errors", 0 );

require_once("conn.php");


$resultado = mysqli_query($conn,"SELECT * FROM tbproduto"); // Há variável $resultado faz uma consulta em nossa tabela selecionando todos os registros de todos os campos


while($linha = mysqli_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
{ //Inicia o loop
	?> <a href="editar_dados.php?id=<?php echo $linha['codProduto']; ?>"> <!– passando o valor do id para a página editar1.php –>
	<?php
	echo $linha['codProduto'] . " - " . $linha['nomeProduto'] . " - " . $linha['qtdeEstoque'] . " - " . $linha['descProduto'] . " - " . $linha['respCadastro']; // Mostra o valor do registro dentro do loop
	echo "<br />"; 
} // Retorna para o início do loop caso existam mais registros a serem mostrados
?>
</a>

</form>
</body>
</html>
