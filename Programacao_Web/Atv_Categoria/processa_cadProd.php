<?php
include_once("conn.php");

$produto = $_POST['produto'];
$estoque = $_POST['estoque'];


$result_usuario ="INSERT INTO tbproduto(nomeProduto, qtestoque, ) VALUES ('$produto, $estoque')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
    <script type=\"text/javascript\">
        alert(\"Produto cadastrado com sucesso.\");
    </script>
    ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProduto.php'>
    <script type=\"text/javascript\">
        alert(\"Produto não foi cadastradado com sucesso.\");
    </script>
    ";
}

?>