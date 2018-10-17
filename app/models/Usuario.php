<?php

class Usuario{
    protected $nome;
    protected $idUsuarios;
    protected $telefone;
    protected $email;
    protected $senha;

    function __construct($nome, $email, $senha, $telefone, $idUsuarios = null) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->telefone = $telefone;
        $this->idUsuarios = $idUsuarios;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getIdUsuario(){
        return $this->idUsuarios;
    }
    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){

        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
}
