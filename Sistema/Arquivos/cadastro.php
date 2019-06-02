<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Hyper Events - Cadastro">
        <meta name="keywords" content="Eventos, Acadêmico, Escola, Cadastro, novo usuario">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="canonical" href="https://localhost:8000/home/">-->
        <link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css">
        <link rel="stylesheet" type="text/css" href="../CSS/style_cadastro.css">
        <script type="text/javascript" src="../JS/valida_dados.js"></script>
        <meta name="author" content="Victor Castro">
        <title>Cadastro - Hyper-Events</title>
    </head>
    <body>
        <header>
            <h1>Bem vindo ao Hyper Events</h1>
            <h2>Sistema de Eventos Academicos</h2><hr/>
        </header>
        <main>
            <section id="cadastro">
                <form method="POST" action="teste.php" name="form_cadastro" onsubmit="return valida_dados();">
                    <h2 id="titulo">Cadastro no sistema</h2>
                    <label id="campo_nome">Nome: *</label>
                    <input type="text" name="campo_nome" id="nome" required>
                   
                    <label for="data_nasc">Data de Nascimento: *</label>
                    <input type="date" name="campo_data_nasc" id="data_nasc" required>
                   
                    <label id="label_sexo">Sexo: *</label>
                    <input type="radio" name="campo_sexo" id="sexo_masc" value="M"><x>Masculino</x>
                    <input type="radio" name="campo_sexo" id="sexo_femi" value="F"><x>Feminino</x>
                   
                    <label for="campo_cpf">CPF:*</label>
                    <input type="text" name="campo_cpf" id="cpf" required>
                   
                    <label for="campo_email">E-mail: *</label>
                    <input type="email" name="campo_email" id="email" required><label for="campo_conf_email">Confirmar E-mail: *</label>
                    <input type="email" name="campo_conf_email" id="conf_email" required>
                   
                    <label for="campo_user">Usuário: *</label>
                    <input type="text" name="campo_user" id="user" required>
                   
                    <label for="campo_senha">Senha: *</label>
                    <input type="text" name="campo_senha" id="senha" required>                
                   
                    <label for="campo_conf_senha">Confirmar Senha: *</label>
                    <input type="text" name="campo_conf_senha" id="conf_senha" required>
                    <br/>
                    <input type="submit" value="Cadastar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                    <a href="logout.php" id="sair"><button class="btn">Sair</button></a>
                </form>
                <p><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
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