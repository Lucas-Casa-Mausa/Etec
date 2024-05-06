<html>
<head>
<title>Editar produto</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<form name="form1" method="post" action="editar_dados_Serie.php">
 
<?php

error_reporting(0);
ini_set("display_errors", 0 );

require_once("conn.php");


$resultado = mysqli_query($conn,"select * from tbSerie"); // Há variável $resultado faz uma consulta em nossa tabela selecionando todos os registros de todos os campos


while($linha = mysqli_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
{ //Inicia o loop
	?> <a href="editar_dados_Serie.php?id=<?php echo $linha['codSerie']; ?>"> <!– passando o valor do id para a página editar1.php –>
	<?php
	echo $linha['codSerie'] . " - " . $linha['nomeSerie']; // Mostra o valor do registro dentro do loop
	echo "<br />"; 
} // Retorna para o início do loop caso existam mais registros a serem mostrados
?>
</a>

</form>
</body>
</html>
