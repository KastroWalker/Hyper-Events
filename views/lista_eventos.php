<!-- 
Tela do organizador 
Criado por: Victor Castro
-->

<?php
    session_start();
    if(isset($_SESSION['id'])){
    include '../Controls/verifica_login.php';
    $site = ' ';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
        <style type="text/css">
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <title>Eventos - Hyper Events</title>
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
    </head>
    <body>
        <?php 
            require_once 'header.php';
            require_once 'nav_bar.php';
        ?>
        <div class="text-right mx-auto" style="margin: 20px">
            <a href="cadastro_de_evento.php" class="btn btn-primary btn-lg text-right"> Cadastrar Evento </a>
        </div>
        <?php
            require_once '../Controls/lista_eventos.php';
            require_once 'footer.php';
        ?>    
    </body>
</html>

<?php

    }else{
        header('Location: ../index.php');
    }
?>