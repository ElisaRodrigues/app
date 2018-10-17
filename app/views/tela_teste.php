<?php require_once '../crud/CrudAdministrador.php';
      require_once '../crud/CrudVendedor.php'; ?>

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

<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment" >
    <div class="ui text container">
      <h1 class="ui inverted header"> Estoque do Infinito - views teste </h1>
    </div>
  </div>

  <div class="ui vertical stripe segment" id="o-que-fazemos">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <p>
              <?php  $adm = new Administrador("leaneth","leaneth@teste.com", "123", 65432189, "leaneth", "leaneth" ,46587427649);
              $crud = new CrudAdministrador();
              print_r($crud->getAdministrador(31));
              ?>

              <br>
              <br>

              <?php
              $ven = new Vendedor("Cidral","bru@teste.com", "123", 99897766, 8987654, "Casas Bahia");
              $crud = new CrudVendedor();
              print_r($crud->getVendedor(1));

              ?>
          </p>
        </div>
        <div class="six wide right floated column"> <img src="../../assets/images/Taking-Inventory-Value-of-Your-assests.png"> </div>
      </div>
    </div>
  </div>

    <?php require_once "rodape.php"; ?>

</div>

</body>

</html>
