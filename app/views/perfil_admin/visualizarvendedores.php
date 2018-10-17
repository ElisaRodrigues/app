
<?php require_once "indexperfil.php"; ?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
    <div id="page-inner" class="container">

    <table class="table">
        <thead class="thead-dark">
        <tr id="cortabela">
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">CPF</th>
        </tr>
        </thead>

        <?php foreach ($vendedores as $vendedor): ?>
        <tbody>
        <tr>
            <th scope="row"><?php echo $vendedor->idVendedor; ?></th>
            <td><?php echo $vendedor->getNome(); ?></td>
            <td><?php echo $vendedor->getEmail(); ?></td>
            <td><?php echo $vendedor->getTelefone(); ?></td>
            <td><?php echo $vendedor->cpf; ?></td>
        </tr>
        </tbody>

        <?php endforeach;?>

    </table>


</div>
<!-- /. PAGE WRAPPER  -->
</div>

<?php require_once "rodape.php"; ?>

