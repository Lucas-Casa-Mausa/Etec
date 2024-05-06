<?php
include_once("conn.php");

$Categoria = $_POST['categoria'];

$result_usuario ="INSERT INTO tbcategoria(nomeCategoria) VALUES ('$Categoria')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
    <script type=\"text/javascript\">
        alert(\"Categoria cadastrada com sucesso.\");
    </script>
    ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCategoria.php'>
    <script type=\"text/javascript\">
        alert(\"Categoria não foi cadastradada .\");
    </script>
    ";
}

?>