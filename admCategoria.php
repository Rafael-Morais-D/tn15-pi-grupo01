<?php $tituloPagina = "Bake & Go | Adm Categorias"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<?php require_once("./inc/header-adm.php"); ?>

<main class="container py-5 mt-5">
    <h2>Categorias</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">001</td>
                    <td scope="row">Pães</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modalCategoria">
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
                    <td scope="row">Bolos</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modalCategoria">
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
                    <td scope="row">Salgados</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modalCategoria">
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
        <!-- Modal - Editar categoria -->
        <div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Editar categoria</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <br>
                <form class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputID">ID</label>
                            <input type="number" class="form-control" placeholder="000"
                                aria-describedby="adicionarID" id="inputID" name="inputID"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCategoria">Categoria</label>
                            <select class="custom-select">
                                <option value="1">Pães</option>
                                <option value="2">Bolos</option>
                                <option value="3">Salgados</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer pr-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <!-- Modal - Excluir categoria -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir esta categoria?</p>
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
        <p class="font-weight-bold">Adicionar uma categoria
            <a href="#" data-toggle="modal" data-target="#modalAdd">
                <i class="far fa-plus-square text-dark"></i>
            </a></p>
        <!-- Modal - Adicione uma categoria -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adicionar categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputID">ID</label>
                            <input type="number" class="form-control" placeholder="000"
                                aria-describedby="adicionarID" id="inputID" name="inputID"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCategoria">Categoria</label>
                            <select class="custom-select">
                                <option value="1">Pães</option>
                                <option value="2">Bolos</option>
                                <option value="3">Salgados</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer pr-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
</main>

<?php require_once("./inc/footer-adm.php"); ?>