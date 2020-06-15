<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<?php require_once("./inc/header-adm.php"); ?>

<main class="container py-5 mt-5">
    <h2>Produtos</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Preço (BRL)</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">001</td>
                    <td scope="row">Pão Italiano</td>
                    <td scope="row">12</td>
                    <td scope="row">Pães</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-pencil text-dark"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash text-dark"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">002</td>
                    <td scope="row">Bolo de Chocolate</td>
                    <td scope="row">25</td>
                    <td scope="row">Bolos</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-pencil text-dark"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash text-dark"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">003</td>
                    <td scope="row">Croissant</td>
                    <td scope="row">10</td>
                    <td scope="row">Pães</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-pencil text-dark"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash text-dark"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Modal - Excluir produto -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir este produto?</p>
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
        <p class="font-weight-bold">Adicionar um produto
            <a href="#" data-toggle="modal" data-target="#modalAdd">
                <i class="far fa-plus-square text-dark"></i>
            </a></p>
        <!-- Modal - Adicione um produto -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adicione um produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <br>
                    <form class="container">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Nome do Produto"
                                    aria-describedby="adicionarProdutoHelp" id="inputProduto" name="inputProduto"
                                    required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Categoria</label>
                                <select class="custom-select">
                                    <option value="1">Pães</option>
                                    <option value="2">Bolos</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSobrenome">Preço</label>
                                <input type="number" class="form-control" placeholder="R$"
                                    aria-describedby="adicionarProdutoHelp" id="inputProduto" name="inputProduto"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="staticID">ID</label>
                                <input type="text" readonly class="form-control-plaintext" placeholder="000"
                                    aria-describedby="assuntoHelp" id="inputID" name="inputID">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary mb-0">Adicionar</button>
                            <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Cancelar</button>
                        </div>
                </div>
            </div>
        </div>
</main>

<?php require_once("./inc/footer-adm.php"); ?>