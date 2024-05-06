<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Faça o Login</title>
         <style>
          a{ text-align: center; } 
          </style>
        </head>
        <body>
             <center> 
            <!-- Formulario de login -->
             <form action="validacao.php" method="POST">
             <fieldset > <legend >Dados do Login</legend> 
             <label for="txUsuario">Usuário</label> 
             <input type="text" name="usuario" id="usuario" maxlength="25" /> <br> <br> 
             <label for="txSenha">Senha</label>
              <input type="password" name="senha" id="senha" /> <br> <Br>

              <input type="submit" value="Entrar" />
             </fieldset> 
            </form>
</body>
</html>