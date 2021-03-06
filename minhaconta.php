<?php $tituloPagina = "Bake & Go | Minha Conta"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<?php require_once("./inc/header-cliente.php"); ?>

<main class="container minha-conta py-5 mt-5 adm-pag">
    <div class="d-flex justify-content-between align-items-center link-continuar">
        <h2 class="mb-0">Minha Conta</h2>
        <a href="index.php">Continuar comprando</a>
    </div>
    <hr class="accent my-4">
    <h3 class="mb-4 text-center">Olá Exemplilson da Silva 1</h3>
        <div class="form-cadastro">
            <div class="col-lg-7 mx-auto">
                    <div class="card card-body">
                        <fieldset>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" value="Exemplilson da Silva 1" readonly name="nome" type="text">
                            </div>
                            <div class="form-group has-error">
                            <input type="text" class="form-control" value="Av. Dr. Cardoso de Melo, 90" readonly aria-describedby="enderecoHelp" id="inputEndereco" name="inputEndereco" required>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" placeholder="04548-000" readonly name="inputCep" required>
                            </div>
                            <div class="form-group col-md-7">
                                <input type="text" class="form-control" placeholder="São Paulo" readonly name="inputCidade" required>
                            </div>
                            <div class="form-group col-md-2">
                                <select class="form-control" name="inputUF" id="inputUF" readonly required>
                                <option value="SP" readonly>SP</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" value="exemplison1@email.com.br" readonly name="email" type="text">
                            </div>
                            <div class="col-12 text-center mt-4">
                                <a href="admEdicaoUsuario.php" class="btn btn-primary btn-minha-conta text-center">Editar meu perfil</a>
                            </div>
                        </fieldset>
                    </div>
            </div>
        </div>

<?php require_once("./inc/footer-cliente.php"); ?>