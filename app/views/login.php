<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../assets/semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/style.css">

    <script src="../../assets/library/jquery.min.js"></script>
    <script src="../../assets/semantic/components/visibility.js"></script>
    <script src="../../assets/semantic/components/sidebar.js"></script>
    <script src="../../assets/semantic/components/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

            })
        ;
    </script>
</head>

<?php
unset($_SESSION['id_user'], $_SESSION['nome']);
?>

<body>



<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Início</a>
    <a class="item">Ajuda</a>
    <a class="item">Sobre</a>
    <a class="item">Login</a>
    <a href="http://localhost/tcc/app/views/tela_inicio.php" class="ui inverted button">Início</a>
</div>

<!-- Page Contents -->
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment tela-login" >

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <img src="">
                <a href="http://localhost/tcc/app/views/tela_inicio.php" class="active item">Início</a>
                <a href="http://localhost/tcc/app/views/ajuda.phtml" class="item">Ajuda</a>
                <a href="http://localhost/tcc/app/views/tela_sobre.php" class="item">Sobre</a>
                <div class="ui search">

                   <p></p> <div class="ui transparent left icon input">
                    <input type="text" placeholder="Procurar...">
                    <i class="search icon"></i>
                </div>
                    <div class="results"></div>
                </div>
                <div class="right item">

                </div>
            </div>
        </div><br><br>

        <div class="ui middle aligned center aligned grid">
            <div class="column">
                <h2 class="ui teal image header">
                    <img src="../../assets/images/logo.png" class="image">
                    <div class="content">
                        <!--loguinho-->
                    </div>
                </h2>




                <!-- ==================================== FORMULARIO DE LOGIN=======================================  -->
                <form class="ui large form" action="http://localhost/tcc/app/crud/login/login.php" method="post">
                    <div class="ui stacked segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="senha" placeholder="Senha">
                            </div>
                        </div>
                        <button class="ui fluid large teal submit button" type="submit">Login</button>
                    </div>

                    <div class="ui error message"></div>

                </form>

                <!-- ===============================FINAL FORMULARIO DE LOGIN=======================================  -->

<!-- ================================================MENSAGEM DE ERRO================================================ -->
                <p class="text-center text-danger">
                <?php
                if (isset($_SESSION['error_login'])){
                    echo $_SESSION['error_login'];
                    unset($_SESSION['error_login']);
                }
                ?>
                </p>
                <p class="text-center text-danger">
                    <?php
                    if (isset($_SESSION['secury'])){
                        echo $_SESSION['secury'];
                        unset($_SESSION['secury']);
                    }
                    ?>
                </p>
<!-- ================================================FINAL DA MENSAGEM DE ERRO======================================= -->
                <div class="ui message">
                    Não é cadastrado ainda? <a href="#" onclick="document.getElementById('formCadastro').submit();">Cadastrar</a>
                    <p><div class="ui  two fields">
                       <div class="field">
                           <div class="ui buttons">
                               <a href="http://localhost/tcc/app/views/cadastro_admin.php"><button class="ui button">administrador</button></a>
                               <div class="or" data-text="ou"></div>
                               <a href="http://localhost/tcc/app/views/cadastro_vend.html"><button class="ui positive button">vendedor</button></a>
                           </div>
                       </div>
                    </div>
                </div>

<!--
                <div class="ui text container">
                    <span class="question">Não é cadastrado ainda?</span>
                    <span class="question">Escolha seu tipo de usuário!</span>

                    <p><div class="ui  two fields">
                    <div class="ui buttons">
                        <a href="http://localhost/tcc/app/views/cadastro_admin.php"><button class="ui button">administrador</button></a>
                        <div class="or" data-text="ou"></div>
                        <a href="http://localhost/tcc/app/views/cadastro_vend.html"><button class="ui positive button">vendedor</button></a>
                    </div>
                </div>
                </div>
-->



          </div>
        </div>
    </div>
</div>

<!-- RODAPE-->
<div class="ui inverted vertical footer segment">
    <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
            <div class="three wide column">
                <h4 class="ui inverted header">Sobre Nós</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Onde estamos</a>
                    <a href="#" class="item">Clientes</a>
                    <a href="#" class="item">Relatos</a>
                    <a href="#" class="item">Contato</a>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">O que fazemos</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Controle de estoque</a>
                    <a href="#" class="item">Vitrine Virtual</a>
                    <a href="#" class="item">Relatórios</a>
                </div>

            </div>
            <div class="seven wide column">
                <h4 class="ui inverted header">Siga-nos!</h4>
                <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&data-colorscheme=dark&action=like&size=small&show_faces=false&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>



</body>

</html>




