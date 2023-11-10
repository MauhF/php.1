


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        form input:focus, textarea:focus{
            background-color: antiquewhite;
        }
    </style>

</head>
<body>
    <h1>Cadastro</h1>
    <div id="formulario_de_cadastro">
    <form action="novo_usuario.php" id = "form_cad" method="post">
        <!--Cadastrar matricula-->
        <label for="matricula">Matricula:</label><br>
        <input type="number" name="matricula" required><br>

        <!--Cadastrar nome-->
        <label for="login">Digite seu usuario:</label><br>
        <input type="text" name="login" required><br> 

        <!--Cadastrar senha-->
        <label for="senha">Digite sua senha:</label><br>
        <input type="password" name="senha" required><br>

        <input type="submit" name="enviar" value="Cadastrar">
       

    </form>
    </div>
</body>
</html>