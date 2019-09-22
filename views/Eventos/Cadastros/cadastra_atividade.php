<?php 
    session_start();
    $evento_id = $_SESSION['id_evento'];
    include '../../../Controls/conexao.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Victor Castro">
    <meta name="description" content="O organizador cadastra as atividades que ocorrerão no evento">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon" />
    <style type="text/css">
        header,
        footer,
        #Manual {
            text-align: center;
        }
    </style>
    <script src="../JS/valida_cadastro_evento.js"></script>
    <title>Cadastrar Evento - Hyper-Events</title>
</head>

<body>
    <div class="container">
        <?php
        # Importa o cabeçalho padrão
        require_once '../../header_eventos.php';
        ?>
        <main class="container">
            <form id="form_cadastro_atividade" method="POST" action="../../../Controls/Cadastros/cadastra_atividade.php">
                <h2>Cadastrar Atividade</h2>
                <!-- Tipo Atividade -->
                <div class="form-row">
                <input type="hidden" name="evento_id" value="<?php echo$evento_id ?>">
                <div class="form-group">
                    <label for="tipo_ativ">Tipo Atividade: </label>
                    <select name="tipo_ativ" id="tipo_ativ" class="form-control">
                        <?php require_once '../../../Controls/Listar/lista_tipo_atividades.php' ?>
                    </select>
                </div>

                    <!-- Titulo Atividade -->
                    <div class="col-md-4">
                        <label for="nome_ativ">Nome: *</label>
                        <input type="text" name="nome_ativ" id="nome_ativ" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="tipo_ativ">Tipo Atividade: </label>
                        <select name="tipo_ativ" id="tipo_ativ" class="form-control">
                            <?php require_once '../../../Controls/Listar/lista_tipo_atividades.php' ?>
                        </select>
                    </div>

                    <!-- Local -->
                    <div class="col-md-4">
                        <label for="local">Local: </label>
                        <input type="text" name="local" id="local" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <!-- Quantidade de Vagas -->
                    <div class="col-md-4">
                        <label for="qtd_vagas">Quantidade de Vagas: </label>
                        <input type="number" name="qtd_vagas" name="qtd_vagas" class="form-control">
                    </div>

                    <!-- Convidado -->
                    <div class="col-md-4">
                        <label for="convidado">Convidado: </label>
                        <select name="convidado" id="convidado" class="form-control">
                            <?php require_once '../../../Controls/Listar/lista_convidados.php'; ?>
                        </select>
                    </div>

                    <!-- Valor -->
                    <div class="col-md-4">
                        <label for="valor">Valor: </label>
                        <input type="number" name="valor" id="valor" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <!-- Data -->
                    <div class="col-md-4">
                        <label for="data">Data: </label>
                        <input type="date" name="data" id="data" class="form-control" required>
                    </div>

                    <!-- Hora Inicio -->
                    <div class="col-md-4">
                        <label for="hora_inicio">Hora inicio: </label>
                        <input type="time" name="hora_inicio" id="hora_inicio" class="form-control">
                    </div>

                    <!-- Hora Fim -->
                    <div class="col-md-4">
                        <label for="hora_fim">Hora fim: </label>
                        <input type="time" name="hora_fim" id="hora_fim" class="form-control">
                    </div>
                </div>

                <!-- Descrição -->
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <textarea class="form-control" name="descricao" id="descricao"></textarea>
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
    </div>
</body>

</html>