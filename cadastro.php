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
                            <input type="text" class="form-control" placeholder="Endereço" aria-describedby="enderecoHelp" id="inputEndereco" name="inputEndereco" required>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" placeholder="CEP" name="inputCep" required>
                            </div>
                            <div class="form-group col-md-7">
                                <input type="text" class="form-control" placeholder="Cidade" name="inputCidade" required>
                            </div>
                            <div class="form-group col-md-2">
                                <select class="form-control" name="inputUF" id="inputUF" required>
                                <option disabled="" selected="">UF</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                                </select>
                            </div>
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