<?php $tituloPagina = "Bake & Go | Contato"; ?>
<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>

<main class="container pt-4 px-0">
    <h2 class="text-center">Contato</h2>
    <div class="row my-0 mx-3 mt-md-5">

        <!-- CAMPO DE MENSAGEM -->
        <section class="col-12 col-md-6 mx-auto p-0 mt-4 mt-md-0 mensagem">
            <form action="contato.php" method="post" class="container-fluid px-0">
                <div class="form-cadastro">
                    <div class="card card-body mensagem mr-md-2">
                        <h3 class="text-center mb-4">Fale conosco</h3>
                        <fieldset>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="Nome Completo" name="nome" type="text">
                            </div>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="Email" name="email" type="text">
                            </div>
                            <div class="form-row">
                                <textarea class="form-control" placeholder="Escreva aqui sua mensagem." name="contatoTexto" id="contatoTexto" rows="7" aria-describedby="#contatoTextoHelp"></textarea>
                            </div>
                            <input class="btn btn-md btn-primary btn-block mt-4 mb-2" value="Enviar" type="submit">
                        </fieldset>
                    </div>
                </div>
            </form>        
        </section>
    
        <!-- MAPA -->
        <section class="col-12 col-md-6 mx-auto mt-3 mt-md-0 p-0">
            <div class="card card-body mapa ml-md-2">
                <h3 class="text-center mb-4">Onde estamos</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.0480462713126!2d-46.67753668447493!3d-23.602609769003088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1592880053812!5m2!1spt-BR!2sbr" width="auto" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
    </div>
</main>

<?php require_once("./inc/footer.php"); ?>