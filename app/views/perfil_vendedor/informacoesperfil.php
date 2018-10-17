<?php require_once "indexperfil.php"; ?>



<div id="page-wrapper">
    <div id="page-inner" class="container">

        <a class="btn btn-danger" style="background-color: #ba2a1d" href="http://localhost/tcc/app/controllers/vend_controller.php?acao=excluir">Excluir conta</a>
        <a class="btn btn-primary" href="editar_vendedor.php"><i class="fa fa-edit "></i> Editar</a>

        <!-- Page Content -->

        <div class="col-md-6 col-sm-4" style="margin-left: 250px; margin-top: 100px">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    Informações
                </div>
                <div class="panel-footer">
                    Nome:  <?= $vend->getNome(); ?>
                </div>
                <div class="panel-footer">
                    Email: <?= $vend->getEmail(); ?>
                </div>
                <div class="panel-footer">
                    Telefone:  <?= $vend->getTelefone(); ?>
                </div>
                <div class="panel-footer">
                    CPF:  <?= $vend->cpf; ?>
                </div>
                <div class="panel-footer">
                    Empresa que trabalha:  <?= $vend->empresa; ?>
                </div>


            </div>
        </div>




        <!-- /. PAGE WRAPPER  -->
    </div>


    <?php require_once "rodape.php"; ?>
