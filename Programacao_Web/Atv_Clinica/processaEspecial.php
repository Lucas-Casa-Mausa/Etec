<?php
include_once("conn.php");

$Especialidade = $_POST['especialidade'];


$result_usuario ="INSERT INTO tbespecialidade(Especialidade) VALUES ('$Especialidade')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
    <script type=\"text/javascript\">
        alert(\"Especialidade  cadastrada com sucesso.\");
    </script>
    ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCategoria.php'>
    <script type=\"text/javascript\">
        alert(\"A especialidade não foi cadastradada .\");
    </script>
    ";
}

?>