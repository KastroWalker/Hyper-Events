<?php 
    session_start();
    $evento_id = $_SESSION['id_evento'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
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
            # Importa o cabeçalho padrão
            require_once '../../header_eventos.php';
        ?>
        <?php 
            # Importa o rodape padrão
            require_once '../../footer.php';
        ?>
    </div>
    </body>
</html>