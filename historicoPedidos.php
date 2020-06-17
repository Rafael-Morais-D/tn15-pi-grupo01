<?php $tituloPagina = "Bake & Go | Adm Histórico de Pedidos"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<?php require_once("./inc/header-adm.php"); ?>

<main class="container perfil py-5 mt-5">
    <h2>Exemplilson da Silva</h2>
    <p>exemplison1@email.com.br</p>
    <a href="admEdicaoUsuario.php">Editar meu perfil</a>
    <hr class="accent my-5">
    <h2 class="mb-4">Histórico de Pedidos</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID Pedido</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Data</th>
                    <th scope="col">Pagamento</th>
                    <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">000</td>
                            <td scope="row">Pão Italiano</td>
                            <td scope="row">05/06/2020</td>
                            <td scope="row">Pago</td>
                            <td scope="row">Preparando a massa</td>
                        </tr>
                        <tr>
                            <td scope="row">001</td>
                            <td scope="row">Bolo de Chocolate</td>
                            <td scope="row">05/06/2020</td>
                            <td scope="row">Pago</td>
                            <td scope="row">Pronto para entrega</td>
                        </tr>
                        <tr>
                            <td scope="row">002</td>
                            <td scope="row">Pão de Queijo</td>
                            <td scope="row">05/06/2020</td>
                            <td scope="row">Pago</td>
                            <td scope="row">No forno</td>
                        </tr>
                    </tbody>
                </table>
                </main>

<?php require_once("./inc/footer-adm.php"); ?>