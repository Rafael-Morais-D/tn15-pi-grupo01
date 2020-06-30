<?php $tituloPagina = "Bake & Go | Adm Usuários"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<?php require_once("./inc/header-adm.php"); ?>

<main class="container py-5 mt-5 adm-pag">
    <h2 class="mb-4">Usuários</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">Email</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">001</td>
                    <td scope="row">Exemplilson da Silva 1</td>
                    <td scope="row">exemplison1@email.com.br</td>
                    <td scope="row">111.222.333-44</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash text-dark"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">002</td>
                    <td scope="row">Exemplilson da Silva 2</td>
                    <td scope="row">exemplison2@email.com.br</td>
                    <td scope="row">111.222.333-45</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash text-dark"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">003</td>
                    <td scope="row">Exemplilson da Silva 3</td>
                    <td scope="row">exemplison3@email.com.br</td>
                    <td scope="row">111.222.333-46</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash text-dark"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Modal - Excluir usuário -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir usuário</h5>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir este usuário?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Cancelar</button>
                        <a href="#">
                            <button type="button" class="btn btn-danger mb-0">Excluir</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php require_once("./inc/footer-adm.php"); ?>