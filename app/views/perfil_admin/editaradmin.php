<?php  require_once "indexperfil.php"?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner" class="container">


            <div class="ui text container form-sobre-fotos" >
                <div class="ui text container centered aligned">
                    <h1><label><font color="#363636">Editar cadastro</font> </h1>
                </div><br>

                <!--formulario de cadastro -->
                <form class="ui form" action="#" method="post">

                    <div class="field">
                        <label><font color="#363636">Nome Completo</font></label>
                        <input type="text" name="nome" placeholder="Nome completo">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Endereço de email</font></label>
                        <input type="text" name="email" placeholder="exemplo@exe.com">
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
                        <label><font color="#363636">Razão social</font></label>
                        <input type="text" name="razao_social" placeholder="Razão sozial">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Nome fantasia</font></label>
                        <input type="text" name="nome_fantasia" placeholder="Nome fantasia">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Senha</font></label>
                        <input type="text" name="senha" placeholder="*********">
                    </div>

                    <button class="ui button" type="submit">Editar</button>
                </form>

            </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php require_once "rodape.php"; ?>