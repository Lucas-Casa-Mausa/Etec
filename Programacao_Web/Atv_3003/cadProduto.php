<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<form name="form1" method="post" action="cadProduto.php">
	<table>
			<tr> <td> Código do Produto </td><td><input type="text" name="txt_codProduto"></td>
			  <tr> <td>Nome do Produto</td><td> <input type="text" name="txt_nomeProduto"></td>
			  <tr> <td>Quantidade em Estoque </td><td><input type="text" name="txt_qtdeEstoque"></td>
			  <tr> <td>Descrição do Produto</td><td><input type="text" name="txt_descProduto"></td>
			  <tr> <td>Responsável pelo cadastro</td><td><input type="text" name="txt_respCadastro"></td>

  	</table>

    <input type="submit" name="Submit" value="Enviar">
<p>
<?php
	$codProduto=$_POST['txt_codProduto'];
	$nomeProduto=$_POST['txt_nomeProduto'];
	$qtdeEstoque=$_POST['txt_qtdeEstoque'];
	$descProduto=$_POST['txt_descProduto'];
	$respCadastro=$_POST['txt_respCadastro'];
	
	if (empty($codProduto) || empty($nomeProduto) || empty($qtdeEstoque) || empty($descProduto) || empty($respCadastro))
	{
		echo "Erro ao cadastrar: verifique se todos os dados foram digitados";
	}
	else	
	{
		require_once("conn.php");
		
		$insere=mysqli_query($conn,"INSERT INTO tbProduto(codProduto,nomeProduto,qtdeEstoque,descProduto,respCadastro) values('$codProduto','$nomeProduto','$qtdeEstoque','$descProduto','$respCadastro')") or die(mysqli_error());
		
		echo "Cadastrado";
	}
?>
</form>
</body>
</html>
