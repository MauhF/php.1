<?php
session_start();
include('conexao.php'); 


$matricula = $_SESSION['matricula'];
$select = "SELECT nome FROM cadastro 
                    WHERE matricula = '$matricula' ";
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_row($query);





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="principal">
    <header>

    </header>
    <main>
    <div class="welcome">
        <h1>Bem vindo, <?php echo "$dado[0]" ?>.</h1>
    </div>
    <center>
    <ul class="links">
        <li> <a  href="cadastrar.php">Cadastrar usuário</a></li><br>
        <li><a  href="consultar.php">Consultar usuário</a></li><br>
        <li><a  href="pesquisar_unidade.php">Ver alunos de outra unidade</a></li><br>
        <li> <a href="pesquisar_cnpj.php">Consultar CNPJ</a></li><br>
        <li><a  href="updatesenha.php">Atualizar senha</a></li><br>
        <li><a  href="enviar_cadastro.php">Enviar cadastro</a></li><br>
        <li><a  href="gerar_json.php">Gerar Json</a></li><br>
       <li><a  href="sair.php">Sair</li></a>
       
       </center>
        </ul>
    </main>
    <footer>

    </footer>
  
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
</body>
</html>