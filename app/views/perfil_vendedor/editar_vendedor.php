<?php  require_once "indexperfil.php"?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner" class="container">


            <div class="ui text container form-sobre-fotos" >
                <div class="ui text container centered aligned">
                    <h1>Editar Cadastro</h1>
                </div><br>
                <!--formulario de cadastro -->
                <form class="ui form" action="#" method="post">
                    <!--NOME -->
                    <div class="field">
                        <label><font color="#363636">Nome Completo</font></label>
                        <input type="text" name="nome" placeholder="Nome completo">
                    </div>
                    <!--TELEFONE -->
                    <div class="field">
                        <label><font color="#363636">Telefone</font></label>
                        <input type="text" name="telefone" placeholder="Telefone">
                    </div>

                    <!--EMAIL -->
                    <div class="field">
                        <label><font color="#363636">Endereço de email</font></label>
                        <input type="text" name="email" placeholder="exemplo@exe.com">
                    </div>

                    <!--CPF -->
                    <div class="field">
                        <label><font color="#363636">CPF</font></label>
                        <input type="text" name="cpf" placeholder="XXX.XXX.XXX-XX">
                    </div>

                    <!--EMPRESA -->
                    <div class="field">
                        <label><font color="#363636">Empresa</font></label>
                        <input type="text" name="empresa" placeholder="Empresa para qual trabalha: nome fantasia" id="nome">
                    </div>
                    <!--senha -->
                    <div class="field">
                        <label><font color="#363636">Senha</font></label>
                        <input type="text" name="senha" placeholder="*********">
                    </div>

                    <button class="ui button">Editar</button>
                </form>
            </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php require_once "rodape.php"; ?>