<?php
include '../../../Controls/conexao.php';
include '../../../Controls/funcoes.php';
session_start();
$id_atividade = $_SESSION['id_atividade'];
$sql = "SELECT * FROM atividade WHERE atividade_id = $id_atividade;";
$result = mysqli_query($conexao, $sql);

if ($row = mysqli_fetch_array($result)) {
    $evento_id = $row['evento_id'];
    $idTipoAtividade = $row['idTipoAtividade'];
    $idConvidado = $row['idConvidado'];
    $qtde_vagas_atividade = $row['qtde_vagas_atividade'];
    $valor = $row['valor'];
    $titulo_atividade = $row['titulo_atividade'];
    $descricao = $row['descricao'];
    $data = $row['data'];
    $local_id = $row['local_id'];
    $inicio = $row['inicio'];
    $fim = $row['fim'];
    $inicio = substr($inicio, 0, 5);
    $fim = substr($fim, 0, 5);

    mysqli_error($conexao);
} else {
    echo 'Registro não encontrado';
}

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
        $session = 'atividade_alterada';
        $msg = "
                <div class='alert alert-success text-center'>
                Atividade Alterada com Sucesso!<br />
                Clique <a href='../informacoes_atividade.php?id=$id_atividade'><strong>aqui</strong></a> para ver a atividade;
                </div>
            ";

        mostra_msg($session, $msg);

        $session = 'atividade_nao_alterada';
        $msg = "
                <div class='alert alert-danger text-center'>
                    Não foi possivel alterar a atividade!
                </div>
            ";

        mostra_msg($session, $msg);

        ?>
        <form id="form_cadastro_atividade" method="POST" action="../../../Controls/CRUD/gerencia_atividade.php?acao=editar" onsubmit="return validaCadastro();">
            <h2>Cadastrar Atividade</h2>

            <div class="form-row">
                <!-- ID Evento -->
                <input type="hidden" name="evento_id" value="<?php echo $evento_id ?>">
                <!-- ID Atividade -->
                <input type="hidden" name="atividade_id" value="<?php echo $id_atividade ?>">
                <!-- Titulo Atividade -->
                <div class="col-md-4">
                    <label for="nome_ativ">Nome: *</label>
                    <input type="text" name="nome_ativ" value="<?php echo $titulo_atividade ?>" id="nome_ativ" class="form-control" required>
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
                </div>
            </div>
            <div class="form-row">
                <!-- Quantidade de Vagas -->
                <div class="col-md-4">
                    <label for="qtd_vagas">Quantidade de Vagas: </label>
                    <input type="number" name="qtd_vagas" value="<?php echo $qtde_vagas_atividade ?>" class="form-control" required>
                </div>

                <!-- Convidado -->
                <div class="col-md-4">
                    <label for="convidado">Convidado: </label>
                    <select name="convidado" id="convidado" class="form-control">
                        <?php require_once '../../../Controls/Listar/lista_convidados_atividade.php'; ?>
                    </select>
                </div>

                <!-- Valor -->
                <div class="col-md-4">
                    <label for="valor">Valor: </label>
                    <input type="number" name="valor" id="valor" class="form-control" value="<?php echo $valor ?>" required>
                </div>
            </div>

            <div class="form-row">
                <!-- Data -->
                <div class="col-md-4">
                    <label for="data">Data: </label>
                    <input type="date" name="data" id="data" class="form-control" value="<?php echo $data ?>" required>
                    <div class="invalid-feedback">Você não pode voltar no tempo!</div>
                </div>

                <!-- Hora Inicio -->
                <div class="col-md-4">
                    <label for="hora_inicio">Hora inicio: </label>
                    <input type="time" name="hora_inicio" id="hora_inicio" class="form-control" value="<?php echo $inicio ?>" required>
                </div>

                <!-- Hora Fim -->
                <div class="col-md-4">
                    <label for="hora_fim">Hora fim: </label>
                    <input type="time" name="hora_fim" id="hora_fim" class="form-control" value="<?php echo $fim ?>" required>
                    <div class="invalid-feedback">A atividade não pode acabar antes de começar!</div>
                </div>
            </div>

            <!-- Descrição -->
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <textarea class="form-control" name="descricao" id="descricao" required><?php echo $descricao ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Alterar</button>
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
        $(document).ready(function() {
            $('.create_convidado').on('click', function() {
                $('#modal_convidado').modal('show');
            });
        });

        $(document).ready(function() {
            $('.create_local').on('click', function() {
                $('#modal_local').modal('show');
            });
        });
    </script>
</body>

</html>