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
    <a href="tela_inicio.php" class="active item">Início</a>
    <a href="ajuda.phtml" class="item">Ajuda</a>
    <a href="tela_sobre.php" class="item">Sobre</a>
    <div class="right menu">
      <div class="item">
        <a href="../crud/verifica_usuario.php?acao=logout" class="ui button">Entrar <i class="sign in icon float right"></i></a>
      </div>
      <div class="item">
      </div>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a class="active item">Início</a>
  <a class="item">Ajuda</a>
  <a href="#o-que-fazemos" class="item">O que fazemos</a>
  <a class="item">Sobre</a>
  <a class="item">Login</a>
</div>

<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment" >

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

    <div class="ui text container">
      <h1 class="ui inverted header">
        Estoque do Infinito
      </h1>
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

  </div>

  <div class="ui vertical stripe segment" id="o-que-fazemos">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h4 class="ui horizontal divider header"><i class="tag icon"></i> Fique Tranquilo, organizamos pra você! </h4>
          <p>
              Nossa aplicação fornece um controle de estoque de forma que (...)
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut gdgfd aliquip ex ea commodo duas
          consequat. Duis aute irure dolor in gfdgf reprehenderit in voluptate velit esse ea
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


          </p>

        </div>
        <div class="six wide right floated column">
          <img src="../../assets/images/Taking-Inventory-Value-of-Your-assests.png">
        </div>
      </div>

    </div>
  </div>


  <!-- RODAPE-->

    <?php require_once "rodape.php"; ?>

</div>

</body>

</html>
