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
        <script type="text/javascript" src="../JS/formata.js"></script>
        <script type="text/javascript">
            function logout() {
                window.location.href = '../index.php';
            }
            function somenteNumeros(num) {
                var er = /[^0-9.-]/;
                er.lastIndex = 0;
                var campo = num;
                if (er.test(campo.value)) {
                    campo.value = "";
                }
            }
        </script>
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
                <form method="POST" action="cadastrar.php" name="form_cadastro" onsubmit="return valida_dados();">
                    <h2 id="titulo">Cadastro no sistema</h2>
                    <label id="campo_nome">Nome: *</label>
                    <input type="text" name="campo_nome" id="nome" required>
                    <div class="erro" id="nome_invalido">Nome inválido</div>

                    <label for="data_nasc">Data de Nascimento: *</label>
                    <input type="date" name="campo_data_nasc" id="data_nasc" required>
                   
                    <label id="label_sexo">Sexo: *</label>
                    <input type="radio" name="campo_sexo" id="sexo_masc" value="M"><x>Masculino</x>
                    <input type="radio" name="campo_sexo" id="sexo_femi" value="F"><x>Feminino</x>
                    <div class="erro" id="sexo_invalido">Selecione um valor</div>
                    
                    <label for="campo_cpf">CPF:*</label>
                    <input type="text" name="campo_cpf" id="cpf" required onkeyup="somenteNumeros(this);" onkeypress="formata_mascara(this, '###.###.###-##', event)" maxlength="14" onpaste="return false;">
                    <div class="erro" id="cpf_invalido">CPF inválido</div>
                   
                    <label for="campo_email">E-mail: *</label>
                    <input type="email" name="campo_email" id="email" required>
                    <div class="erro" id="email">E-mail inválido</div>

                    <label for="campo_conf_email">Confirmar E-mail: *</label>
                    <input type="email" name="campo_conf_email" id="conf_email" required>
                    <div class="erro" id="conf_email_invalido">O e-mail não correpondem</div>
                   
                    <label for="campo_user">Usuário: *</label>
                    <input type="text" name="campo_user" id="user" required>
                    <div class="erro" id="user_invalido">Usuário Inválido</div>

                    <label for="campo_senha">Senha: *</label>
                    <input type="text" name="campo_senha" id="senha" required>                
                    <div class="erro" id="senha_invalido">Senha invalida</div>

                    <label for="campo_conf_senha">Confirmar Senha: *</label>
                    <input type="text" name="campo_conf_senha" id="conf_senha" required>
                    <div class="erro" id="conf_senha_invalido">As senhas não correspondem</div>

                    <br/>
                    <button type="submit" class="btn">Cadastrar</button>
                    <button type="reset" class="btn">Limpar</button>
                    <button class="btn" onclick="logout();">Sair</button>
                
                    <br/>
                    <!--div id="user_cadastrado">
                        Usuário Criado com sucesso!<br/>
                        <a onclick="logout();" href="#">Clique <strong>aqui</strong> para fazer login</a>
                    </div >
                    <div id="erro_cadastro">
                        Usuário já cadastrado!
                    </div-->
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