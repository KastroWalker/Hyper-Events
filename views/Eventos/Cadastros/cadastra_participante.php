<?php
# Inicia a sessão
session_start();
# Importa a função para ver se o usuário esta logado
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hyper Events - Organizador pode cadastrar um novo participante para ele participar no evento" />
    <meta name="keywords" content="Cadastro, Usuário, Eventos" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Kauan Portela" />

    <link rel="canonical" href="https://localhost:8000/home/" />
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_cadastro.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon"/>

    <script src="../../../JS/formata.js"></script>
    <script src="../../../JS/jquery.js"></script>
    <script src="../../../JS/valida_dados_participante.js"></script>

</head>

<body>
    <?php
    include "../../header_eventos.php";
    ?>

    <section id="cadastro">
        <form action="../../../Controls/CRUD/gerencia_participante.php" name="form_cadastro" method="post" onsubmit="return valida_dados()">
            <h2>Cadastro de Usuário</h2>

            <input type="hidden" name="tipo_user">
            <input type="hidden" name="campo_senha" value="1234">

            <div class="form-row">
                <div class="col-md-8">
                    <label for="nome" id="campo_nome">Nome: *</label>
                    <input type="text" name="campo_nome" id="nome" class="form-control" placeholder="Digite seu nome..." required>
                    <div class="invalid-feedback">Nome inválido!</div>
                </div>
                <div class="col-md-4">
                    <label for="data_nasc">Data de Nascimento: *</label>
                    <input type="date" name="campo_data_nasc" id="data_nasc" class="form-control" required>
                    <div class="invalid-feedback" id="data_invalida">Data inválida!</div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="email">E-mail: *</label>
                    <input type="email" name="campo_email" id="email" class="form-control" placeholder="Ex: email@host.com" required>
                    <div class="invalid-feedback">E-mail inválido!</div>
                </div>
                <div class="col-md-6">
                    <label for="telefone">Tel. Contato: </label>
                    <input type="tel" name="campo_telefone" id="telefone" onkeypress="formata_mascara(this, '## #####-####', event)" minlength="13" maxlength="13" class="frm_number_only form-control" placeholder="(xx) xxxxx-xxxx" required>
                    <div class="invalid-feedback">Número invalido</div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <label for="cpf">CPF:*</label>
                    <input type="text" name="campo_cpf" id="cpf" required onkeypress="formata_mascara(this, '###.###.###-##', event)" minlength="14" maxlength="14" class="frm_number_only form-control" placeholder="xxx.xxx.xxx-xx">
                    <div class="invalid-feedback">CPF inválido!</div>
                </div>
                <div class="col-md-4">
                    <label for="campo_sexo">Sexo: *</label>
                    <select class="form-control" id="campo_sexo" name="campo_sexo">
                        <option value="padrao" selected>Sexo...</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                    <div class="invalid-feedback">Escolha um valor!</div>
                </div>
                <div class="col-md-4">
                    <label for="user">Usuário: *</label>
                    <input type="text" name="campo_user" id="user" class="form-control" placeholder="Nome de Usuário" required>
                    <div class="invalid-feedback">Usuário Inválido!</div>
                </div>
            </div>
            <p class="alert alert-warning" style="text-align: center;"><strong>Atenção: </strong>Todos os campos que possuem '*' são obrigatorios.</p>
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn btn-primary">Limpar</button>
            <button class="btn btn-danger" onclick="logout();">Sair</button>
        </form>
    </section>
</body>

</html>