<?php
        include_once("conn.php");
        $for=$_POST['txtCurso'];
        $result_curs="INSERT INTO tbcursos(nomeCurso) values (lower('$for'))";

        $resultado_curso= mysqli_query($conn,$result_curs);
        if(mysqli_affected_rows($conn) !=0){
            echo '<META HTTP EQUIV=REFRESH CONTENT = "0;URL=CadCurso.php">
            <script> alert("Cadastro realizado com sucesso")</script>
            ';
            #header('Location:index.html'); O site é redirecionado sem aparecer o alert
            header( "refresh:0;url=index.html" );#O número no meio representa os segundos de espera para redirecionar
           
        }else{
            echo" META HTTP EQUIV=REFRESH CONTENT = '0;URL=cadCurso.php'
            <script>alert ('Erro ao cadastrar')</script> ";
        }

        ?>