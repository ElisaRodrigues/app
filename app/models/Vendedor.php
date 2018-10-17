<?php

    require_once "Usuario.php";
class Vendedor extends Usuario {
    public $cpf;
    public $empresa;
    public $idVendedor;

    public function __construct($nome, $email, $senha, $telefone, $cpf, $empresa ,$idUsuario = null, $idVendedor = null){
        parent::__construct($nome, $email, $senha, $telefone, $idUsuario);

        $this->cpf = $cpf;
        $this->empresa = $empresa;
        $this->idVendedor = $idVendedor;
    }
}
