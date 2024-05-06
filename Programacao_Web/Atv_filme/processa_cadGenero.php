<?php
include_once("conn.php");

$Genero = $_POST['txtGenero'];

$result_usuario ="INSERT INTO tbGeneroSerie(nomeGenero) VALUES ('$Genero')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
    <script type=\"text/javascript\">
        alert(\"Genero Cadastrado Com Sucesso.\");
    </script>
    ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadGenero.php'>
    <script type=\"text/javascript\">
        alert(\"Genero Não Foi Cadastrado .\");
    </script>
    ";
}

?>