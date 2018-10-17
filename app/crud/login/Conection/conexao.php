<?php

include 'config.php';

$conexao = new mysqli(host, user, pass, db);
/*
if ($conexao->connect_error){
    echo "Erro ao conectar banco de dados".$conexao->connect_error;
}else{
    echo "Conexão com banco de dados realizado com sucesso";
}  */