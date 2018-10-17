<?php  require_once "indexperfil.php"?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner" class="container">


            <div class="ui text container form-sobre-fotos" >
                <div class="ui text container centered aligned">
                    <h1><label><font color="black">Cadastro de Lojas</font></label></h1>
                </div><br>
                <form class="ui form" action="http://localhost/tcc/app/controllers/cliente1_controller.php?acao=inserir" method="post">

                    <div class="field">
                        <label><font color="#363636">Nome Fantasia</font></label>
                        <input type="text" name="nome_fantasia" placeholder="Nome Fantasia">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Razão Social</font></label>
                        <input type="text" name="razao_social" placeholder="Razão Social">
                    </div>
                    <div class="field">
                        <label><font color="#363636">CNPJ</font></label>
                        <input type="text" name="cnpj" placeholder="XX.XXX.XXX/0001-XX">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Telefone</font></label>
                        <input type="text" name="telefone" placeholder="telefone">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Email</font></label>
                        <input type="text" name="email" placeholder="exe@email.com">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Endereço</font></label>
                        <input type="text" name="endereco" placeholder="Rua rocha pombo 1603">
                    </div>

                    <button class="ui button" type="submit">Cadastrar</button>
                </form>

            </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php require_once "rodape.php"; ?>