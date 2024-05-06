<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Atendimentos</title>
</head>
<body>
    <form name="form1" method="post" action="excluirAtend.php">
        <p>Insira o código da consulta que você deseja excluir</p>
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
        $sql=mysqli_query($conn,"SELECT * FROM vw_animal_atend");

        while($linha=mysqli_fetch_array($sql))
        {
            
            $codAnimal =$linha ['codAnimal'];
            $NomeAnimal  =$linha ['nomeAnimal'];
            $codAtend  =$linha ['codAtendimento'];
            $diag   =$linha ['Diagnostico'];

            echo "<p>";

           
            echo "<tr><td> Id  do Animal:</td> <td>$codAnimal</td><br>";
            echo "<tr><td> Id da Consulta:</td> <td>$codAtend</td><br>";
            echo "<tr><td> Nome do Animal:</td> <td>$NomeAnimal</td><br>";
            echo "<tr><td> Diagnóstico:</td> <td>$diag</td></table>";
        }
        if ($bt!='')
        {
            mysqli_query($conn, "DELETE from atendimento where codAtendimento= '$cons'") or die("Erro na excluso");

            echo " <script>alert('Excluido com sucesso')</script>";
            echo"<meta http-equiv='refresh'content='0'>";
        }

    ?>
    </form>
    <a href="homepage.php">Voltar</a>
</body>
</html>