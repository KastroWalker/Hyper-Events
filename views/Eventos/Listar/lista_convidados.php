<?php
require_once '../../../Controls/conexao.php';   
session_start();
$id = $_SESSION['id_evento'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Detalhes dos convidados que virão nas atividades do evento"/>
    <meta name="keywords" content="Convidados, Atividade, Evento, Visualizar, Detalhes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/> 

    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon"/>
    
    <title>Convidados - Hyper Events</title>
</head>
<body>
    <?php
        require_once '../../header_eventos.php'
    ?>
    <div class="div_principal">
        <?php require_once '../../Menus/nav_bar_evento.php' ?>
    <div class="text-right mx-auto" style="margin: 20px">
        <a href="../Cadastros/cadastro_convidado.php" class="btn btn-primary btn-lg text-right"> Cadastrar Convidado </a>
    </div>
    <?php
    require_once '../../../Controls/Listar/lista_convidados.php';
    require_once '../../footer.php';
    ?>
</body>
</html>