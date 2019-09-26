<?php
session_start();
if(isset($_SESSION['id'])){
$site = ' ';
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
    
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap-theme.css">
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
    <footer>
        <script src="../JS/bootstrap/bootstrap.min.js"></script>
        <h2>Direitos</h2>
        <p>2019 &copy; Copyright - Todos os direitos reservados | Criado por Descompila Compilando.</p>
    </footer>
</body>
</html>

<?php
    }else{
    header('Location: ../index.php');
    }
?>