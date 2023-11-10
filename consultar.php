

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <header>
        <center>
       <h1>consulta de usuários</h1>
       <h3>Nome</h3>
       <?php
       
       include('conexao.php');


$select= "SELECT nome, cadastro.matricula FROM cadastro 
            INNER JOIN login ON cadastro.matricula=login.matricula";


$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_all($query);



    for ($linha=0; $linha <count($dado); $linha++) { ?>
    <a href="usuario.php?matricula=<?php echo $dado[$linha][1]; ?>">
                    <?php echo $dado[$linha][0]; ?>
</a>
            <?php
            echo "<br>";
        
    }
         
       ?>
       </center>
       </header>
</body>
</html>











