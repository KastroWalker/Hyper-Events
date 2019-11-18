<?php
session_start();
#echo $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Organizador pode gerenciar seus eventos">
    <meta name="keywords" content="Eventos Acadêmicos, Escola,"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/>
    
    <link rel="stylesheet" type="text/css" href="../../lib/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../lib/css/style_padrao.css">
    <link rel="icon" href="../../img/logo.png" type="image/x-icon"/>
    
    <title>Home - Hyper Events</title>
</head>
<body>
    <?php 
        include 'header.php';
        include 'nav_bar.php';
    ?>
    <div class="div_principal">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni reprehenderit quae sit quidem, delectus. Et laboriosam quia cumque, animi rerum! Eveniet provident eius, numquam, iure sit quis laboriosam voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni reprehenderit quae sit quidem, delectus. Et laboriosam quia cumque, animi rerum! Eveniet provident eius, numquam, iure sit quis laboriosam voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni reprehenderit quae sit quidem, delectus. Et laboriosam quia cumque, animi rerum! Eveniet provident eius, numquam, iure sit quis laboriosam voluptatibus?
    </div>
    <?php 
        include '../footer.php';
    ?>
</body>
</html>