<?php
    //Iniciando a sessão
    session_start();
    include 'conexao.php';

    
    if (empty($_POST['usuario']) or empty($_POST['senha'])) {
        header("Location: ../View/login.php");
        exit;
    }
    
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    $sql = "SELECT usuario FROM usuario WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";

    $result = mysqli_query($conexao, $sql);
    
    $row = mysqli_num_rows($result);

    if ($row == 1) {
        header("Location: ../index.php");
        exit;
    } else {
        $_SESSION['nao_autenticado'] = true;
        header("Location: ../View/login.php");
        exit;
    }
?>