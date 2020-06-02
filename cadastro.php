<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<!-- Form - Cadastro -->
<div class="container-fluid py-5 mt-5">
        <div class="form-cadastro">
            <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <h3 class="text-center mb-4">Criar uma conta</h3>
                        <fieldset>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="Nome Completo" name="nome" type="text">
                            </div>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="Email" name="email" type="text">
                            </div>
                            <div class="form-group has-success">
                                <input class="form-control input-lg" placeholder="Senha" name="password" value="" type="password">
                            </div>
                            <div class="form-group has-success">
                                <input class="form-control input-lg" placeholder="Confirmar Senha" name="password" value="" type="password">
                            </div>
                            <div class="checkbox">
                                <label class="medium">
                                    <input name="terms" type="checkbox"> Estou de acordo com os <a data-toggle="modal" href="#termosDeUso">Termos de Uso.</a>
                                </label>
                            </div>
                            <input class="btn btn-md btn-primary btn-block" value="Cadastrar" type="submit">
                        </fieldset>
                    </div>
            </div>
        </div>
    </div>
<?php require_once("./inc/footer.php"); ?>