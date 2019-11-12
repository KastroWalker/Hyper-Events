<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow">
    <meta name="description" content="Hyper Events - Login">
    <meta name="keywords" content="Login, Entrar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Victor Castro"> 
    
    <link rel="canonical" href="https://localhost:8000/home/">
    <link rel="icon" href="../img/icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/css/style_padrao.css">
    <link rel="stylesheet" href="../lib/css/style_login.css">

    <title>Login - HyperEvents</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <main>
        <?php include 'menu.php'; ?>
        <div id="div_login">
            <div id="div_msg">
                <?php
                    if(isset($_SESSION['nao_autenticado'])){
                ?>
                    <div id="div_erro" class="alert alert-danger" role="alert">
                        Usuário ou senha incorreta!
                    </div>
                <?php
                    }
                    unset($_SESSION['nao_autenticado']);
                ?>
            </div>
            <div id="div_form">
                <form method="POST" action="../Control/login.php">
                    <h2>Login</h2>
                    <div class="form-group">
                        <label for="campo_user">Usuário</label>
                        <input type="text" id="campo_user" name="usuario" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label for="campo_pass">Senha</label>
                        <input type="password" id="campo_pass" name="senha" class="form-control" require>
                    </div>
                    <div id="div_btns">
                        <button type="submit" id="btn_entrar" class="btn btn-success">Entrar</button>
                        <button type="reset" id="btn_limpar" class="btn btn-danger">Limpar</button>
                        <button type="button" class="btn btn-primary btn-cadastrar">Cadastrar-se</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="../lib/js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $('.btn-cadastrar').on('click', function(){
                window.location.href = 'cadastro.php';
            });
        });
    </script>
</body>
</html>