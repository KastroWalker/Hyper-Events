<?php
    /*
    Verifica se o usuário iniciou uma sessão
    Criado por: Victor Castro
    */
    if (!$_SESSION['usuario']) {
        header('Location: ../views/login.php');
        exit();
    }
?>