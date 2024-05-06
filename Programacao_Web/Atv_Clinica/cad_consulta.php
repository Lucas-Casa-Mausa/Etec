<?php
include_once("conn.php");
$data1= $_POST['dateCon'];
$time1= $_POST['timeCon'];
$selpac = $_POST['selectpaciente'];
$selmed = $_POST['selectmedico'];
$dgcon = $_POST['txtdda'];

$result_usuario = "INSERT INTO tbAgendamento(dataAgendamento, horaAgendamento,codPaciente, codMedico, diagnosticoAgendamento) 
                    VALUES ('$data1','$time1','$selpac','$selmed','$dgcon')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) != 0){
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'> 
        <script type=\"text/javascript\"> 
            alert(\"consulta agendada com Sucesso.\"); 
            </script>
        ";
}else{
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT='0;URL=consulta.php'> 
        <script type=\"text/javascript\"> 
            alert(\"Consulta não foi agendada com Sucesso.\"); 
            </script>
        ";
}


?>