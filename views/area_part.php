<?php
    session_start();
    $id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - O participante pode ver os eventos disponíveis e se cadastrar no qual lhe agradar e estiver disponível">
    <meta name="keywords" content="Eventos Acadêmicos, Lista de Eventos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Kauan Portela"/> 

    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css">
    <link rel="icon" href="../img/icon.png" type="image/x-icon"/>
    
    <style>
    .div_principal {
        width: 80%;
        margin: auto; 
    }
    </style>

    <title>Área do participante - Hyper Events</title>
</head>
<body>
    <?php
        require_once 'header.php';
        require_once 'Menus/nav_bar_user.php';
        require_once '../Controls/Listar/lista_eventos_user_logado.php';
        require_once 'footer.php';
    ?>
</body>
</html>
