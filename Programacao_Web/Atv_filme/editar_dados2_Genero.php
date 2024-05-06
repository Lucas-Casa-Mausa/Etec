<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar Produto</title>
</head>
<body>

	<?php
$id = $_POST['codGeneroSerie']; // Recebendo o valor id do formulário
$Genero = $_POST['nomeSer'];

require_once("conn.php");
mysqli_query($conn,"UPDATE tbGeneroSerie SET nomeGenero='$Genero' WHERE codGeneroSerie='".$id."'") or die("erro");

echo "Cadastro atualizado com sucesso"
?>


<p><a href="editarGenero.php">  Voltar</a>
</body>
</html>
