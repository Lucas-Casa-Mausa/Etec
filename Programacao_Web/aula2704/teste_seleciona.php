<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Usuario</title>
</head>
<body>
    <form action="post" name="form1" action="teste_seleciona.php">
        <br>
        <?php 
        require_once("conn.php");
        $sql=mysqli_query($conn, "SELECT * FROM usuarios");
        while($linha=mysqli_fetch_array($sql))
        {
            $id      =$linha['id'];
            $usuario =$linha['usuario'];
            $senha   =$linha['senha'];
            $nivel   =$linha['nivel'];
            
            echo"<br><br>";
            
            echo "<table><tr><td>ID do Usuario</td></tr></table>";
            echo "<tr><td>Usuario</td> <td> $usuario</td><br>";
            echo "<tr><td>Senha</td> <td>$senha</td><br>";
            echo "<tr><td>Nivel</td> <td>$nivel</td></table><br>";
        }
        ?>

    </form>
    
</body>
</html>