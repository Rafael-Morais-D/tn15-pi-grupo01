<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="index.php"><img class="logo-header" src="./assets/img/bakeandgo_logo_02_black.png" alt="Logo Bake & Go"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-center ml-md-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quem somos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Pães e Bolos</a>
                            <a class="dropdown-item" href="#">Frios</a>
                            <a class="dropdown-item" href="#">Lanches e Salgados</a>
                            <a class="dropdown-item" href="#">Mercearia</a>
                        </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary col-12 text mb-1 ml-1" href="#" data-toggle="modal" data-target="#btnLogin">Login</a>
                </li>
                <li>
                <a class="nav-link btn btn-primary mb-1 ml-3 full-width" href="cesta-de-compras.php"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
        </nav>
        <!-- MODAL LOGIN -->
        <div class="modal fade" id="btnLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="staticBackdropLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-dark">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email" aria-label="Login" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">*</span>
                        </div>
                        <input type="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p class="pt-3">Novo por aqui? <a href="cadastro.php" class="d-inline-block">Cadastre-se agora!</a></p>
                        <button type="button" class="btn btn-primary mb-0" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary mb-0" data-dismiss="modal">Login</button>
                    </div>
                    </div>
                </div>
                </div>
</header>