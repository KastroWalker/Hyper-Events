<?php
    /* 
    Conectando com o Banco de Dados
    Criador por: Victor Castro  
    */
    define('HOST', 'localhost:3306');
    define('USER', 'matue');
    define('SENHA', 'banco');
    define('BD', 'HyperEvents');

    $conexao = mysqli_connect(HOST, USER, SENHA, BD) or die ('Não foi possivel conectar');
?>