<!-- CREATE -->
<div class="modal fade" id="eventoaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../../../Controls/CRUD/gerencia_evento.php?acao=cadastrar" method="POST" id="form_cadastro" onsubmit="return valida_cadastro();">
                <div class="modal-body">
                    <input type="hidden" id="evento_id" name="evento" class="fomr-control" required>
                    <!-- Titulo Evento -->
                    <div class="form-group">
                        <label for="campo_titulo">Titulo do Evento: *</label>
                        <input type="text" id="campo_titulo" name="titulo" class="form-control" required>
                    </div>

                    <!-- Email organizador -->
                    <div class="form-group">
                        <label for="campo_email">Email de Contato: *</label>
                        <input type="email" id="campo_email" name="email" class="form-control" required>
                    </div>

                    <!-- Data Inicio -->
                    <div class="form-group">
                        <label for="campo_inicio">Inicio do evento: *</label>
                        <input type="date" id="campo_inicio" name="inicio" class="form-control" required>
                        <div class="invalid-feedback">Você não pode voltar no tempo!</div>
                    </div>

                    <!-- Hora Inicio -->
                    <div class="form-group">
                        <label for="campo_hora_inicio">Hora inicial: *</label>
                        <input type="time" id="campo_hora_inicio" name="hora_inicio" class="form-control" required>
                    </div>

                    <!-- Data Fim -->
                    <div class="form-group">
                        <label for="campo_fim">Fim do Evento: *</label>
                        <input type="date" id="campo_fim" name="fim" class="form-control" required>
                        <div class="invalid-feedback">O evento não pode acabar antes de começar!</div>
                    </div>
                    
                    <!-- Hora Fim -->
                    <div class="form-group">
                        <label for="campo_hora_fim">Hora final: *</label>
                        <input type="time" id="campo_hora_fim" name="hora_fim" class="form-control" required>
                    </div>

                    <!-- Vagas -->
                    <div class="form-group">
                        <label for="campo_vagas">Vagas no evento: </label>
                        <select class="form-control" id="campo_vagas" name="vagas">
                            <option value="100">100 vagas</option>
                            <option value="150">150 vagas</option>
                            <option value="200">200 vagas</option>
                        </select>
                    </div>
                    
                    <!-- Site -->
                    <div class="form-group">
                        <label for="campo_site">Site do Evento: </label>
                        <input type="text" id="campo_site" name="site" class="form-control">
                    </div>

                    <!-- Descrição -->
                    <div class="form-group">
                        <label for="campo_ descricao">Descrição do evento</label>
                        <textarea id="campo_descricao" name="descricao" class="form-control" required></textarea>
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

                    <!-- Email organizador -->
                    <div class="form-group">
                        <label for="campo_email">Email de Contato: *</label>
                        <input type="email" id="cemail" name="email" class="form-control" required>
                    </div>

                    <!-- Data Inicio -->
                    <div class="form-group">
                        <label for="campo_inicio">Inicio do evento: *</label>
                        <input type="date" id="cinicio" name="inicio" class="form-control" required>
                        <div class="invalid-feedback">Você não pode voltar no tempo!</div>
                    </div>

                    <!-- Hora Inicio -->
                    <div class="form-group">
                        <label for="campo_hora_inicio">Hora inicial: *</label>
                        <input type="time" id="chora_inicio" name="hora_inicio" class="form-control" required>
                    </div>

                    <!-- Data Fim -->
                    <div class="form-group">
                        <label for="campo_fim">Fim do Evento: *</label>
                        <input type="date" id="cfim" name="fim" class="form-control" required>
                        <div class="invalid-feedback">O evento não pode acabar antes de começar!</div>
                    </div>
                    
                    <!-- Hora Fim -->
                    <div class="form-group">
                        <label for="campo_hora_fim">Hora final: *</label>
                        <input type="time" id="chora_fim" name="hora_fim" class="form-control" required>
                    </div>

                    <!-- Vagas -->
                    <div class="form-group">
                        <label for="campo_vagas">Vagas no evento: </label>
                        <select class="form-control" id="cvagas" name="vagas">
                            <option value="100">100 vagas</option>
                            <option value="150">150 vagas</option>
                            <option value="200">200 vagas</option>
                        </select>
                    </div>
                    
                    <!-- Site -->
                    <div class="form-group">
                        <label for="campo_site">Site do Evento: </label>
                        <input type="text" id="csite" name="site" class="form-control">
                    </div>

                    <!-- Descrição -->
                    <div class="form-group">
                        <label for="campo_ descricao">Descrição do evento</label>
                        <textarea id="cdescricao" name="descricao" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="updateevento" class="btn btn-primary">Editar</button>
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
                    <h4> Tem certeze que quer apagar o Evento? </h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Não </button>
                    <button type="submit" name="deleteevento" class="btn btn-primary"> Sim ! Apagar evento. </button>
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

                    <!-- E-mail Org -->
                    <dt>E-mail organizador</dt>
                    <dd id="email_org"></dd>
                    
                    <!-- Titulo -->
                    <dt>Descrição: </dt>
                    <dd id="descricao"></dd>

                    <!-- Site -->
                    <dt>Site: </dt>
                    <dd id="site"></dd>

                    <!-- Hora Inicio -->
                    <dt>Hora de Inicio: </dt>
                    <dd id="time_inicio"></dd>

                    <!-- Data Inicio -->
                    <dt>Data Inicio: </dt>
                    <dd id="data_inicio"></dd>

                    <!-- Hora fim -->
                    <dt>Hora Fim: </dt>
                    <dd id="time_fim"></dd>

                    <!-- Data fim -->
                    <dt>Data Fim: </dt>
                    <dd id="data_fim"></dd>
                </dl>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Sair </button>
                <a href="" id="btnmaisinfo" class="btn btn-primary">Mais detalhes</a>
            </div>
        </div>
    </div>
</div>