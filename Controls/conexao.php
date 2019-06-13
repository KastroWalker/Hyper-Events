<?php
    /* 
    Conectando com o Banco de Dados
    Criador por: Victor Castro  
    */
<<<<<<< HEAD
    define('HOST', 'localhost');
    define('USER', 'matue');
    define('SENHA', 'banco');
    define('BD', 'HyperEvents');

    $conexao = mysqli_connect(HOST, USER, SENHA, BD) or die ('Não foi possivel conectar');
=======
    $conexao = mysqli_connect('localhost', 'root', 'Suc0del@ranjaasd', 'HyperEvents') or die ('Não foi possivel conectar');
>>>>>>> 43eac417d86a083128ba00c1eec63dc3da873f0e
?>