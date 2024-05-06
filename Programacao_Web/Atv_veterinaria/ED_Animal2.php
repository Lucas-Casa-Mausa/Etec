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
    $usuario=$_POST['usuario'];
    $senha = $_POST['senha'];
    $nivel= $_POST['nivel'];

    require_once("conn.php");


    mysqli_query($conn, "UPDATE Animal set Animal='$Animal' where id='".$id."'") or die ("Erro");
    echo "Cadastro atualizado com sucesso";

    ?>
    <p><a href="Consulta.php"> Voltar</a></p>



</body>
</html>