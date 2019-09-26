<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Sistema de Eventos Acadêmicos"/>
    <meta name="keywords" content="Eventos Acadêmicos, Escola,"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/> 

    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon">
    
    <title>Lista de Eventos - Hyper Events</title>
</head>
<body>
    <?php
        require_once '../../header_eventos.php';
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../../index.php"><img src="../../../img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="Hyper"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../../login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listar_eventos_user.php">Eventos</a>
                </li>  
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <a href="../../../Controls/logout.php" class="btn btn-danger">Sair</a>             
        </form>
    </nav>
    <?php    
        require_once '../../../Controls/Listar/lista_eventos_user.php';
        require_once '../../footer.php'
    ?>    
</body>
</html>