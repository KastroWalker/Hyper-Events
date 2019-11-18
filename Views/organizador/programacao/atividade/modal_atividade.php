<!-- CREATE -->
<div class="modal fade" id="atividadeaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../../Controls/CRUD/gerencia_atividade.php?acao=cadastrar" method="POST" id="form_cadastro" onsubmit="return validaCadastro();">
                <div class="modal-body">
                    <!-- ID Evento -->
                    <input type="hidden" name="evento_id" value="<?php echo $evento_id ?>">

                    <!-- Titulo Atividade -->
                    <div class="form-group">
                        <label for="nome_ativ">Nome: *</label>
                        <input type="text" name="nome_ativ" id="nome_ativ" class="form-control" required>
                    </div>

                    <!-- Tipo Atividade -->
                    <div class="form-group">
                        <label for="tipo_ativ">Tipo Atividade: </label>
                        <select name="tipo_ativ" id="tipo_ativ" class="form-control">
                            <?php require_once '../../../Controls/Listar/lista_tipo_atividades.php'; ?>
                        </select>
                    </div>

                    <!-- Local -->
                    <div class="form-group">
                        <label for="local">Local: </label>
                        <select type="text" name="local" id="local" class="form-control">
                            <?php require_once '../../../Controls/Listar/lista_locais_atividade.php'; ?>
                        </select>
                        <a href="cadastra_local.php">Cadastrar</a>
                    </div>

                    <!-- Quantidade de Vagas -->
                    <div class="form-group">
                        <label for="qtd_vagas">Quantidade de Vagas: </label>
                        <input type="number" name="qtd_vagas" name="qtd_vagas" class="form-control" required>
                    </div>

                    <!-- Convidado -->
                    <div class="form-group">
                        <label for="convidado">Convidado: </label>
                        <select name="convidado" id="convidado" class="form-control">
                            <?php require_once '../../../Controls/Listar/lista_convidados_atividade.php'; ?>
                        </select>
                        <a href="cadastro_convidado.php">Cadastrar</a>
                    </div>

                    <!-- Data -->
                    <div class="form-group">
                        <label for="data">Data: </label>
                        <input type="date" name="data" id="data" class="form-control" required>
                        <div class="invalid-feedback">Você não pode voltar no tempo!</div>
                    </div>

                    <!-- Hora Inicio -->
                    <div class="form-group">
                        <label for="hora_inicio">Hora inicio: </label>
                        <input type="time" name="hora_inicio" id="hora_inicio" class="form-control" required>
                    </div>

                    <!-- Hora Fim -->
                    <div class="form-group">
                        <label for="hora_fim">Hora fim: </label>
                        <input type="time" name="hora_fim" id="hora_fim" class="form-control" required>
                        <div class="invalid-feedback">A atividade não pode acabar antes de começar!</div>
                    </div>

                    <!-- Valor -->
                    <div class="form-group">
                        <label for="valor">Valor: </label>
                        <input type="number" name="valor" id="valor" class="form-control" required>
                    </div>

                    <!-- Descrição -->
                    <div class="form-group">
                        <label for="descricao">Descrição: </label>
                        <textarea class="form-control" name="descricao" id="descricao" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="insertevento" class="btn btn-primary">Cadastrar</button>
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
            <form action="../../../Controls/CRUD/gerencia_evento.php?acao=editar" method="POST" id="form_cadastro">
                <div class="modal-body">
                    <input type="hidden" name="evento_id" id="cevento_id">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['id'] ?>">
                    <!-- Titulo Evento -->
                    <div class="form-group">
                        <label for="campo_titulo">Titulo do Evento: *</label>
                        <input type="text" id="ctitulo" name="titulo" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="updateativ" class="btn btn-primary">Editar</button>
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
            <form action="../../../Controls/CRUD/gerencia_evento.php?acao=deletar" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="delete_id" id="cdelete_id">
                    <h4> Tem certeze que quer apagar a Atividade? </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Não </button>
                    <button type="submit" name="deleteativ" class="btn btn-primary"> Sim ! Apagar evento. </button>
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
                <h5 class="modal-title" id="exampleModalLabel">Detalhes Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <dl>
                    <!-- Titulo -->
                    <dt>Titulo: </dt>
                    <dd id="titulo"></dd>
                </dl>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Sair </button>
                <a href="" id="btnmaisinfo" class="btn btn-primary">Mais detalhes</a>
            </div>
        </div>
    </div>
</div>