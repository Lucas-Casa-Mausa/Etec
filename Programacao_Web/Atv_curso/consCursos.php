<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Consultar os cursos</title>
</head>
<body>
    <header>
    <nav class="menu"><h1>Bem vindo à listagem de cursos</h1></nav>
    </header>
    <main>
    

<p>
<?php
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from tbCursos");

	while($linha=mysqli_fetch_array($sql))
	{
		$codCurso=$linha['codCurso'];
		$nomeCurso=$linha['NomeCurso'];
		echo"</p>";
		
		echo "<table class='table'><tr><td><strong>Codigo:</strong></td><td>$codCurso</td>";
		echo "<tr><td><strong>Nome do Curso:</strong></td><td> $nomeCurso</td></tr></table>";
	}	
?>

    </main>
    <footer>
    <a href="index.html">Voltar</a>
    </footer>
</body>
</html>