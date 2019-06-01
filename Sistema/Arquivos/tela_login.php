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
        <link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css">
        <link rel="stylesheet" type="text/css" href="../CSS/style_login.css">
        <link rel="stylesheet" type="text/css" href="">
        <meta name="author" content="Victor Castro">
        <title>Login - Hyper-Events</title>
    </head>
    <body>
        <header>
            <h1 class="titulo">Bem vindo ao Hyper Events</h1>
            <h2 class="titulo">Sistema de Eventos Academicos</h2><hr/>
        </header>
        <main>
            <section id="login">
                <div id="form_login">
                    <h2>Login: </h2>
                    <form method="POST" action="login.php">
                        <input type="text" placeholder="Usuário" name="usuario"><br/>
                        <input type="password" placeholder="Senha" name="senha"><br/>
                        <input type="submit" value="Entrar" id="entrar"><br/>
                        <a href="cadastro.html" id="cadastrar"><strong>Cadastrar na Hyper Events</strong></a><br/>
                        <a href="logout.php" id="voltar">Voltar</a>
                    </form>
                </div>
            </section>
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