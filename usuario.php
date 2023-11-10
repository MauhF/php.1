<?php

include('conexao.php');

$matricula = $_GET['matricula'];

$select = "SELECT nome,cpf,matricula, descricao FROM cadastro
            INNER JOIN funcao ON funcao = id_funcao
            WHERE matricula = '$matricula'";

$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_row($query);



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
        <h1><?php echo $dado[0]; ?></h1>
        <b>matricula: </b>
        <?php echo $dado[2]; ?><br>
        <b>CPF: </b>
        <?php echo $dado[1]; ?><br>
        <b>Função: </b>
        <?php echo $dado[3]; ?><br>
        <a href="apagar_usuario.php?matricula=<?php echo $matricula; ?>"><ion-icon class="lixo" name="trash-outline"></ion-icon></a>
    </center>
 <style>
.lixo {
    margin-top: 20px;
    height: 35px;
    width: 35px;
    color: black;
}
 </style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>