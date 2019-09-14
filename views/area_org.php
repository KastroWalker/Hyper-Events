<!-- 
Tela do organizador 
Criado por: Victor Castro
-->

<?php
session_start();
if(isset($_SESSION['id'])){
    $site = ' ';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <meta name="description" content="Organizador pode gerenciar seus eventos">
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
        <link rel="icon" href="../img/icon.png" type="image/x-icon"/>
        <style>
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <style>
            .div_principal {
                width: 80%;
                margin: auto; 
            }
        </style>
        <title>Home - Hyper Events</title>
    </head>
    <body>
        <?php 
        require_once 'header.php';
        require_once 'Menus/nav_bar.php';
        ?>
        <div class="div_principal">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni reprehenderit quae sit quidem, delectus. Et laboriosam quia cumque, animi rerum! Eveniet provident eius, numquam, iure sit quis laboriosam voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni reprehenderit quae sit quidem, delectus. Et laboriosam quia cumque, animi rerum! Eveniet provident eius, numquam, iure sit quis laboriosam voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni reprehenderit quae sit quidem, delectus. Et laboriosam quia cumque, animi rerum! Eveniet provident eius, numquam, iure sit quis laboriosam voluptatibus?
        </div>
        <?php
        require_once 'footer.php';
        ?>    
    </body>
    </html>

    <?php
}else{
    header('Location: ../index.php');
}
?>