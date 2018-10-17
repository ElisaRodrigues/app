<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Cad_Admin</title>
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
<body>

<!-- MENU FIXO -->
<div class="ui large top fixed hidden menu borderless">
    <div class="ui container">
        <a class="active item">Início</a>
        <a class="item">Ajuda</a>
        <a class="item">Sobre</a>
        <a class="item">Login</a>
        <div class="right menu">
            <div class="item">
                <a class="ui button">entrar</a>
            </div>
            <div class="item">
                <a class="ui primary button">cadastrar-se</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Início</a>
    <a class="item">Ajuda</a>
    <a class="item">Sobre</a>
    <a class="item">Login</a>
</div>

<!-- Page Contents -->
<div class="pusher">

    <div class="ui inverted vertical masthead center aligned segment tela-cadastro-admin" >

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <img src="">
                <a href="tela_inicio.php" class="active item">Início</a>
                <a href="ajuda.phtml" class="item">Ajuda</a>
                <a href="tela_sobre.php" class="item">Sobre</a>
                <div class="ui search">
                    <br> <div class="ui transparent left icon input">
                    <input type="text" placeholder="Procurar">
                    <i class="search icon"></i>
                </div>
                    <div class="results"></div>
                </div>
                <div class="right item">
                    <a href="../crud/verifica_usuario.php" class="ui inverted button">entrar <i class="sign in icon float right"></i></a>
                </div>
            </div>
        </div>






        <div class="ui text container form-sobre-fotos" >
            <div class="ui text container centered aligned">
                <h1><label><font color="white">Cadastro de Administrador</font> </h1>
            </div><br>

            <!--formulario de cadastro -->
            <form class="ui form" action="../controllers/admin_controller.php?acao=salvar" method="post">

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

                <button class="ui button" type="submit">Cadastrar</button>
            </form>

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

</div>

</body>

</html>