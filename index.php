<?php
    session_start();
    #echo time();;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap/bootstrap.min.css">
        <link rel="icon" href="img/icon.png" type="image/x-icon"/>
        <!--link rel="shortcut icon" href="MeuIcone.ico" type="image/x-icon" /-->
        <style type="text/css">
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <script src="JS/verSenha.js"></script>
        <script type="text/javascript">
            function cadastrar() {
                window.location.href = 'views/cadastro.php';
            }
        </script>
        <link rel="stylesheet" type="text/css" href="CSS/style_index.css">
        <title>Login - HyperEvents</title>
    </head>
    <body>
        <header>
            <h1>Bem vindo ao Hyper Events</h1>
            <h2>Sistema de Eventos Academicos</h2><hr/>
        </header>
        <main>
            <form method="POST" action="Controls/login.php" name="form_login" class="form-group">
                <table id="table_login">
                    <tr id="titulo"><td><strong>LOGIN</strong></td></tr>
                    <tr>
                        <td id="icon">
                            <img src="https://img.icons8.com/ios/100/000000/gender-neutral-user-filled.png" width="150px" alt="icone_login">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                                if(isset($_SESSION['nao_autenticado'])):
                             ?>
                            <div id="div_erro" class="alert alert-danger" role="alert">
                                Usuário ou senha incorreta!
                            </div>
                            <?php
                                endif;
                                unset($_SESSION['nao_autenticado']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id="label_user"><label>Nome do Usuário</label></td>
                    </tr>
                    <tr>
                        <td id="user">
                            <input type="text" name="usuario" id="field_user" required style="text-align: none !important;"><br/>
                        </td>
                    </tr>
                    <tr>
                        <td id="label_pass"><label>Senha:</label></td>
                    </tr>
                    <tr>
                        <td id="pass">
                            <input style="margin-left: 8%; !important;" type="password" name="senha" id="field_pass" required>
                            <button type="button" onclick="verSenha();" id="ver_senha"><img src="img/icons/baseline-visibility-24px.svg" width="25" id="btn-ver_senha"></button>
                        </td>
                    </tr>
                    <tr>
                        <td id="bnts">
                            <button type="submit" id="btn_entrar" class="btn btn-success">Entrar</button>
                            <button id="btn_cadastrar" onclick="cadastrar();" class="btn btn-primary">Cadastrar-se</button>
                        </td>
                    </tr>
                </table>
            </form>
            <?php 
                require_once 'views/footer.php';
            ?>
        </main>
    </body>
</html>