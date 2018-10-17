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

<!-- MENU FIXO -->
<div class="ui large top fixed hidden menu borderless">
    <div class="ui container">
        <a href="http://localhost/tcc/app/views/tela_inicio.php" class="active item">Início</a>
        <a href="http://localhost/tcc/app/views/ajuda.phtml"     class="item">Ajuda</a>
        <a href="http://localhost/tcc/app/views/tela_sobre.php"  class="item">Sobre</a>
        <a class="item">Login</a>
        <div class="right menu">
            <div class="item">
                <a class="ui button">Entrar</a>
            </div>
            <div class="item">
                <a class="ui primary button">Cadastrar-se</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a href="http://localhost/tcc/app/views/tela_inicio.php" class="active item">Início</a>
    <a href="http://localhost/tcc/app/views/ajuda.phtml"     class="item">Ajuda</a>
    <a href="http://localhost/tcc/app/views/tela_sobre.php"  class="item">Sobre</a>
    <a class="item">Login</a>
    <br class="ui search"><br>
    <div class="ui transparent left icon input">
        <input type="text" placeholder="Procurar">
        <i class="search icon"></i>
    </div>
    <div class="results"> </div>
</div>

<!-- Page Contents -->
<div class="pusher">

    <div class="ui container">
        <div class="ui large secondary inverted pointing menu">
            <a class="toc item">
                <i class="sidebar icon"></i>
            </a>
            <img src="">
            <a class="active item">Início</a>
            <a href="http://localhost/tcc/app/views/ajuda.phtml" class="item">Ajuda</a>
            <a href="#o-que-fazemos" class="item">O que fazemos</a>
            <a href="http://localhost/tcc/app/views/tela_sobre.php" class="item">Sobre</a>
            <div class="ui search">
                <br> <div class="ui transparent left icon input">
                    <input type="text" placeholder="Procurar...">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>
            </div>
            <div class="right item">
                <a href="login.php" class="ui inverted button">Entrar<i class="sign in icon float right"></i></a>

            </div>
        </div>
    </div>