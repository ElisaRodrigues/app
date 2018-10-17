<?php
require_once '../database/Conexao.php';
require_once '../models/Administrador.php';

class CrudAdministrador{

    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    public function cadastrar($usuario){

        $sql = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES ('{$usuario->getNome()}', '{$usuario->getEmail()}', '{$usuario->getSenha()}', '{$usuario->getTelefone()}')";
        $this->conexao->exec($sql);

        $id = $this->conexao->lastInsertId(); //pega o ultimo id cadastrado
        $sq = "INSERT INTO administrador (razao_social, nome_fantasia, cnpj, id_usuarios) VALUES ('{$usuario->razao_social}', '{$usuario->nome_fantasia}', '{$usuario->cnpj}', '{$id}')";
        $this->conexao->exec($sq);
    }

    public function getAdministradores(){
        $sql = "select * from administrador";
        $administradores = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        print_r($administradores);
    }

    public function getAdministrador($id_admin){

        $sql = "SELECT usuarios.idUsuarios, usuarios.nome,email,senha,telefone, administrador.razao_social,nome_fantasia,cnpj
                  FROM  usuarios INNER JOIN administrador ON usuarios.idUsuarios = administrador.id_usuarios 
                  WHERE administrador.idAdministrador = $id_admin";

        $administrador = $this->conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

        //print_r($administrador);
        //die;

        return new Administrador($administrador['nome'], $administrador['email'], $administrador['senha'], $administrador['telefone'], $administrador['razao_social'], $administrador['nome_fantasia'], $administrador['cnpj'], $administrador['idUsuarios']);
    }

    public function excluir($id_admin){

        $id_usuario = $this->conexao->query("SELECT idAdministrador  FROM administrador WHERE id_usuarios = $id_usuario")->fetch();
        $id_administrador = $id_administrador['idAdministrador'];

        $this->conexao->exec("DELETE FROM administrador WHERE idAdministrador = $id_admin");
        $this->conexao->exec("DELETE FROM usuarios WHERE idUsuarios = $id_usuario");
    }

//Dar uma olhadinha com muito carinho
    public function editar(Administrador $idAdministrador){
        $this->conexao->exec("UPDATE Administrador SET '{$administrador->nome}'                                                             
                                                                 '{$administrador->email}',
                                                                 '{$administrador->senha}',
                                                                  {$administrador->telefone},
                                                                 '{$administrador->razao_social}', 
                                                                 '{$administrador->nome_fantasia}', 
                                                                  {$administrador->cnpj}, 
                                                                  {$administrador->idUsuario}
            WHERE idAdministrador = {$idAdministrador}");
    }
}

//TESTES

//$adm = new Administrador("leaneth","leaneth@teste.com", "123", 65432189, "leaneth", "leaneth" ,46587427649);

$crud = new CrudAdministrador();

//$crud->getAdministradores(); //Okay - funcionando

//$crud->getAdministrador(40);

//$crud->cadastrar($adm); //Okay - funcionando

//$crud->excluir(1); //Okay - funcionando