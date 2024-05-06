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

$resultado= mysqli_query($conn,"SELECT * FROM Animal where codAnimal= '".$id."'"); // A váriavel $resultado faz uma consulta em nossa tabela     selecionando somente o registro desejado
while($linha = mysqli_fetch_array($resultado))
{
    ?>
    <form method="POST" action="ED_Animal2.php">
    <input type="hidden" name="codAnimal" value="<?php echo $linha['codAnimal'];?>" />;
    <table>
        <tr><td>Nome do Animal:</td></tr><td><input type="text" name="nomeAnimal" value="<?php echo $linha['nomeAnimal'];?>" /></td>
       
    </table>

        <input type="submit" value="Editar">
      </form>
    <?php
}
    
    ?>
</body>
</html>