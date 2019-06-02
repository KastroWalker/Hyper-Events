<!-- 
Tela de Login 
Criado por: Victor Castro
-->

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Hyper Events - Sistema de Eventos Acadêmicos">
        <!--meta http-equiv="refresh" content="1"-->
        <meta name="keywords" content="Eventos, Acadêmico, Escola">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="canonical" href="https://localhost:8000/home/">-->
        <link rel="stylesheet" type="text/css" href="CSS/style_padrao.css">
        <link rel="stylesheet" type="text/css" href="CSS/style_index.css">
        <link rel="stylesheet" type="text/css" href="">
        <script type="text/javascript">
            function cadastrar() {
                window.location.href = 'Arquivos/cadastro.php';
            }
        </script>
        <meta name="author" content="Victor Castro">
        <title>Login - Hyper-Events</title>
    </head>
    <body>
        <header>
            <h1 class="titulo">Bem vindo ao Hyper Events</h1>
            <h2 class="titulo">Sistema de Eventos Academicos</h2><hr/>
        </header>
        <main>
            <form method="POST" action="Arquivos/login.php" name="form_login">
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
        </main>
        <footer>
            <h2>Direitos</h2>
            <p>2019 &copy; Copyright - Todos os direitos reservados | Criado por Descompila Compilando.</p>
        </footer>
    </body>
</html>