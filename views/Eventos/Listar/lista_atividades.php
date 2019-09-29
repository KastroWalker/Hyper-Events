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
    <meta name="description" content="Hyper Events - Ver detalhes das atividades que ocorrerão no evento"/>
    <meta name="keywords" content="Visualizar, Atividades, Evento, Detalhes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/> 

    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon"/>

    <title>Atividades do Evento - Hyper Events</title>
</head>
<body>
    <?php 
    require_once '../../header_eventos.php';
    ?>
    <div class="div_principal">
        <?php require_once '../../Menus/nav_bar_evento.php' ?>
        <div class="text-right mx-auto" style="margin: 20px">
            <a href="../Cadastros/cadastra_atividade.php" class="btn btn-primary btn-lg text-right"> Cadastrar Atividade </a>
        </div>
        <?php
        require_once '../../../Controls/Listar/lista_atividades.php'; 
        require_once '../../footer.php';
        ?>
    </body>
    </html>