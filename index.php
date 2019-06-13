<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <?php
            session_start();
            include_once 'views/SEO.php';
            #echo time();;
        ?>
        <script type="text/javascript">
            function cadastrar() {
                window.location.href = 'views/cadastro.php';
            }
        </script>
        <link rel="stylesheet" type="text/css" href="CSS/style_index.css">
        <title>Document</title>
    </head>
    <body>
        <?php 
            require_once 'views/header.php'; 
        ?>
        <main>
            <form method="POST" action="Controls/login.php" name="form_login" class="form-group">
                <table id="table_login">
                    <tr><td id="titulo"><strong>LOGIN</strong><td></tr>
                    <tr><td id="icon"><img src="https://img.icons8.com/ios/100/000000/gender-neutral-user-filled.png" width="150px" alt="icone_login"></td></tr>
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
                            <input type="password" name="senha" id="field_pass" required><br/>
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