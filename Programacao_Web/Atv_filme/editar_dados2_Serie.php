<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Editar Produto</title>
</head>
<body>

	<?php
$id = $_POST['codSerie']; // Recebendo o valor id do formulário
$nomeSerie = $_POST['nomeSerie'];
$codSerie = $_POST['selectSerie'];


require_once("conn.php");



mysqli_query($conn,"UPDATE tbSerie SET nomeSerie='$nomeSerie' WHERE codSerie='".$id."'") or die("erro");

echo "Serie atualizada com sucesso"
?>
<p><a href="editarSerie.php">  Voltar</a>
</body>

</html>
