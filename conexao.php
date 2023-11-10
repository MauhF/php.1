<?php

$conexao = mysqli_connect('localhost', 'root', '','FPB');
if (!$conexao) {
    die('Não foi possível conectar');
}

$conexao2=pg_connect("host=alunosfpb.postgresql.dbaas.com.br dbname=alunosfpb port=5432 user=alunosfpb password=Alunos@2023");
                    if (!$conexao2) {
                        die('Não foi possível conectar');
                    }
?>