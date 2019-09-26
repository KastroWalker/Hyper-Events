<?php
require_once '../../../Controls/conexao.php';   
$id = $_REQUEST['id'];
session_start();
$_SESSION['id_evento'] = $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /--> 
    <title>Locais do Evento - Hyper Events</title>
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap-theme.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon"/>
    <style>
        .div_principal {
            width: 80%;
            margin: auto; 
        }
    </style>
</head>
<body>
    <?php 
    require_once '../../header_eventos.php';
    ?>
    <div class="div_principal">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../../area_org.php">Hyper Events</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../informacoes_evento.php?id=<?php echo $id; ?>">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lista_atividades.php?id=<?php echo $id; ?>">Atividades</a>
                    </li>  
                    <li>
                        <a class="nav-link" href="lista_convidados.php?id=<?php echo $id; ?>">Convidados</a>
                    </li>
                    <li>
                        <a class="nav-link" href="lista_locais.php?id=<?php echo $id; ?>">Locais</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <a href="../Listar/lista_eventos.php" class="btn btn-info">Voltar</a>
            </form>
        </nav>
        <div class="text-right mx-auto" style="margin: 20px">
            <a href="../Cadastros/cadastra_local.php" class="btn btn-primary btn-lg text-right"> Cadastrar Local </a>
        </div>
        <?php
        require_once '../../../Controls/Listar/lista_locais.php'; 
        require_once '../../footer.php';
        ?>
    </body>
</html>