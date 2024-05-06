<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Documento sem título</title>
</head>
<body>
	<?php
	
error_reporting(0);
ini_set("display_errors", 0 );
	
$id = $_GET['id']; // Recebendo o valor vindo do link

require_once("conn.php");

$resultado = mysqli_query($conn,"SELECT * FROM tbproduto WHERE codProduto = '".$id."'"); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
while($linha = mysqli_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
{ 
	?>
	<form method="post" action="editar_dados2.php" >
	<input type="hidden" name="codProduto" value="<?php echo $linha['codProduto']; ?>" /> <!– passando o valor da id em um campo oculto –>
	<table>

			<tr><td>Nome:</td><td> <input type="text" name="nomeProduto" value="<?php echo $linha['nomeProduto']; ?>" /> </td><!– mostrando dentro do form o valor do campo nome –>
			<tr><td>Quantidade:</td><td> <input type="text" name="qtdeEstoque" value="<?php echo $linha['qtdeEstoque']; ?>" /> </td><!– mostrando dentro do form o valor do campo email –>
			<tr><td>Descrição:</td><td> <input type="text" name="descProduto" value="<?php echo $linha['descProduto']; ?>" /> </td>
			<tr><td>Responsável pelo cadastro:</td><td> <input type="text" name="respCadastro" value="<?php echo $linha['respCadastro']; ?>" /> </td>
	</table>

			<input type="submit" value="Editar" />
	</form>
	<?php
}
?> 


</body>

</html>