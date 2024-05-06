
<?php
include_once("conn.php");

$Nome = $_POST['txtnome'];
$Especialidade = $_POST['txtespecialidade'];
$Celmedico = $_POST['txtcelmedico'];
$Telmedico = $_POST['txttelmedico'];

$result_usuario ="INSERT INTO tbmedico(nomeMedico,telMedico,celMedico) VALUES ('$Nome,$Telmedico,$Celmedico')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) !=0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
    <script type=\"text/javascript\">
        alert(\"Médico cadastrada com sucesso.\");
    </script>
    ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCategoria.php'>
    <script type=\"text/javascript\">
        alert(\"Médico não foi cadastradada .\");
    </script>
    ";
}

?>