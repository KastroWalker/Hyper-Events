<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <?php
            session_start();
            include_once 'vizualizacoes/SEO.php';
        ?>
        <title>Document</title>
    </head>
    <body>
        <?php 
            require_once 'vizualizacoes/header.php'; 
        ?>
        <main>
            <link rel="stylesheet" type="text/css" href="vizualizacoes/CSS/style_padrao.css">
            <link rel="stylesheet" type="text/css" href="vizualizacoes/CSS/style_index.css">
            <form method="POST" action="Negocios/login.php" name="form_login">
                <table id="table_login">
                    <tr><td id="titulo"><strong>LOGIN</strong><td></tr>
                    <tr><td id="icon"><img src="https://img.icons8.com/ios/100/000000/gender-neutral-user-filled.png" width="150px" alt="icone_login"></td></tr>
                    <tr>
                        <td>
                            <?php
                                if(isset($_SESSION['nao_autenticado'])):
                             ?>
                            <div id="div_erro">
                                Usuário ou senha incorreta!
                            </div>
                            <?php
                                endif;
                                unset($_SESSION['nao_autenticado']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td id="label_user"><label>Nome do Usário</label></td>
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
                            <button type="submit" id="btn_entrar">Entrar</button>
                            <button id="btn_cadastrar" onclick="cadastrar();">Cadastrar-se</button>
                        </td>
                    </tr>
                </table>
            </form>
            <section id="Manual">
                <h2>Está com dificuldade?</h2>
                <a href="manual.html">Acesse aqui o manual</a>
            </section>
            <hr/>
            <script type="text/javascript">
            function cadastrar() {
                window.location.href = 'Telas/cadastro.php';
            }
            </script>
            <?php 
                require_once 'vizualizacoes/footer.php';
            ?>
        </main>
    </body>
</html>