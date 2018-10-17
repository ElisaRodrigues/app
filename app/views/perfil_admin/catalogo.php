<?php  $_SESSION['tipo_user'];

require_once __DIR__."/indexperfil.php" ?>
    <div id="page-wrapper">
        <!-- Page Content -->

        <div id="page-inner" class="container">
            <div class="row">
                <?php foreach ($listaProdutos as $produto ):?>
                    <div class="col-md-3 col-sm-12">
                        <div class="thumbnail">
                            <a href="#"><img class="card-img-top" src="../../assets/imagesSalvas/<?= $imagens[0]['imagem'] ?>" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="http://localhost/tcc/app/controllers/produto_controller.php?acao=detalhar&id=<?= $produto['idProdutos']?>"><?php echo $produto['nome'] ?></a>
                                </h4>
                                <p class="card-text">R$<?= $produto['preco'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php require_once __DIR__. "/rodape.php"; ?>