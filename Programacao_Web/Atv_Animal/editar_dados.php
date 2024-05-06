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

$resultado= mysqli_query($conn,"SELECT * FROM usuarios where id= '".$id."'"); // A váriavel $resultado faz uma consulta em nossa tabela     selecionando somente o registro desejado
while($linha = mysqli_fetch_array($resultado))
{
    ?>
    <form method="POST" action="editar_dados.php2">
    <input type="hidden" name="idCli" value="<?php echo $linha['id'];?>" />;
    <table>
        <tr><td>Usuario:</td></tr><td><input type="text" name="usuario" value="<?php echo $linha['usuario'];?>" /></td>
        <tr><td>Senha:</td></tr><td><input type="text" name="senha" value="<?php echo $linha['senha'];?>" /></td>
        <tr><td>Nivel:</td></tr><td><input type="text" name="nivel" value="<?php echo $linha['nivel'];?>" /></td>
    </table>

        <input type="submit" value="Editar">
      </form>
    <?php
}
    
    ?>
</body>
</html>