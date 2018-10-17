<?php


class Cliente
{
    public $nomeFantasia;
    public $cnpj;
    public $email;
    public $razao_social;
    public $telefone;
    public $endereco;
    public $id_cliente = null;

    public function __construct($nomeFantasia, $cnpj, $email, $razao_social, $telefone, $endereco, $id_cliente = null)
    {
        $this->nomeFantasia = $nomeFantasia;
        $this->cnpj = $cnpj;
        $this->email = $email;
        $this->razao_social = $razao_social;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->id_cliente = $id_cliente;
    }

    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

}
