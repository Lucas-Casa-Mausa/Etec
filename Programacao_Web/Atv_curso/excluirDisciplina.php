<html>

<head>
	<title>Excluir Disciplina</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header><nav class="menu"><h1>Bem vindo à pagina de exclusão</h1></nav></header>
	<main>
		<form name="form1" method="post" action="excluirDisciplina.php" class="form" id="Form1">
			<p>
				Digite o código da disciplina desejada:<span><input type="text" name="txtCod" required class="curso"></span><br><br>

			</p>
			<p>
				<input type="submit" name="bt" value="Confirma" class="maxixe">
			</p>
			<p>
				<?php

				error_reporting(0);
				ini_set("display_errors", 0);

				$cons = $_POST['txtCod'];
				$bt = $_POST['bt'];


				require_once("conn.php");

				$sql = mysqli_query($conn, "select tbDisciplina.codDisciplina, tbDisciplina.NomeDisciplina, tbCursos.NomeCurso from tbDisciplina inner JOIN tbCursos on tbCursos.codCurso = tbDisciplina.codCurso");

				while ($linha = mysqli_fetch_array($sql)) {
					$codDisciplina = $linha['codDisciplina'];
					$NomeDisc = $linha['NomeDisciplina'];
					$Curso = $linha['NomeCurso'];
					echo "<p>";

					echo "<table><tr><td><strong>Codigo da Disciplina: </strong></td><td>$codDisciplina</td>";
					echo "<tr><td><strong> Nome da Disciplina:</strong>  </td><td>$NomeDisc</td>";
					echo "<tr><td> <strong>Curso:</strong>   </td><td> $Curso</td></tr></table>";
				}

				if ($bt != '') {
					mysqli_query($conn, "DELETE FROM tbDisciplina WHERE codDisciplina='$cons'") or die("Erro na Exclusão");

					echo " Excluído";

					echo "<script>alert('Produto Excluído')</script>";
					echo "<meta http-equiv='refresh'content='0'>";
				}
				?>
		</form>
	</main>
	<a href="index.html">Voltar</a>
</body>

</html>