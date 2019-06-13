<?php 
    session_start();
    include_once '../Controls/verifica_login.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
        <style type="text/css">
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="../CSS/style_cadastro_eveto.css">
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
        <title>Cadastrar Evento - Hyper-Events</title>
    </head>
    <body>
        <?php 
            require_once 'header.php';
        ?>
        <main>
            <section id="Cadastrar_Evento">
                <?php 
                    if(isset($_SESSION['evento_cadastrado'])){
                ?>
                    <div class="alert alert-success text-center">
                        Evento Cadastrado com Sucesso!<br/>
                        Clique <a href="lista_eventos.php"><strong>aqui</strong></a> para ver os evetntos;
                    </div>
                <?php 
                    }
                    unset($_SESSION['evento_cadastrado']);
                    if (isset($_SESSION['evento_ja_cadastrado'])) {
                ?>
                    <div class="alert alert-danger text-center">
                        Evento já cadastrado!
                    </div>
                <?php
                    }
                    unset($_SESSION['evento_ja_cadastrado']);
                    if (isset($_SESSION['erro_cadastrado'])){
                ?>
                    <div class="alert alert-danger text-center">
                        Não foi possivel cadastrar o evento!
                    </div>
                <?php
                    }
                    unset($_SESSION['erro_cadastrado']);
                ?>

                <form method="POST" action="../Controls/gerencia_evento.php" id="form_cadastro">
                    <h2>Cadastrar Evento</h2>
                    <div class="form-group">
                        <label for="titulo">Titulo do Evento: *</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email de Contato: *</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    <div>
                    <div class="form-group">
                        <label for="inicio">Inicio do evento: *</label>
                        <input type="date" name="inicio" id="inicio" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fim">Fim do Evento: *</label>
                        <input type="date" name="fim" id="fim" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="hora_inicio">Horario de inicio do evento: *</label>
                        <input type="time" name="hora_inicio" class="form-control" id="hora_inicio">
                    </div>
                    <div class="form-group">
                        <label for="site">Site do Evento: </label>
                        <input type="url" name="site" class="form-control" id="site">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição do evento</label>
                        <textarea name="descricao" class="form-control" id="descricao"></textarea>
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="reset" class="btn btn-secondary">Limpar</button>
                    <a class="btn btn-info" href="lista_eventos.php">Voltar</a>
                    <p><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
                </form>
            </section>
        </main>
        <?php 
            require_once 'footer.php';
        ?>
    </body>
</html>