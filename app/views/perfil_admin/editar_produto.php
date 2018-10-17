<?php require_once __DIR__."/indexperfil.php"?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner" class="container">


        <div class="ui text container form-sobre-fotos" >
            <div class="ui text container centered aligned">
                <h1><label><font color="black">Editar informações do Produto</font></label></h1>
            </div><br>

            <!--formulario de cadastro -->
            <form class="ui form" action="#" method="post">

                <!--NOME-->
                <div class="field">
                    <div class="fields">
                        <div class="twelve wide field">
                            <label>Nome do produto</label>
                            <input type="text" name="nome" placeholder="Insira o nome do produto">
                        </div>

                        <!--PRECO-->
                        <div class="four wide field">
                            <label>Preço</label>
                            <input type="text" name="preco" placeholder="Preço">
                        </div>
                    </div>
                </div>
                <div class="ui form">

                </div>
                <div class="ui form">
                    <div class="two fields">
                        <div class="field">

                            <!--TIPO PRODUTO-->
                            <label><font color="#363636">Tipo</font></label>
                            <select name="tipoProduto" id="tipoProduto">
                                <option value="0">Selecione</option>
                                <?php foreach ($tipos as $tipo) : ?>
                                    <option value="<?= $tipo['idTipoProduto'] ?>"><?= utf8_decode($tipo['tipo']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!--COR-->
                        <div class="field">
                            <label><font color="#363636" size="2">Cor</font></label>
                            <select type="cor" name="cor" id="cor">
                                <option value="0">Selecione</option>
                                <?php foreach ($cores as $cor) : ?>
                                    <option value="<?= $cor['id_cor'] ?>"><?= utf8_decode($cor['cor']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="ui form">
                        <div class="three fields">

                            <!--TAMANHO-->
                            <div class="field">
                                <label><font color="#363636">Tamanho</font></label>
                                <select name="tamanho" id="tamanho">
                                    <option value="0">Selecione</option>
                                    <?php foreach ($tamanhos as $tamanho) : ?>
                                        <option value="<?= $tamanho['idTamanho'] ?>"><?= utf8_decode($tamanho['tamanho']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!--ESTOQUE MINIMO-->
                            <div class="field">
                                <label><font color="#363636" size="2">Estoque Mínimo</font></label>
                                <input type="text" name="estoqueMin" placeholder="Ex : 30">
                            </div>

                            <!--ESTOQUE ATUAL-->
                            <div class="field">
                                <label><font color="#363636">Estoque Atual</font></label>
                                <input type="text" name="estoque" placeholder="Ex: 100">
                            </div>
                        </div>
                    </div>

                    <!--REFERENCIA-->
                    <div class="twelve wide field">
                        <label>Referência do produto</label>
                        <input type="text" name="referencia" placeholder="Insira a referência do produto">
                    </div>

                    <!--DESCRIÇÃO-->
                    <div class="hundred wide field">
                        <label><font color="#363636">Descrição</font></label>
                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></label>
                        <textarea rows="2" name="descricao" placeholder="Escreva aqui a descrição de seu produto."></textarea>
                    </div>
                    <div class="">
                        <label><font color="black">Importar Imagens</font></label>
                        <div class="hundred wide field">

                            <!--IMAGEM-->
                            <div class="hundred wide field">
                                <input type="file" name="imagem" >
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="ui button" type="submit">Editar</button>
            </form>
        </div>


    </div>

    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>

<?php require_once "rodape.php"; ?>
