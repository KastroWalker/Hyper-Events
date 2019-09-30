<?php
session_start();
$evento_id = $_SESSION['id_evento'];
include '../../../Controls/conexao.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Cadastrar locais em que ocorrerá as atividades do evento"/>
    <meta name="keywords" content="Eventos, Local, Localização, Atividades"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/> 
    
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon" />
    
    <title>Cadastrar Local - Hyper-Events</title>
</head>

<body>
    <div class="container">
        <?php
        # Importa o cabeçalho padrão
        require_once '../../header_eventos.php';
        ?>
        <main class="container">
            <?php
            # Verifica se a atividade foi cadastrada com sucesso
            if (isset($_SESSION['local_cadastrado'])) {
                # Mostra a mensagem pro usuário
                ?>
                <div class="alert alert-success text-center">
                    Local Cadastrada com Sucesso!<br />
                    Clique <a href="../Listar/lista_locais.php?id=<?php echo $evento_id?>"><strong>aqui</strong></a> para ver os Locais;
                </div>
            <?php
            }
            # Encerra a sessão de atividade cadastrada
            unset($_SESSION['local_cadastrado']);
            # Verfica se deu algum erro na hora de cadastrar o evento
            if (isset($_SESSION['local_não_cadastrada'])) {
                # Mostra a mensagem pro usuário
                ?>
                <div class="alert alert-danger text-center">
                    Não foi possivel cadastrar o local!
                </div>
            <?php
            }
            # Encerra a sessão de erro ao cadastrar
            unset($_SESSION['local_não_cadastrada']);
            ?>
            <form id="form_cadastro_atividade" method="POST" action="../../../Controls/CRUD/gerencia_local.php?acao=cadastrar">
                <h2>Cadastrar Local</h2>

				<!-- ID Evento -->
                <input type="hidden" name="evento_id" value="<?php echo $evento_id ?>">

                <!-- Nome -->
                <div class="form-group">
                    <label for="nome_local">Nome: </label>
                    <input class="form-control" name="nome_local" id="nome_local" required>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <a class="btn btn-info" href="../Listar/lista_locais.php?id=<?php echo $evento_id ?>">Voltar</a>
            </form>
        </main>
        <?php
        # Importa o rodape padrão
        require_once '../../footer.php';
        ?>
    </div>
</body>

</html>