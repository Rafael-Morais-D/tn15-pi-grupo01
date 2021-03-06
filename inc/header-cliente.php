        <div class="h-adm-space"></div>
        <nav class="navbar navbar-expand-xl navbar-light fixed-top nav-cliente m-auto">
        <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#admNav" aria-controls="admNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="admNav">
            <ul class="navbar-nav text-center m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="minhaconta.php">Minha Conta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="meuspedidos.php">Meus Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-adm mb-0 ml-1" title="Header Administrativo" data-toggle="modal" data-target="#btnSair">Sair</a>
                </li>
            </ul>
        </div>
        </nav>
        <!-- Modal - Sair -->
        <div class="modal fade" id="btnSair" tabindex="-1" role="dialog" aria-labelledby="btnSair" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sair</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente sair da sua conta?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Cancelar</button>
                        <a href="#">
                            <button type="button" class="btn btn-danger mb-0">Sair</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>