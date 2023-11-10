<?php
session_start();    
include('conexao.php');

$unidade = isset($_POST['unidade']) ? $_POST['unidade'] : '';

$select = "SELECT matricula,nome,descricao FROM cadastro
            INNER JOIN funcao ON funcao = id_funcao
            WHERE unidade = $unidade";



$query = pg_exec($conexao2, $select);
$dado = pg_fetch_row($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Consulta de Usuários</h1>
        <h3>Nome</h3>
        <?php
        while($dado = pg_fetch_array($query)) {
         if ($dado[3] == 110) { ?>
         <a href="alterar_aluno.php?matricula=<?php echo $dado[0]; ?>">
         <?php echo $dado[0]." - "; ?></a>
         <a href="alterar_aluno.php?matricula=<?php
         echo $dado[0]; ?>">
         <?php echo $dado[1]. " - " ?></a>
         <a href="alterar_aluno.php?matricula=<?php
         echo $dado[0]; ?>">
         <?php echo dado[2]. "<br>"; ?></a>
         
         <?php }
        
         
         else {
           
            echo $dado[0]. " - ";
            echo $dado[1]. " - ";
            echo $dado[2]. "<br>";
            
         }
        }
        
        ?>
        <a href="pesquisar_unidade.php">voltar</a>
    </center>





</body>
</html>