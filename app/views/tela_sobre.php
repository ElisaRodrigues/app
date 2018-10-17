<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Projeto</title>
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



<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Início</a>
    <a class="item">Ajuda</a>
    <a class="item">Sobre</a>
    <a class="item">Login</a>
</div>

<!-- Page Contents -->
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment tela-sobre" >

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
                    <input type="text" placeholder="Procurar...">
                    <i class="search icon"></i>
                </div>
                    <div class="results"></div>
                </div>
                <div class="right item">
                    <a href="tela_inicio.php" class="ui inverted button">cadastrar</a>
                    <a href="../crud/verifica_usuario.php?acao=logout" class="ui inverted button">Entrar</a>
                </div>
            </div>
        </div><br><br>

        <div class="ui text container" style = "text-align : left;">

            <h1 class="ui  left floated texto-maior">
                Sobre nós
            </h1>
            <h2 class="ui left floated segundo-texto">
                Conheça a equipe ERROR 404 NOT FOUND
            </h2>
            <div align="left">
                <h3 class="ui left floated terceiro-texto">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque eum facere harum ipsam nulla, quam similique. Asperiores dolore eveniet itaque laboriosam minima minus mollitia quis saepe tempora totam! Ab, voluptatem
                    <!doctype html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport"
                              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <title>Document</title>
                    </head>
                    <body>

                    </body>
                    </html>

                </h3>
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

</div>




</body>

</html>