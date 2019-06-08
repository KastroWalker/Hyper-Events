<?php
    $cpf = $_POST['campo_cpf'];
    echo "$cpf<br/>";
    $cpf = str_replace('.', '', $cpf);
    echo "$cpf<br/>";
    $cpf = str_replace('-', '', $cpf);
    echo "$cpf<br/>";
?>