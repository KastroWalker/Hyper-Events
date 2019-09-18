<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap-theme.css">
        <link rel="icon" href="../img/icon.png" type="image/x-icon"/>
        <style type="text/css">
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <script src="../JS/valida_cadastro_evento.js"></script>
        <title>Cadastrar Evento - Hyper-Events</title>
    </head>
    <body>
        <div class="container">
            <?php 
                require_once 'header.php';
            ?>
            <form method="POST" action="../Controls/cadastra_ministrante.php">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF: </label>
                    <input type="text" name="cpf" id="cpf" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo: *</label>
                    <select class="form-control" id="sexo" name="sexo">
                      <option value="padrao" selected>Sexo...</option>
                      <option value="M">Masculino</option>
                      <option value="F">Feminino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="contato">Contato: </label>
                    <input type="text" name="contato" id="contato" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="data_nas">Data de nascimento: </label>
                    <input type="date" name="data_nasc" id="data_nasc" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição: </label>
                    <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                

                <input type="submit" name="btn_enviar" id="btn_enviar" value="Cadastrar" class="btn btn-primary">
                <input type="reset" name="btn_limpar" id="btn_limpar" value="Limpar" class="btn btn-secondary">
                <a href="cadastra_atividade.php?tipo=<?php echo $pag; ?>" id="btn_voltar" name="btn_voltar" class="btn btn-info">Voltar</a>
            </form>
            <?php 
                # Importa o rodape padrão
                require_once 'footer.php';
            ?>
        </div>
    </body>
</html>