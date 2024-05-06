<html>
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

$resultado = mysqli_query($conn,"select * from tbSerie where codSerie='".$id."'"); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
while($linha = mysqli_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
{ 
	?>
	<form method="post" action="editar_dados2_Serie.php" >
	<input type="hidden" name="codSerie" value="<?php echo $linha['codSerie']; ?>" /> <!– passando o valor da id em um campo oculto –>
	<table>

			<tr><td>Nome da Serie:</td><td> <input type="text" name="nomeSerie" value="<?php echo $linha['nomeSerie']; ?>" /> </td></tr>

			<tr><td>Escolha a Serie</td>
				<td>
				<select name="selectSerie">
					<option value="<?php echo $linha['codSerie']; ?>"><?php echo $linha['nomeSerie']; ?></option>
					<?php
						$result_for = "SELECT * FROM tbSerie";
						$resultado_sel_for = mysqli_query($conn, $result_for);
						while($row_for = mysqli_fetch_assoc($resultado_sel_for)){ ?>
							<option value="<?php echo $row_for['codSerie']; ?>"><?php echo $row_for['nomeSerie']; ?></option> <?php
						}
					?>
				</select>
			</td></tr>		

	</table>

			<input type="submit" value="Editar" />
	</form>
	<?php
}
?> 
</body>
</html>
