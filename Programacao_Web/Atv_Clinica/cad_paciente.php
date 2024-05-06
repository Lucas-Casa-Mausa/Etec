<?php

    
include_once("conn.php");
$nome = $_POST['txtnome'];
$telefone = $_POST['txtTel'];
$celular = $_POST['txtcel'];

$result_usuario = "INSERT INTO tbpaciente (nomePaciente,telPaciente,celPaciente) VALUES ('$nome','$telefone','$celular')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn) != 0){
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'> 
                <script type=\"text/javascript\"> 
                    alert(\"paciente cadastrado com Sucesso.\"); 
                    </script>
                ";
}else{
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT='0;URL=paciente.php'> 
                <script type=\"text/javascript\"> 
                    alert(\"O paciente não foi cadastrado com Sucesso.\"); 
                    </script>
                ";
}

?>