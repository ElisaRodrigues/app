<?php
require_once __DIR__.'/../crud/CrudProdutos.php';
require_once __DIR__.'/../models/Produto.php';

function cadastrar(){ //OKAY
    $crud = new CrudProdutos();
    $tipos = $crud->getTiposProduto();
    $tamanhos = $crud->getTamanhos();
    $cores =  $crud->getCores();
    $imagens =  $crud->getImagens();
	include __DIR__.'/../views/perfil_admin/cadastroprodutos.php';
}

function salvar(){

    $origem = $_FILES['imagem']['tmp_name'];
    $nome_img = date('dmyhis').$_FILES['imagem']['name'];
    $destino = __DIR__.'/../../assets/imagesSalvas/'.$nome_img;
    $x = move_uploaded_file($origem, $destino);

    $produto = new Produto($_POST['nome'], $_POST['preco'], $_POST['referencia'], $_POST['estoque'],  $_POST['estoqueMin'], $_POST['descricao'],$_POST['tamanho'], $_POST['cor'], $_POST['tipoProduto'], $nome_img);
    $crud = new CrudProdutos();
    $resultado = $crud->cadastrar($produto);

    if ($resultado == 1) {
        listar();
    }
    header("Location: http://localhost/tcc/app/controllers/produto_controller.php?acao=listar");
}

function listar(){
    session_start();

    $crud = new CrudProdutos();
    $listaProdutos = $crud->getProdutos();
    $imagens = $crud->getImagens();

    if($_SESSION['tipo_user'] == 'vendedor'){
        require __DIR__.'/../views/perfil_vendedor/catalogo.php';
    }else{
        require_once __DIR__ .'/../views/perfil_admin/catalogo.php';
    }
}

function editar ($id){ //TA DANDO ERRADO
    $id = 42;
    $crud  = new CrudProdutos();
    $tipos = $crud->getTiposProduto();
    $tamanhos = $crud->getTamanhos();
    $cores =  $crud->getCores();
    $produto  = $crud->getProduto($id);
    include __DIR__.'/../views/editar_produto.php';
    $crud->editar($id, $produto);
    salvar();
    header("Location: http://localhost/tcc/app/controllers/produto_controller.php?acao=listar");
}

function excluir($id){ //ATIVAR E DESATIVAR
    $crud = new CrudProdutos();
    $crud->excluir($id);
    listar();
}

function detalhar($id){
    session_start();

    $crud = new CrudProdutos();
    $produto = $crud->getProduto($id);

    if($_SESSION['tipo_user'] == 'vendedor'){
        require __DIR__.'/../views/perfil_vendedor/informacoesProduto.php';
    }else{
        require_once __DIR__ .'/../views/perfil_admin/informacoesProduto.php';
    }
}

//ROTAS
if (isset($_GET['acao']) && !empty($_GET['acao']) ) {

	if ($_GET['acao'] == 'cadastrar') {
		cadastrar();
	
	} elseif ($_GET['acao'] == 'salvar') {
		salvar();

	} elseif ($_GET['acao'] == 'editar') {
		editar($_GET['id']);

	} elseif ($_GET['acao'] == 'excluir') {
		//excluir($_GET['id']);

	} elseif ($_GET['acao'] == 'listar') {
        listar();

    } elseif ($_GET['acao'] == 'detalhar') {
        detalhar($_GET['id']);

	} else {
        listar();
	}
} else {
	listar();
}