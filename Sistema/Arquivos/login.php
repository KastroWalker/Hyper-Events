<?php
    session_start();
    include 'conexao.php';

    if (empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: ../index.php');
        exit();
    }

    $user = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $pass = mysqli_real_escape_string($conexao, $_POST['senha']);
    
    $query = "select participante_id, user from participante where user = '{$user}' and senha = md5('{$pass}')";

    $page = 'Location: area_user.php';
    
    
    /*  
    echo $query;
    exit();*/
    
    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);

    /*echo $row;*/

    if($row == 1){
        $_SESSION['usuario'] = $user;
        header($page);
        exit();
    }
    else {  
        $query = "select organizador_id, user from organizador where user = '{$user}' and senha = md5('{$pass}')";

        $page = 'Location: area_org.php';
        
        $result = mysqli_query($conexao, $query);

        $row = mysqli_num_rows($result);
        if ($row == 1) {
            $_SESSION['usuario'] = $user;
            header($page);
            exit();
        }
        else{
            header('Location: tela_login.php');
            exit();
        }
    } 

?>