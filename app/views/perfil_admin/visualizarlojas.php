<?php require_once "indexperfil.php"; ?>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner" class="container">

            <table class="table">

                <thead class="thead-dark">
                <tr id="cortabela">
                    <th scope="col">#</th>
                    <th scope="col">Nome Fantasia</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Razão Social</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
                </thead>

                <?php foreach ($clientes as $cliente ):?>

                    <tbody>
                    <tr>
                        <th scope="row"><?php echo $cliente->id_cliente; ?></th>
                        <td><?php echo $cliente->nomeFantasia; ?></td>
                        <td><?php echo $cliente->email; ?></td>
                        <td><?php echo $cliente->telefone; ?></td>
                        <td><?php echo $cliente->cnpj; ?></td>
                        <td><?php echo $cliente->razao_social; ?></td>
                        <td>
                            <a href="http://localhost/tcc/app/controllers/cliente1_controller.php?acao=alterar">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                        </td>
                        <td>
                            <a href="http://localhost/tcc/app/controllers/cliente1_controller.php?acao=excluir&idCliente=<?= $cliente->id_cliente; ?>">
                                <button class="fa fa-trash"></button>
                            </a>
                        </td>
                    </tr>

                    </tbody>

                <?php endforeach;?>

            </table>

        </div>

    </div>



<?php require_once "rodape.php"; ?>