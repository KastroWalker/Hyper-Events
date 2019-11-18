<!-- CREATE -->
<div class="modal fade" id="localaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../../Controls/CRUD/gerencia_local.php?acao=cadastrar" method="POST" id="form_cadastro">
                <div class="modal-body">
                    <input type="hidden" name="evento_id" id="cevento-id"> value="<?php echo $id_evento?>">
                    <!-- Titulo Evento -->
                    <div class="form-group">
                        <label for="ctitulo">Nome do local: *</label>
                        <input type="text" id="ctitulo" name="nome_local" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="insertlocal" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- EDIT -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../../Controls/CRUD/gerencia_local.php?acao=editar" method="POST" id="form_cadastro">
                <div class="modal-body">
                    <input type="hidden" name="evento_id" id="cevento_id">
                    <!-- Titulo Evento -->
                    <div class="form-group">
                        <label for="campo_titulo">Nome do local: *</label>
                        <input type="text" id="ctitulo" name="titulo" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="updatelocal" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- DELETE -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apagar Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../../Controls/CRUD/gerencia_local.php?acao=deletar" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="delete_id" id="cdelete_id">
                    <h4> Tem certeze que quer apagar o Evento? </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Não </button>
                    <button type="submit" name="deletelocal" class="btn btn-primary"> Sim ! Apagar evento. </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- DETALHES -->
<div class="modal fade" id="infomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalhes Local</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <dl>
                    <!-- Nome: -->
                    <dt>Nome: </dt>
                    <dd id="nome"></dd>
                </dl>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Sair </button>
            </div>
        </div>
    </div>
</div>