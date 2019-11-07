<?php
session_start();
$evento_id = $_SESSION['id_evento'];
include '../../../Controls/conexao.php';
include '../../../Controls/funcoes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hyper Events - Cadastrar atividades no evento" />
    <meta name="keywords" content="Evento, Cadastro, Atividades" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Victor Castro" />

    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon" />

    <script src="../../../JS/jquery.js"></script>
    <script src="../../../JS/valida_cadastro_atividade.js"></script>
    <script src="../../../JS/formata.js"></script>

    <title>Cadastrar Evento - Hyper-Events</title>
</head>

<body>
    <?php
    # Importa o cabeçalho padrão
    require_once '../../header_eventos.php';
    ?>
    <main class="container">
        <?php 
            $session = 'atividade_cadastrada';
            $msg = "
                <div class='alert alert-success text-center'>
                Atividade Cadastrada com Sucesso!<br />
                Clique <a href='../Listar/lista_atividades.php?id=$evento_id'><strong>aqui</strong></a> para ver as Atividades;
                </div>
            ";

            mostra_msg($session, $msg);

            $session = 'atividade_não_cadastrada';
            $msg = "
                <div class='alert alert-danger text-center'>
                    Não foi possivel cadastrar a atividade!
                </div>
            ";

            mostra_msg($session, $msg);

            $session = 'convidado_cadastrado';
            $msg = "
                <div class='alert alert-success text-center'>
                    Convidado Cadastrado!
                </div>
            ";

            mostra_msg($session, $msg);

            $session = 'local_cadastrado';
            $msg = "
                <div class='alert alert-success text-center'>
                    Local Cadastrado!
                </div>
            ";

            mostra_msg($session, $msg);
        ?>

        <div class="modal fade" id="modal_local" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Local</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <form id="form_cadastro_atividade" method="POST" action="../../../Controls/CRUD/gerencia_local.php?acao=modalCadastrar">

                <!-- ID Evento -->
                <input type="hidden" name="evento_id" value="<?php echo $evento_id ?>">

                <!-- Nome -->
                <div class="form-group">
                    <label for="nome_local">Nome: </label>
                    <input class="form-control" name="nome_local" id="nome_local" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar </button>
                <button type="submit" name="deletedata" class="btn btn-success"> Cadastrar </button>
            </div>
        </form>
    </div>
</div>
</div>

<div class="modal fade" id="modal_convidado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Convidado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form method="POST" action="../../../Controls/CRUD/gerencia_convidado.php?acao=modalCadastrar" name="form_cadastro">
        <div class="form-row">
            <div class="col-md-6">
                <label for="nome" id="campo_nome">Nome:</label>
                <input type="text" name="campo_nome" id="nome" class="form-control" placeholder="Digite o nome do convidado..." required>
                <div class="invalid-feedback">Nome inválido!</div>
            </div>
            <div class="col-md-6">
                <label for="email" id="campo_email">E-mail:</label>
                <input type="email" name="campo_email" id="email" class="form-control" placeholder="Digite o e-mail para contato" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <label for="telefone" id="campo_contato">Contato:</label>
                <input type="tel" name="campo_telefone" id="telefone" onkeypress="formata_mascara(this, '## #####-####', event)" minlength="13" maxlength="13" class="frm_number_only form-control" placeholder="(xx) xxxxx-xxxx" required>
            </div>
            <div class="col-md-6">
                <label for="tipo_conv">Tipo de Convidado:</label>
                <select class="form-control" name="tipo_convidado" id="tipo_conv">
                    <?php
                    include "../../../Controls/Listar/listar_tipo_convidado.php";
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="descricao" id="campo_descricao">Descrição</label>
            <textarea name="campo_descricao" id="descricao" cols="30" rows="5" placeholder="Descrição..." class="form-control" required></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar </button>
        <button type="submit" name="deletedata" class="btn btn-success"> Cadastrar </button>
    </form>
</div>
</div>
</div>
</div>

<form id="form_cadastro_atividade" method="POST" action="../../../Controls/CRUD/gerencia_atividade.php?acao=cadastrar" onsubmit="return validaCadastro();">
    <h2>Cadastrar Atividade</h2>

    <div class="form-row">
        <!-- ID Evento -->
        <input type="hidden" name="evento_id" value="<?php echo $evento_id ?>">

        <!-- Titulo Atividade -->
        <div class="col-md-4">
            <label for="nome_ativ">Nome: *</label>
            <input type="text" name="nome_ativ" id="nome_ativ" class="form-control" required>
        </div>

        <div class="col-md-4">
            <label for="tipo_ativ">Tipo Atividade: </label>
            <select name="tipo_ativ" id="tipo_ativ" class="form-control">
                <?php require_once '../../../Controls/Listar/lista_tipo_atividades.php'; ?>
            </select>
        </div>
        <!-- Local -->
        <div class="col-md-4">
            <label for="local">Local: </label>
            <select type="text" name="local" id="local" class="form-control">
                <?php require_once '../../../Controls/Listar/lista_locais_atividade.php'; ?>
            </select>
            <a href="#" class="create_local">Cadastrar</a>
        </div>
    </div>
    <div class="form-row">
        <!-- Quantidade de Vagas -->
        <div class="col-md-4">
            <label for="qtd_vagas">Quantidade de Vagas: </label>
            <input type="number" name="qtd_vagas" name="qtd_vagas" class="form-control" required>
        </div>

        <!-- Convidado -->
        <div class="col-md-4">
            <label for="convidado">Convidado: </label>
            <select name="convidado" id="convidado" class="form-control">
                <?php require_once '../../../Controls/Listar/lista_convidados_atividade.php'; ?>
            </select>
            <a href="#" class="create_convidado">Cadastrar</a>
        </div>

        <!-- Valor -->
        <div class="col-md-4">
            <label for="valor">Valor: </label>
            <input type="number" name="valor" id="valor" class="form-control" required>
        </div>
    </div>

    <div class="form-row">
        <!-- Data -->
        <div class="col-md-4">
            <label for="data">Data: </label>
            <input type="date" name="data" id="data" class="form-control" required>
            <div class="invalid-feedback">Você não pode voltar no tempo!</div>
        </div>

        <!-- Hora Inicio -->
        <div class="col-md-4">
            <label for="hora_inicio">Hora inicio: </label>
            <input type="time" name="hora_inicio" id="hora_inicio" class="form-control" required>
        </div>

        <!-- Hora Fim -->
        <div class="col-md-4">
            <label for="hora_fim">Hora fim: </label>
            <input type="time" name="hora_fim" id="hora_fim" class="form-control" required>
            <div class="invalid-feedback">A atividade não pode acabar antes de começar!</div>
        </div>
    </div>

    <!-- Descrição -->
    <div class="form-group">
        <label for="descricao">Descrição: </label>
        <textarea class="form-control" name="descricao" id="descricao" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <button type="reset" class="btn btn-secondary">Limpar</button>
    <a class="btn btn-info" href="../Listar/lista_atividades.php?id=<?php echo $evento_id ?>">Voltar</a>
</form>
</main>
<?php
    # Importa o rodape padrão
require_once '../../footer.php';
?>
<script src="../../../JS/jquery.js"></script>
<script src="../../../JS/bootstrap/bootstrap.min.js"></script>
<script src="../../../JS/bootstrap/popper.min.js"></script>
<script>
    $(document).ready(function(){
        $('.create_convidado').on('click', function(){
            $('#modal_convidado').modal('show');
        });
    });

    $(document).ready(function(){
        $('.create_local').on('click', function(){
            $('#modal_local').modal('show');
        });
    });
</script>
</body>
</html>