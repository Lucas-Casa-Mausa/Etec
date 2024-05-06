<?php

include_once("conn.php");


$codcurso = $_POST['selectCurso'];
$disc = $_POST['txtDisc'];
$result_inser = "INSERT INTO tbDisciplina(NomeDisciplina,codCurso) values (lower('$disc'),'$codcurso')";

$resultado_inserir= mysqli_query($conn,$result_inser);

if(mysqli_affected_rows($conn)!=0){
    echo "<script>alert ('Disciplina cadastrada com sucesso')</script>";
    header('refresh:0;url=index.html');
}
else{
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadDisciplinas.php'";
}
?>