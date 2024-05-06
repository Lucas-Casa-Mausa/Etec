
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        body{
            font-size: 20px;
            font-family: arial;
        }
    </style>
</head>
<body>
<div class="p-3 mb-2 bg-dark text-white">
    <center>
    <form action="processa_cadCate.php" method="POST">
        Categoria: <br> <Br>

        <input type="text" name="categoria" > <BR> <Br>

        <input type="submit" class="btn btn-outline-primary" value="Cadastrar">
   
        </form>
        <BR> <Br><BR> <Br><BR> <Br> <BR> <Br><BR> <Br><BR> <Br><BR> <Br><BR> <Br><BR> <Br>

        <a href="index.php"><< Voltar</a>
        </div>
</body>
</html>