<?php

$cnpjcliente = $_POST['cnpj'];

$url = file_get_contents('https://www.receitaws.com.br/v1/cnpj/'.$cnpjcliente);
$dados = json_decode($url);





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <div>
    <?php
echo "Nome:".$dados ->nome."<br>";
echo "Capital Social: R$".number_format(($dados->capital_social),2,',','.')."<br>";
echo " Município: ".$dados->municipio."<br>" ;
echo "<h2>Atividade principal</h2><br>";
echo "Código: ".$dados->atividade_principal[0]->code;"<br>";
echo "Descrição: ".$dados->atividade_principal[0]->text;
echo "Atividade Secundária<br>";
for ($secundarias=0; $secundarias < count($dados -> atividades_secundarias); $secundarias++) {
    echo "<h2>Atividades Secundárias</h2>";
    $atividades_secundarias = $dados->atividades_secundarias[$secundarias];
    echo "Código: ". $atividades_secundarias->code." - ";
    echo "Descrição: ". $atividades_secundarias->text. "<br>";

    }

    echo "<h2>Outras Informações</h2>";
    echo "Natureza Juridica: ". $dados->natureza_juridica."<br>";
    echo "Abertura: ". $dados->abertura."<br>";
    echo "Situação: ". $dados->situacao."<br>";
    echo "Data Situação: ". $dados->data_situacao."<br>";
    echo "Porte: ". $dados->porte."<br>";
    echo "Status: ". $dados->status."<br>";
    echo "Ultima Atualização: ". $dados->ultima_atualizacao."<br>";
    echo "Capital Social: ".number_format(($dados->capital_social),2,',','.')."<br>";
    echo "<h2>Sócios</h2>";
    for ($socios=0; $socios < count($dados->qsa); $socios++) { 
        $socio = $dados->qsa[$socios];
        echo "<b>Nome</b>: ".$socio->nome." - ";
        echo "<b>Cargo</b>: ".$socio->qual."<br>";
    }
    ?>
    <a href="pesquisar_cnpj.php">Voltar</a>
    
    </div>
</center>
</body>
</html>