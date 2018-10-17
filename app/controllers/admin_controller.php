<?php

require_once __DIR__. '/../crud/CrudAdministrador.php';
require_once __DIR__. '/../crud/CrudVendedor.php';
require_once __DIR__. '/../models/Administrador.php';

function perfil_admin(){
    session_start();
    $administrador = new CrudAdministrador();
    $admin = $administrador->getAdministrador($_SESSION['id_user']);
    include __DIR__."/../views/perfil_admin/informacoesperfil.php";
}

function listarAdmin(){
    session_start();

    $administrador = new CrudAdministrador();
    $admin = $administrador->getAdministrador($_SESSION['id_user']);
    include __DIR__."/../views/perfil_admin/informacoesperfil.php";
}

function listarVendedores(){

    $vendedores = new CrudVendedor();
    $admin = $vendedores->getVendedores();
    include __DIR__."/../views/perfil_admin/visualizarvendedores.php";
}

function cadastrarAdmin(){
    $crud = new CrudAdministrador();
    include '../views/cadastro_admin.php';
}

function salvarAdmin(){ //DANDO ERRO
    echo "<pre>";

    $usuario = new Administrador($_POST['nome'], $_POST['email'], $_POST['senha'],  $_POST['telefone'], $_POST['razao_social'], $_POST['nome_fantasia'], $_POST['cnpj']);
    $adm = new CrudAdministrador();
    $resultado = $adm->cadastrar($usuario);

    header("Location: http://localhost/tcc/app/controllers/produto_controller.php?acao=listar");
}

function editarAdmin(){
    $crud = new CrudAdministrador();
    $admin = $crud->getAdministrador(4);
    require_once  __DIR__."/../views/perfil_admin/editar_admin.php";
}

function excluirAdmin(){
    session_start();

    print_r($_SESSION);
    die();

    $crud = new CrudAdministrador();
    $crud->excluir($_SESSION['id_user']);
    header("location: http://localhost/tcc/app/views/login.php") ;
}

//ROTAS
if (isset($_GET['acao']) && !empty($_GET['acao']) ) {

    if ($_GET['acao'] == 'cadastrar') {
        echo "chegou na rota";
        cadastrarAdmin();

    } elseif ($_GET['acao'] == 'salvar') {
        salvarAdmin();

    } elseif ($_GET['acao'] == 'perfil_admin') {
        perfil_admin();

    } elseif ($_GET['acao'] == 'editarAdmin') {
        editarAdmin();

    }elseif ($_GET['acao'] == 'excluir') {
        excluirAdmin();

    }elseif ($_GET['acao'] == 'listarAdmin') {
        listarAdmin();

    }elseif ($_GET['acao'] == 'listarVends') {
        listarVendedores();

    } else {
        require"http://localhost/tcc/app/views/cadastro_admin.php";
    }
}
