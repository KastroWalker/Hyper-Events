<?php
    /* 
    Realizando Login no sitema
    Criado pro Victor Castro
    */

    //Iniciando a sessão
    session_start();
    include 'conexao.php';

    //Verificando se o valor de usuário ou senha é vazio
    if (empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: ../index.php');
        exit();
    }

    //Guardando o valor do usuário e senha
    $user = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $pass = mysqli_real_escape_string($conexao, $_POST['senha']);
    
    //Criando a query para verificar o usuário na tabela participante
    $query = "select org_id, usuario from organizadores where usuario = '{$user}' and senha = md5('{$pass}')";
    $query_id = "select org_id from organizadores where usuario = '{$user}';";

    $result = mysqli_query($conexao, $query_id);
    
    $row = mysqli_fetch_array($result);
    $id = $row['org_id'];
    #echo "$id";
    
    #$row = mysqli_num_rows($result);

    //Criando a pagina para destinar o usuário
    $page = 'Location: ../views/area_org.php';
          
    /*echo $query;
    exit();*/
    $result = mysqli_query($conexao, $query);

    $row = mysqli_num_rows($result);

    #echo $row;

    //Verificando se o usuário é um participante
    if($row == 1){
        $_SESSION['usuario'] = $user;
        $_SESSION['id'] = $id;
        header($page);
        exit();
    }
    else {  
        //Criando a query para verificar o usuário na tabela organizador
        $query = "select part_id, usuario from participantes where usuario = '{$user}' and senha = md5('{$pass}')";

        //Criando a pagina para destinar o usuário
        $page = 'Location: ../views/area_part.php';
        
        $result = mysqli_query($conexao, $query);

        $row = mysqli_num_rows($result);

        //Verificando se o usuário é um organizador
        if ($row == 1) {
            $_SESSION['usuario'] = $user;
            header($page);
            exit();
        } else {
            //Retornado o usuário para a tela de login
            $_SESSION['nao_autenticado'] = true;
            header('Location: ../index.php');
            exit();
        }
    }

?>