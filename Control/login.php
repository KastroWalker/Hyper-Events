<?php
    //Iniciando a sessão
    session_start();
    include '../bd/conexao.php';

    
    if (empty($_POST['usuario']) or empty($_POST['senha'])) {
        header("Location: ../View/login.php");
        exit;
    }
    
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    echo $usuario . "<br>" . $senha;

    $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = md5('$senha')";

    $result = mysqli_query($conexao, $sql);
    $tlb = mysqli_fetch_array($result);
    $user_id = $tlb['user_id'];
    $row = mysqli_num_rows($result);

    if ($row == 1) {
        $_SESSION['user_id'] = $user_id;
        header("Location: ../index.php");
        exit;
    } else {
        $_SESSION['nao_autenticado'] = true;
        header("Location: ../View/login.php");
        exit;
    }

    $conexao->close();
?>