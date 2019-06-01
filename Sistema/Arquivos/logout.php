<?php
    /*
    Realizando a saida do usuário do sistema
    Criado por: Victor Castro
    */
    session_start();
    session_destroy();
    header('Location: ../index.php');
?>