<?php
include('conexao.php');

//INCLUIR
$matricula = isset($_POST['matricula'])? $_POST['matricula'] : '';
$login = isset($_POST['login'])? $_POST['login'] : ''; 
$senha = isset($_POST['senha'])? $_POST['senha'] : '';

$verificar_matricula ="SELECT matricula FROM login WHERE matricula = '$matricula'"; //Percorre todo a coluna matricula e ver se a matricula que o usuário informou já existe
$query_verificar = mysqli_query($conexao, $verificar_matricula);


if (mysqli_num_rows($query_verificar) > 0) { 
//a função mysqli_num_rows obtem o número de linhas afetadas por uma consulta($query_verificar) executada no banco de dados. A função retorna um inteiro que representa o número de linhas que foram retornadas pela consulta
    echo "Matricula já cadastrada";
} else{
    $incluir = "INSERT INTO `login`(`matricula`, `login`, `senha`) 
                VALUES ('$matricula', '$login', '$senha')";
            $query_incluir = mysqli_query($conexao, $incluir);
    if($query_incluir){
        header("location: cadastrar.php");
    }else{
        echo "Erro ao cadastrar usuário";
    }
}


?>