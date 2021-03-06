<?php
#Iniciando as sessões
session_start();
#echo time();;
?>
<!-- Tela de Login da Hyper Events -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hyper Events - Login" />
    <meta name="keywords" content="Login, Entrar" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Victor Castro" />

    <link rel="canonical" href="https://localhost:8000/home/" />
    <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css" />
    <link rel="icon" href="../img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../CSS/style_index.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css" />

    <script src="../JS/verSenha.js"></script>
    <script>
        function cadastrar() {
            /**
             * Função para abrir a tela de cadastro
             */
            window.location.href = 'Cadastros/cadastro.php';
        }
    </script>
    <title>Login - HyperEvents</title>
</head>

<body>
    <header>
        <h1 style="height: 100px"><img src="../img/logo.png" alt="logo" style="height: 125px;">Sistema de Eventos Academicos</h1>
        <hr />
        <script src="../JS/jquery.js"></script>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php"><img src="../img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="Hyper"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Eventos/Listar/listar_eventos_user.php">Eventos</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <form method="POST" action="../Controls/login.php" name="form_login" class="form-group">
            <table id="table_login">
                <tr id="titulo">
                    <td><strong>LOGIN</strong></td>
                </tr>
                <tr>
                    <td id="icon">
                        <img src="https://img.icons8.com/ios/100/000000/gender-neutral-user-filled.png" alt="icone_login" id="icone_img" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        # Verifica se sessão de usuario cadastrado está preencida
                        if (isset($_SESSION['nao_autenticado'])) :
                            # Exibe a mensagem pro usuário
                            ?>
                            <div id="div_erro" class="alert alert-danger" role="alert">
                                Usuário ou senha incorreta!
                            </div>
                        <?php
                        endif;
                        # Encerra a sessão de usuario cadastrado
                        unset($_SESSION['nao_autenticado']);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td id="label_user"><label>Nome do Usuário</label></td>
                </tr>
                <tr>
                    <td id="user">
                        <input type="text" name="usuario" id="field_user" required />
                    </td>
                </tr>
                <tr>
                    <td id="label_pass"><label>Senha:</label></td>
                </tr>
                <tr>
                    <td id="pass">
                        <input type="password" name="senha" id="field_pass" required />
                        <button type="button" onclick="verSenha();" id="ver_senha"><img src="../img/icons/baseline-visibility-24px.svg" width="25" id="btn-ver_senha" alt="icone_ver_senha"></button>
                    </td>
                </tr>
                <tr>
                    <td id="bnts">
                        <button type="submit" id="btn_entrar" class="btn btn-success">Entrar</button>
                        <a href="Cadastros/cadastro.php"><button class="btn btn-primary" type="button">Cadastrar-se</button></a>
                        <a href="../Controls/logout.php" class="btn btn-danger">Sair</a>
                    </td>
                </tr>
            </table>
        </form>
        <section id="Manual">
            <h2>Está com dificuldade?</h2>
            <a href="manual.html">Acesse aqui o manual</a>
        </section>
        <hr />
    </main>
    <footer>
        <h2>Direitos</h2>
        <p>2019 &copy; Copyright - Todos os direitos reservados | Criado por Descompila Compilando.</p>
    </footer>
</body>

</html>