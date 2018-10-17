<?php

require_once __DIR__. '/../crud/CrudCliente1.php';

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $crud = new CrudCliente1();
        $clientes = $crud->getClientes();
        include __DIR__.'/../views/perfil_admin/visualizarlojas.php';

        break;

    case 'cadastrar':
        $crud = new CrudCliente1();
        include '../views/perfil_admin/cadastrolojas.php';

        break;

    case 'exibir':
        $id_cliente = $_GET['idCliente'];
        $crud = new CrudCliente1();
        $cliente = $crud->getCliente($id_cliente);
        include '../views/perfil_admin/visualizarlojas.php';

        break;

    case 'inserir':
        $novoCliente = new Cliente($_POST['nome_fantasia'], $_POST['cnpj'], $_POST['email'],
            $_POST['razao_social'], $_POST['telefone'], $_POST['endereco']);

        $crud = new CrudCliente1();
        $res = $crud->insertCliente($novoCliente);
        header('Location: cliente1_controller.php?acao=index');
        break;

    case 'alterar':
        if (!isset($_POST['gravar'])) {
            $id_cliente = $_GET['idCliente'];
            $crud = new CrudCliente1();
            $cliente = $crud->getCliente($id_cliente);
            include '../views/perfil_admin/visualizarlojas.php';
        }else{
            $novoCliente = new Cliente($_POST['nome_fantasia'], $_POST['cnpj'], $_POST['email'],
                $_POST['razao_social'], $_POST['telefone'], $cliente['endereco']);

            $crud = new CrudCliente1();
            $crud->editarCliente($novoCliente, $cliente);

            header('Location: cliente1_controller.php');
        }
        break;

    case 'excluir':
        $id_cliente = $_GET['idCliente'];

        $crud = new CrudCliente1();
        $res = $crud->deletarCliente($id_cliente);

        if ($res == 1){
            header('Location: cliente1_controller.php');
        }else{
            echo 'Não foi possível efetuar a exclusão!';
            echo '<a href="cliente1_controller.php">Voltar</a>';
        }
        break;


    default: //CASO NÃO SEJA NENHUM DOS ANTERIORES
        echo "Invalid action";
}
