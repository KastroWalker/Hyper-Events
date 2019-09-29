<?php
    include '../../Controls/funcoes.php';
    include '../../Controls/conexao.php';
    $id = $_REQUEST['id'];
    session_start();
    $_SESSION['id_evento'] = $id;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Acompanhar detalhes dos eventos"/>
    <meta name="keywords" content="Eventos Acadêmicos, Escola"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/>

    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/style_padrao.css">
    <link rel="icon" type="image/x-icon" href="../../img/icon.png">
    
    <title>Informações do Evento - HyperEvents</title>
</head>
<body>
    <?php
        require_once '../header_cadastro.php';
    ?>

    <div class="div_principal">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../area_org.php">Hyper Events</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="informacoes_evento.php?id=<?php echo $id; ?>">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Listar/lista_atividades.php">Atividades</a>
                    </li>
                    <li>
                        <a class="nav-link" href="Listar/lista_convidados.php">Convidados</a>
                    </li>  
                    <li>
                        <a class="nav-link" href="Listar/lista_locais.php">Locais</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <a href="Listar/lista_eventos.php" class="btn btn-info">Voltar</a>
            </form>
        </nav>
        <main>
            <h2 align="center">Informações Atividade</h2>
            <?php
                require_once './../../Controls/Listar/Informacoes/informacoes_evento.php'
            ?>
            <a href="Editar/edita_evento.php" class="btn btn-primary">Editar</a>
        </main>
    <?php
        require_once '../footer.php';
    ?>
</body>
</html>