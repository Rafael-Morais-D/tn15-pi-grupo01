<?php $tituloPagina = "| Cesta de Compras"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<main class="container-fluid py-5 mt-5">
        <header class="topo-pagina" id="topoCarrinho">
            <h2 class="p-1">Cesta de Compras</h2>
        </header>
        <section class="container">
            <div class="row-cesta mr-2 ml-2">
                <form class="col-12 mb-3" id="carrinhoForm" action="pagamento.php" method="post">
                    <h2 class="col-12 text-center text-info py-5 text-dark">Produtos selecionados</h2>
                    <p class="mb-5 text-center">Confira os produtos selecionados e clique em Finalizar Compra</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Produto</th>
                                <th scope="col" class="d-none d-md-table-cell">Preço Unitário</th>
                                <th scope="col">Preço Total</th>
                                <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex align-items-start justify-content-start flex-column flex-lg-row">
                                        <img src="./assets/img/03_bakeandgo.jpg" alt="Produto 04" width="100" height="auto">
                                        <div class="text-left mx-0 mx-md-3">
                                            <h5 class="my-0"><span class="cart-qtd">1</span> Pão Italiano</h5>
                                            <small class="text-muted my-0">REF: 001PAOITA</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart-unit-price d-none d-md-table-cell">R$12</td>
                                <td class="cart-subtotal-price">R$12</td>
                                <td>
                                    <a href="#" class="ml-3" data-toggle="modal" data-target="#modalProduto01"><i class="fas fa-pencil text-dark"></i></a>
                                    <a href="#" class="ml-3"><i class="fas fa-times text-dark"></i></a>
                                </td>
                                <!-- Modal Produto 01 -->
                                <div class="modal fade mt-5" id="modalProduto01" tabindex="-1" role="dialog" aria-labelledby="modalProduto01Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalProduto01Label">Item 01</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="formProduto01Edit">
                                                    <div class="form-row">
                                                        <div class="form-group col">
                                                            <label for="quantidadeProduto01">Quantidade</label>
                                                            <input type="number" class="form-control" id="quantidadeProduto01" step="1" min="1" value="1" form="carrinhoForm" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix mb-0">
                                                        <button data-dismiss="modal" class="mx-auto my-auto btn btn-info btn-md col-md-3 mb-0">Atualizar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /Modal Produto 01 -->
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex align-items-start justify-content-start flex-column flex-lg-row">
                                        <img src="./assets/img/05_bakeandgo.jpg" alt="Produto 04" width="100" height="auto">
                                        <div class="text-left mx-0 mx-md-3">
                                            <h5 class="my-0"><span class="cart-qtd">2</span> Bolo de Chocolate com Cobertura de Chocolate</h5>
                                            <small class="text-muted my-0">REF: 002BLCHOCO</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart-unit-price d-none d-md-table-cell">R$25</td>
                                <td class="cart-subtotal-price">R$25</td>
                                <td>
                                    <a href="#" class="ml-3" data-toggle="modal" data-target="#modalProduto01"><i class="fas fa-pencil text-dark"></i></a>
                                    <a href="#" class="ml-3"><i class="fas fa-times text-dark"></i></a>
                                </td>
                                <!-- Modal Produto 02 -->
                                <div class="modal fade mt-5" id="modalProduto01" tabindex="-1" role="dialog" aria-labelledby="modalProduto01Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalProduto01Label">Item 01</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="formProduto01Edit">
                                                    <div class="form-row">
                                                        <div class="form-group col">
                                                            <label for="quantidadeProduto01">Quantidade</label>
                                                            <input type="number" class="form-control" id="quantidadeProduto01" step="1" min="1" value="1" form="carrinhoForm" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix mb-0">
                                                        <button data-dismiss="modal" class="mx-auto my-auto btn btn-info btn-md col-md-3 mb-0">Atualizar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /Modal Produto 02 -->
                            </tr>

                        </tbody>
                    </table>
                        <div class="form-group d-inline-block">
                            <label for="cupomDesconto">Cupom de Desconto</label>
                            <div>
                                <input type="text" class="form-control col-lg-12" name="cupomDesconto" id="cupomDesconto" placeholder="INSIRA SEU CUPOM">
                            </div>
                        </div>
                            <button type="submit" class="btn btn-info float-right col-lg-3 mt-3" form="carrinhoForm">Finalizar Compra</button>
                </form>
            </div>
        </section>
    </main>

<?php require_once("./inc/footer.php"); ?>