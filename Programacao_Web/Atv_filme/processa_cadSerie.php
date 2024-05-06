<?php
include_once("conn.php");

$Serie = $_POST['txtSerie'];
$Genero =$_POST['selectSerie'];

$result_usuario ="INSERT INTO tbSerie(nomeSerie,codGeneroSerie) VALUES ('$Serie','$Genero')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
    <script type=\"text/javascript\">
        alert(\"Serie cadastrada com sucesso.\");
    </script>
    ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadSerie.php'>
    <script type=\"text/javascript\">
        alert(\"Serie não foi cadastrada .\");
    </script>
    ";
}

?>