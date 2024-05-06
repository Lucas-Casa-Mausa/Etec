<?php
    include_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

    <center> 
        <form action="processa_cadProd.php" method="post">   
    Nome do produto <br>
    <input type="text" name="produto" > <br>
    <br>
    Quantidade em estoque <Br>
    <input type="text" name="estoque"> <Br> <Br>
    <select name="selectCate">
            <option> Selecione</option>
           
    <?php
                $result_niveis_acessos = "SELECT * FROM tbcategoria";
                $resultado_niveis_acessos = mysqli_query ($conn, $result_niveis_acessos);
                while ($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acessos)){ ?>
                    <option value="<?php echo $row_niveis_acessos['codCategoria']; ?>">
                        <?php echo $row_niveis_acessos['nomeCategoria']; ?> 
                    </option> <?php
                } 
                ?>
                 </select>
                <Br>
                <br>  <Br> <input type="submit" class="btn btn-outline-primary" value="Cadastrar">
                </form>
    
               
    
    
    
    
  
</body>
</html>