<?php
require_once "Usuario.php";

class Administrador extends Usuario
{
    public $razao_social;
    public $nome_fantasia;
    public $cnpj;

    public function __construct($nome, $email, $senha, $telefone, $razao_social, $nome_fantasia, $cnpj, $idUsuario = null){
        parent::__construct($nome, $email, $senha, $telefone, $idUsuario);

        $this->razao_social = $razao_social;
        $this->nome_fantasia = $nome_fantasia;
        $this->cnpj = $cnpj;
    }
}