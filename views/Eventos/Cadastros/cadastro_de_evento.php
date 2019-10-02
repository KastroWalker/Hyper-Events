<?php
# Inicia a sessão
session_start();
# Importa a função para ver se o usuário esta logado
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Cadastrar eventos novos na plataforma"/>
    <meta name="keywords" content="Eventos, Cadastro"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/> 

    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_cadastro_eveto.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon" />
    
    <script src="../../../JS/jquery.js"></script>
    <script src="../../../JS/formata.js"></script>
    <script src="../../../JS/valida_cadastro_evento.js"></script>
    
    <title>Cadastrar Evento - Hyper-Events</title>
</head>

<body>
    <?php
    require_once '../../header_eventos.php';
    ?>
    <main>
        <section id="Cadastrar_Evento">
            <?php
            # Verifica se o evento foi cadastrado com sucesso
            if (isset($_SESSION['evento_cadastrado'])) {
                # Mostra a mensagem pro usuário
                ?>
                <div class="alert alert-success text-center">
                    Evento Cadastrado com Sucesso!<br />
                    Clique <a href="../Listar/lista_eventos.php"><strong>aqui</strong></a> para ver os eventos;
                </div>
            <?php
            }
            # Encerra a sessão de evento cadastrado
            unset($_SESSION['evento_cadastrado']);
            # Verifica se o evento ja esta cadastrado
            if (isset($_SESSION['evento_ja_cadastrado'])) {
                # Mostra a mensagem pro usuário
                ?>
                <div class="alert alert-danger text-center">
                    Evento já cadastrado!
                </div>
            <?php
            }
            # Encerra a sessão de evento ja cadastrado
            unset($_SESSION['evento_ja_cadastrado']);
            # Verfica se deu algum erro na hora de cadastrar o evento
            if (isset($_SESSION['erro_cadastrado'])) {
                # Mostra a mensagem pro usuário
                ?>
                <div class="alert alert-danger text-center">
                    Não foi possivel cadastrar o evento!
                </div>
            <?php
            }
            # Encerra a sessão de erro ao cadastrar
            unset($_SESSION['erro_cadastrado']);
            ?>

            <form method="POST" action="../../../Controls/CRUD/gerencia_evento.php?acao=cadastrar" id="form_cadastro" onsubmit="return valida_cadastro();">
                <h2>Cadastrar Evento</h2>
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="titulo">Titulo do Evento: *</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email de Contato: *</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="inicio">Inicio do evento: *</label>
                        <input type="date" name="inicio" id="inicio" class="form-control" required>
                        <div class="invalid-feedback">Você não pode voltar no tempo!</div>
                    </div>
                    <div class="col-md-3">
                        <label for="hora_inicio">Hora inicial: *</label>
                        <input type="time" name="hora_inicio" class="form-control" id="hora_inicio" required>
                    </div>
                    <div class="col-md-3">
                        <label for="fim">Fim do Evento: *</label>
                        <input type="date" name="fim" id="fim" class="form-control" required>
                        <div class="invalid-feedback">O evento não pode acabar antes de começar!</div>
                    </div>
                    <div class="col-md-3">
                        <label for="hora_fim">Hora final: *</label>
                        <input type="time" name="hora_fim" class="form-control" id="hora_fim" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="vagas">Vagas no evento: </label>
                        <select class="form-control" id="vagas" name="vagas">
                            <option value="100">100 vagas</option>
                            <option value="150">150 vagas</option>
                            <option value="200">200 vagas</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="site">Site do Evento: </label>
                        <input type="text" name="site" class="form-control" id="site">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição do evento</label>
                    <textarea name="descricao" class="form-control" id="descricao" required></textarea>
                </div>
                <br />
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <a class="btn btn-info" href="../Listar/lista_eventos.php">Voltar</a>
                <p><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
            </form>
        </section>
    </main>
    <?php
    # Importa o rodape padrão
    require_once '../../footer.php';
    ?>
</body>

</html>