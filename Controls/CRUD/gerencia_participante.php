<?php
    session_start();
    include "../conexao.php";
    $acao = $_REQUEST['acao'];

    $tipo_user = $_POST['tipo_user'];
    $senha = $_POST['campo_senha'];
    $nome = $_POST['campo_nome'];
    $data_nasc = $_POST['campo_data_nasc'];
    $email = $_POST['campo_email'];
    $telefone = $_POST['campo_telefone'];
    $cpf = $_POST['campo_cpf'];
    $sexo = $_POST['campo_sexo'];
    $usuario = $_POST['campo_user'];

    $sql = "SELECT COUNT(*) AS total FROM usuario WHERE usuario = $usuario;";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);

    print_r($row);

?>