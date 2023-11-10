<?php
require 'conexao.php'; //
include('conexao.php'); //

$login = isset($_POST['login'])? $_POST['login'] : ''; //O isset serve para verificar se um valor realmente existe, se ele não é null, se ele é válido
$senha = isset($_POST['senha'])? $_POST['senha'] : '';

$select = "SELECT matricula, login, senha FROM login
            WHERE login = '$login' AND senha = '$senha' ";

$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_row($query);

if($login == isset($dado[1]) && $senha == isset($dado[2])){ //O isset está verificando se a variável dado[1] e dado[2] é nula, pois se colocamos um usuário que não existe o valor dentro da variável será nula e retornará um aviso do php
    session_start();
    $_SESSION['matricula']=$dado[0];
    header("location: principal.php");
}else{
   header ("location: index.php");             
}

?>