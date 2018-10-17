<?php  $_SESSION['tipo_user'];

require_once __DIR__."/indexperfil.php" ?>

    <div id="page-wrapper">
        <!-- Page Content -->

        <div id="page-inner" class="container">

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="thumbnail">
                        <a href="#"><img class="card-img-top" src="../../assets/imagesSalvas/<?= $produto->imagem ?>" alt=""></a>
                    </div>
                    <h3 class="ui horizontal divider header"><i class="tag icon"></i>Descrição</h3>
                    <div class="panel panel-primary">

                        <div class="panel-body">
                            <p><?= $produto->descricao ?></p>

                        </div>
                    </div>
                </div>

                <div class="col-md-5" style="background: rgba(173, 216, 230, 0.55);">

                    <h2 style="color: #0a256a; margin-top: 20px">Nome: <?= $produto->nome ?></h2>

                    <h3 style="color: #0a256a">Referência: </h3>
                    <div><h4><?= $produto->referencia ?></h4></div>


                    <h3 style="color: #0a256a">Preço: </h3>
                    <div><h4><?= $produto->preco ?></h4></div>

                    <h3 style="color: #0a256a">Tamanho:</h3>
                    <div><h4><?= $produto->tamanho ?></h4></div>

                    <h3 style="color: #0a256a">Cor:</h3>
                    <div><h4><?= $produto->cor ?></h4></div>

                    <h3 style="color: #0a256a">Quantidade:</h3>
                    <div><h4><?= $produto->estoque ?></h4></div>
                    <br><br>

                    <div>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>

                </div>
            </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
<?php require_once "rodape.php"; ?>