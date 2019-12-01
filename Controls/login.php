<?php
    /* 
    echo "Usuario: <strong>$user</strong><br/>";
    echo "Senha: <strong>$pass</strong><br/>";
    echo "$id<br/>";
    echo gettype($idtipo);
    echo "$idtipo";
    echo "$tipo_user";
    echo gettype($tipo_user);
    Realizando Login no sistema
    Criado pro Victor Castro
    */

    //Iniciando a sessão
    session_start();
    include 'conexao.php';

    //Verificando se o valor de usuário ou senha é vazio
    if (empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: ../views/login.php');
        exit();
    }

    //Guardando o valor do usuário e senha
    $user = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $pass = mysqli_real_escape_string($conexao, $_POST['senha']);
    
    $sql = "select user_id, usuario from usuario where usuario = '{$user}' and senha = md5('{$pass}');";

    $query_id = "select user_id from usuario where usuario = '{$user}';";
    $result = mysqli_query($conexao, $query_id);
    $row = mysqli_fetch_array($result);
    $id = $row['user_id'];

    $query_idtipo = "select idtipo_usuario from usuario where usuario = '{$user}';";
    $result = mysqli_query($conexao, $query_idtipo);
    $row = mysqli_fetch_array($result);
    $idtipo = $row['idtipo_usuario'];
    
    $query_tipo = "select nome from tipoUsuario where idtipo_usuario = '{$idtipo}';";
    $result = mysqli_query($conexao, $query_tipo);
    $row = mysqli_fetch_array($result);
    $tipo_user = $row['nome'];

    //Criando a pagina para destinar o usuário
    if($tipo_user == 'Organizador'){
        $page = 'Location: ../views/area_org.php';
    }else if($tipo_user == 'Participante'){
        $page = 'Location: ../views/area_part.php';
    }
    
    $result = mysqli_query($conexao, $sql);

    $row = mysqli_num_rows($result);

    echo $row;

    //Verificando se o usuário é um participante
    if($row == 1){
        $_SESSION['usuario'] = $user;
        $_SESSION['id'] = $id;
        header($page);
        exit();
    } else {
        //Retornado o usuário para a tela de login
        $_SESSION['nao_autenticado'] = true;
        header('Location: login.php');
        exit();
    }
?>