<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuario</title>
</head>
<body>
    <form name="form1" method="post" action="teste_excluir.php">
        <p>
            <input type="text" name="txt_cod">
        </p>
    <p>
        <input type="submit" name="bt" value="Confirma">
    </p>
    <?php 
        error_reporting(0);
        ini_set("display_errors", 0);
        $cons = $_POST['txt_cod'];
        $bt   = $_POST['bt'];

        require_once("conn.php");
        $sql=mysqli_query($conn,"SELECT * FROM usuarios");

        while($linha=mysqli_fetch_array($sql))
        {
            $id      =$linha ['id'];
            $usuario =$linha ['usuario'];
            $senha   =$linha ['senha'];
            $nivel   =$linha ['nivel'];

            echo "<p>";

            echo "<table><tr><td> ID do usuario</td> <td>$id</td>";
            echo "<tr><td> Usuario</td> <td>$usuario</td>";
            echo "<tr><td> Senha</td> <td>$senha</td>";
            echo "<tr><td> nivel</td> <td>$nivel</td></table>";
        }
        if ($bt!='')
        {
            mysqli_query($conn, "DELETE FROM usuarios WHERE id='$cons'") or die("Erro na exclusçao");

            echo " Excluido ";

            echo "<meta http=equiv='refresh'content='0'>";
        }

    ?>
    </form>
    
</body>
</html>