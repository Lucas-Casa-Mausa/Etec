<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar Disciplina</title>
</head>

<body>
	<?php
	$id = $_POST['codDisciplina']; 
	$NomeDisc = $_POST['NomeDisciplina'];
	$codCurso = $_POST['selectCurso'];


	require_once("conn.php");



	mysqli_query($conn, "UPDATE tbDisciplina SET NomeDisciplina='$NomeDisc', codCurso='$codCurso' WHERE codCurso='" . $id . "'") or die("erro");

	echo "Cadastro atualizado com sucesso"
	?>
	<p><a href="index.html"> Voltar</a>
</body>

</html>
