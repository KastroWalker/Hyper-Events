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
                <h2>Cadastro no sistema</h2>
                <form method="POST" action="cadastrar.php">
                    <table id="form_dados_pessoais">
                        <tr>
                            <td colspan="2" class="titulo"><h3>Dados Pessoais</h3></td>
                        </tr>
                        <tr><td><br/></td></tr>
                        <tr>
                            <td class="label"><label for="nome">Nome: *</label></td>
                            <td><input type="text" name="nome" id="nome" required></td>
                        </tr>
                        <tr>
                            <td class="label"><label for="data_nasc">Data de Nascimento: *</label></td>
                            <td><input type="date" name="data_nasc" id="data_nasc" required></td>
                        </tr>
                        <tr>
                            <td class="label"><label>Sexo: *</label></td>
                            <td> 
                                <input type="radio" name="sexo" id="sexo_masc" value="M">Masculino
                                <input type="radio" name="sexo" id="sexo_femi" value="F">Feminino<br/>
                            </td>
                        </tr>
                        <tr>
                            <td class="label"><label for="cpf">CPF:*</label></td>
                            <td><input type="text" name="cpf" id="cpf" required></td>
                        </tr>
                    </table>
                    <table id="form_dados_da_conta">
                        <tr>
                            <td colspan="2" class="titulo"><h3>Dados da conta</h3></td>
                        </tr>
                        <tr><td><br/></td></tr>
                        <tr>
                            <td class="label"><label for="email">E-mail: *</label></td>
                            <td><input type="email" name="email" id="email" required></td>
                        </tr>
                        <tr>
                            <td class="label"><label for="conf_email">Confirmar E-mail: *</label></td>
                            <td><input type="email" name="conf_email" id="conf_email" required></td>
                        </tr>
                        <tr>
                            <td class="label"><label for="user">Usuário: *</label></td>
                            <td><input type="text" name="user" id="user" required></td>
                        </tr>
                        <tr>
                            <td class="label"><label for="senha">Senha: *</label></td>
                            <td><input type="text" name="senha" id="senha" required></td>
                        </tr>
                        <tr>
                            <td class="label"><label for="conf_senha">Confirmar Senha: *</label></td>
                            <td><input type="text" name="conf_senha" id="conf_senha" required></td>
                        </tr>
                    </table>
                    <button type="submit">Cadastrar</button>
                    <button type="reset">Limpar</button>
                    <p><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
                </form>
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