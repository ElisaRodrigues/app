<?php

require_once '../database/Conexao.php';
require_once '../models/Usuario.php';

class CrudUsuario{

    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }


    //retorna todos os users em forma de um array associativo
    //OKAY
    public function getUsuarios(){
        $sql = "select * from usuarios";
        $usuarios = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        //print_r($usuarios);

        return $usuarios;
    }


    public function getUsuario($idUsuario){
        $sql = "SELECT * FROM usuarios WHERE idUsuarios = {$idUsuario} ";
        $usuario = $this->conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

        return new Usuario($usuario['nome'], $usuario['email'], $usuario['senha'], $usuario['telefone'], $usuario['idUsuarios']);
    }

    //excluir usuario
    //OKAY
    public function excluirUsuario($idUsuario){
        $this->conexao->exec("DELETE FROM usuarios WHERE dUsuarios = $idUsuario");
    }

    public function nivelAcesso(){
        $sql = "select nivelAcesso from usuarios ";
        $nivelAcesso = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}

$bls = new CrudUsuario();
//$bls->getUsuarios();
$bls->getUsuario(5);