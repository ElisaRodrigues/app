<?php require_once "indexperfil.php"; ?>

<div id="page-wrapper">
    <div id="page-inner" class="container">

        <!-- Page Content -->


        <div class="col-md-6 col-sm-4" style="margin-left: 250px; margin-top: 100px">
            <div class="panel panel-primary" >

                <div class="panel-heading">
                    Informações
                </div>
                <div class="panel-footer">
                    Nome: <?= $admin->getNome(); ?>
                </div>

                <div class="panel-footer">
                    Email: <?= $admin->getEmail(); ?>
                </div>

                <div class="panel-footer">
                    Telefone: <?= $admin->getTelefone(); ?>
                </div>

                <div class="panel-footer">
                    CNPJ: <?= $admin->cnpj; ?>
                </div>

                <div class="panel-footer">
                    Razão Social: <?= $admin->razao_social; ?>
                </div>

                <div class="panel-footer">
                    Nome Fantasia: <?= $admin->nome_fantasia; ?>
                </div>

            </div>
        </div>
        <a class="btn btn-danger" style="background-color: #ba2a1d" href="http://localhost/tcc/app/controllers/admin_controller.php?acao=excluir">Excluir conta</a>
        <a href="editaradmin.php" class="btn btn-primary">Editar Conta</a>



        <!-- /. PAGE WRAPPER  -->
    </div>


    <?php require_once "rodape.php"; ?>

