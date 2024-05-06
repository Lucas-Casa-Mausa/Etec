<html>
<head>
<title>Consulta dos Atendimentos</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<center>
Listagem dos Atendimentos

<form name="form1" method="post" action="">

<p>
<?php
	
	require_once("conn.php");
	
	$sql=mysqli_query($conn,"select * from Atendimento ");
	
	while($linha=mysqli_fetch_array($sql))
	{
		$codAtendimento=$linha['codAtendimento'];
		$Data_horaAtendimento=$linha['Data_horaAtendimento'];
        $codAnimal=$linha['codAnimal'];
		$codVet=$linha['codVet'];
        $Diagnostico=$linha['Diagnostico'];
		echo"<p>";
		
		echo "<table><tr><td>Codigo do Atendimento:</td><td>$codAtendimento</td>";
        echo "<table><tr><td>Data e Hora do Atendimento:</td><td>$Data_horaAtendimento</td>";
        echo "<table><tr><td>Codigo do Anaimal:</td><td>$codAnimal</td>";
        echo "<table><tr><td>Codigo do veterinario:</td><td>$codVet</td>";
		echo "<tr><td>Diagnostico do seu animalzinho:</td><td> $Diagnostico</td></tr></table>";
	}
	
?>
</form>
</center>
</body>
</html>
