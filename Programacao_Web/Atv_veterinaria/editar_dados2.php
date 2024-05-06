<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de usuario </title>
</head>
<body>
    <?php
    
    $id= $_POST['idCli'];
    $nomeCliente=$_POST['nomeCliente'];
    $Email = $_POST['EmailCliente'];
    

    require_once("conn.php");


    mysqli_query($conn, "UPDATE cliente set nomeCliente='$nomeCliente',EmailCliente='$Email' where codCLiente='".$id."'") or die ("Erro");
    echo "Cadastro atualizado com sucesso";

    ?>
    <p><a href="Consulta.php"> Voltar</a></p>



</body>
</html>