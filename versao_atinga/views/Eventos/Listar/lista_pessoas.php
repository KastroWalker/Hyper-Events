<?php
    session_start();
    $id = $_SESSION['id_evento'];
    include '../../../Controls/conexao.php';
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

    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="icon" type="image/x-icon" href="../../../img/icon.png">

    <title>Lista Pessoas - HyperEvents</title>
</head>
<body>
    <?php
        require_once '../../header_eventos.php';
        require_once '../../Menus/nav_bar_evento.php';
    ?>
    <main>
        <h2 align="center">Pessoas</h2>
        <div class="div_principal">
            <div class="text-right mx-auto" style="margin: 20px">
                <a href="../../../Controls/Listar/frequencias/lista_inscritos_evento.php" class="btn btn-primary btn-lg text-right" target="_blank"> Gerar Lista de inscritos </a>
            </div>
            <table class="table table-condensed table-striped table-bordered table-hover">
                <th>#</th>
                <th>Nº Matricula</th>
                <th>Nome</th>
                <?php include '../../../Controls/Listar/listar_pessoas.php' ?>
            </table>
        </div>
    </main>
    <?php
        require_once '../../footer.php';
    ?>
</body>
</html>