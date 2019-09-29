<?php 
    include '../../../Controls/conexao.php';
    session_start();
    $id_evento = $_SESSION['id_evento'];

    $sql = "select * from eventos where evento_id = $id_evento";

    $result = mysqli_query($conexao, $sql);

    if($row = mysqli_fetch_array($result)){
        $user_id = $row['user_id']; 
        $titulo = $row['titulo_evento'];
        $descricao = $row['descricao'];
        $vagas = $row['qtde_vagas_evento']; 
        $site = $row['url_evento'];
        $data_inicio = $row['data_inicio'];
        $data_fim = $row['data_fim'];
        $hora_inicio = $row['hora_inicio'];
        $hora_fim = $row['hora_fim'];
        $email = $row['email'];
        $hora_inicio = substr($hora_inicio, 0, 5);
        $hora_fim = substr($hora_fim, 0, 5);

        mysqli_error($conexao);
    } else {
        echo "Registro não encontrado";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="robots" content="index, follow"/>
        <meta name="description" content="Hyper Events - Pode Editar o evento"/>
        <meta name="keywords" content="Eventos Acadêmicos, Escola"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Victor Castro"/>

        <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
        <link rel="icon" type="image/x-icon" href="../../../img/icon.png">
        
        <script src="../../../JS/valida_cadastro_evento.js"></script>

        <title>Edita Evento - HyperEvents</title>
    </head>
    <body>
        <?php
            require_once '../../header_eventos.php';
        ?>
        <main class="container">
            <?php
            # Verifica se o evento foi cadastrado com sucesso
            if (isset($_SESSION['evento_alterado'])) {
                # Mostra a mensagem pro usuário
                ?>
                <div class="alert alert-success text-center">
                    Evento Alterado com Sucesso!<br />
                    Clique <a href="../Listar/lista_eventos.php"><strong>aqui</strong></a> para ver os eventos;
                </div>
            <?php
            }
            # Encerra a sessão de evento cadastrado
            unset($_SESSION['evento_alterado']);
            # Verfica se deu algum erro na hora de cadastrar o evento
            if (isset($_SESSION['nao_alterado'])) {
                # Mostra a mensagem pro usuário
                ?>
                <div class="alert alert-danger text-center">
                    Não foi possivel alterar o evento!
                </div>
            <?php
            }
            # Encerra a sessão de erro ao cadastrar
            unset($_SESSION['nao_alterado']);
            ?>

            <form method="POST" action="../../../Controls/CRUD/gerencia_evento.php?acao=editar" id="form_cadastro" onsubmit="return valida_cadastro();">
                <h2>Cadastrar Evento</h2>
                <div class="form-row">
                    <input type="hidden" name="evento_id" id="evento_id" value="<?php echo $user_id; ?>">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $id_evento; ?>">
                    <div class="col-md-6">
                        <label for="titulo">Titulo do Evento: *</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $titulo ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email de Contato: *</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="inicio">Inicio do evento: *</label>
                        <input type="date" name="inicio" id="inicio" class="form-control" value="<?php echo $data_inicio ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label for="hora_inicio">Hora inicial: *</label>
                        <input type="time" name="hora_inicio" class="form-control" id="hora_inicio" value="<?php echo $hora_inicio ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label for="fim">Fim do Evento: *</label>
                        <input type="date" name="fim" id="fim" class="form-control" value="<?php echo $data_fim ?>" required>
                    </div>
                    <div class="col-md-3">
                        <label for="hora_fim">Hora final: *</label>
                        <input type="time" name="hora_fim" class="form-control" id="hora_fim" value="<?php echo $hora_fim ?>" required>
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
                        <input type="text" name="site" class="form-control" id="site" value="<?php echo $site ?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição do evento</label>
                    <textarea name="descricao" class="form-control" id="descricao" required><?php echo $descricao ?></textarea>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Alterar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <a class="btn btn-info" href="../informacoes_evento.php?id=<?php echo $id_evento ?>">Voltar</a>
                <p><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
            </form>
        </main>
        <?php 
            # Importa o rodape padrão
            require_once '../../footer.php';
        ?>
    </body>
</html>