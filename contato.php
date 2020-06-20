<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<main class="container pt-4 px-0">
    <h2 class="text-center">Contato</h2>
    <div class="">

        <!-- CAMPO DE MENSAGEM -->
        <section class="col-11 col-md-5 mx-auto p-0">
            <form action="contato.php" method="post" class="container-fluid px-0 mt-4 mt-md-5">
                <div class="form-cadastro">
                    <div class="card card-body">
                        <h3 class="text-center mb-4">Fale conosco</h3>
                        <fieldset>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="Nome Completo" name="nome" type="text">
                            </div>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="Email" name="email" type="text">
                            </div>
                            <div class="form-row">
                                <textarea class="form-control" placeholder="Escreva aqui sua mensagem." name="contatoTexto" id="contatoTexto" rows="4" aria-describedby="#contatoTextoHelp"></textarea>
                            </div>
                            <input class="btn btn-md btn-primary btn-block mt-4 mb-2" value="Enviar" type="submit">
                        </fieldset>
                    </div>
                </div>
            </form>        
        </section>
    
        <!-- MAPA -->
        <section class="col-11 col-md-5 mx-auto mt-3 mt-md-0 p-0">
            <div class="card card-body mapa">
                <h3 class="text-center mb-4">Onde estamos</h3>
            </div>
        </section>
    </div>
</main>

<?php require_once("./inc/footer.php"); ?>