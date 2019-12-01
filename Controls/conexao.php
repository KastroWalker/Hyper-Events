<?php
    /* 
    Conectando com o Banco de Dados
    Criador por: Victor Castro  
    */
    $HOST = 'localhost';
    $USER = 'root';
    $SENHA = '';
    $BD = 'HyperEvents';

    $conexao = mysqli_connect($HOST, $USER, $SENHA, $BD) or die ('Não foi possivel conectar');
?>