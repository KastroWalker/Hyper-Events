<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de usuário - Hyper Events</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style_cadastro.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
        <style type="text/css">
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
        <script type="text/javascript" src="../JS/formata.js"></script>
        <script type="text/javascript" src="../JS/valida_dados.js"></script>
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
    </head>
    <body>
        <?php
        session_start();

        require_once 'header.php';
        #onsubmit="return valida_dados();"
        ?>
        <style type="text/css">
            .teste{
                color: pink;
            }
        </style>
        <main>
            <section id="cadastro">
                <form method="POST" action="../Controls/cadastrar_organizador.php" name="form_cadastro">
                    <h2>Cadastro de Usuário</h2>
                    <div class="form-row">
                        <div class="col-md-8">
                            <label for="nome" id="campo_nome">Nome: *</label>
                            <input type="text" name="campo_nome" id="nome" class="form-control" placeholder="Digite seu nome..." required>
                            <div class="invalid-feedback">Nome inválido!</div>
                        </div>
                        <div class="col-md-4">
                            <label for="data_nasc">Data de Nascimento: *</label>
                            <input type="date" name="campo_data_nasc" id="data_nasc" class="form-control" required>
                            <div class="invalid-feedback">Data inválida!</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="campo_email">E-mail: *</label>
                            <input type="email" name="campo_email" id="email" class="form-control" placeholder="Ex: email@hospedagem.com" required>
                            <div class="invalid-feedback">E-mail inválido!</div>
                        </div>
                        <div class="col-md-6">
                            <label for="campo_conf_email">Confirmar E-mail: *</label>
                            <input type="email" name="campo_conf_email" id="conf_email"class="form-control" placeholder="Confirme o seu e-mail" required>
                            <div class="invalid-feedback">O e-mail não correpondem!</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <label for="campo_cpf">CPF:*</label>
                            <input type="text" name="campo_cpf" id="cpf" required onkeyup="somenteNumeros(this);" onkeypress="formata_mascara(this, '###.###.###-##', event)" maxlength="14" onpaste="return false;" class="form-control" placeholder="xxx.xxx.xxx-xx">
                            <div class="invalid-feedback">CPF inválido!</div>
                        </div>
                        <div class="col-md-3">
                            <label for="tipo_user">Sexo: *</label>
                            <select class="form-control" id="tipo_user" name="tipo_user" class="form-control">
                              <option value="padrao" selected>Sexo...</option>
                              <option value="masculino">Masculino</option>
                              <option value="feminino">Feminino</option>
                            </select>
                            <div class="invalid-feedback">Escolha um valor!</div>
                        </div>
                        <div class="col-md-4">
                            <label for="campo_user">Usuário: *</label>
                            <input type="text" name="campo_user" id="user" class="form-control" placeholder="Nome de Usuário" required>
                            <div class="invalid-feedback">Usuário Inválido!</div>
                        </div>  
                        <div class="col-md-3">
                            <label for="tipo_user">Tipo de usuário: *</label>
                            <select class="form-control" id="tipo_user" name="tipo_user" class="form-control">
                              <option value="padrao" selected>Escolha o tipo de usuário</option>
                              <option>Participante</option>
                              <option>Organizador</option>
                            </select>
                            <div class="invalid-feedback">Escolha um valor!</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="campo_senha">Senha: *</label>
                            <input type="text" name="campo_senha" id="senha" class="form-control" placeholder="Digite sua senha" required>
                            <div class="invalid-feedback">Senha invalida!</div>
                        </div>
                        <div class="col-md-6">
                            <label for="campo_conf_senha">Confirmar Senha: *</label>
                            <input type="text" name="campo_conf_senha" id="conf_senha" class="form-control" placeholder="Confirme sua senha" required>
                            <div class="invalid-feedback">As senhas não correspondem!</div>
                        </div>
                    </div>
                    <p class="alert alert-warning" style="text-align: center;"><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                    <button class="btn btn-danger" onclick="logout();">Sair</button>    
                </form>
            </section>
            <script type="text/javascript">
            </script>     
        <?php
            require_once 'footer.php';
        ?>
    </body>
</html>