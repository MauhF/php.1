<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>login</title>
</head>
<div class="container">
<body class="index">
    <h1 id="login">Please Login</h1>
    <form action="autenticar.php" id="form_login" method="post">
        <div class="form_control">
       
            login: <input class="input_login" type="text" name="login" required><br>
            senha: <input class="input_senha" type="password" name="senha" required><br>
            <input  class="btn" type="submit" name="enviar" value="entrar" required>
            </div>
        
    </div>
 </form>
 <script src="js/script.js  "></script>

</body>
</html>