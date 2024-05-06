<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados</title>
</head>
<body>
    <?php 

error_reporting(0);
ini_set("display_errors",0);

$id = $_GET['id'];

require_once("conn.php");

$resultado= mysqli_query($conn,"SELECT * FROM  cliente where codCLiente = '".$id."'"); // A váriavel $resultado faz uma consulta em nossa tabela     selecionando somente o registro desejado
while($linha = mysqli_fetch_array($resultado))
{
    ?>
    <form method="POST" action="editar_dados2.php">
    <input type="hidden" name="idCli" value="<?php echo $linha['id'];?>" />
    <table>
        <tr><td>Cliente:</td></tr><td><input type="text" name="cliente" value="<?php echo $linha['codCLiente'];?>" /></td>
        <tr><td>Nome:</td></tr><td><input type="text" name="nome" value="<?php echo $linha['nomeCliente'];?>" /></td>
        <tr><td>Email:</td></tr><td><input type="text" name="email" value="<?php echo $linha['EmailCliente'];?>" /></td>
    </table>

        <input type="submit" value="Editar">
      </form>
    <?php
}
    
    ?>
</body>
</html>