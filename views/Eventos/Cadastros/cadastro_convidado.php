<?php
include_once "../../../Controls/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Sistema de Eventos Acadêmicos"/>
    <meta name="keywords" content="Eventos Acadêmicos, Escola,"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/> 

    <link rel="canonical" href="https://localhost:8000/home/" />
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_cadastro.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="icon" href="../../../img/icon.png" type="image/x-icon" />
    
    <style>
        header,
        footer,
        #Manual {
            text-align: center;
        }
    </style>
    
    <script src="../../../JS/formata.js"></script>
    <script src="../../../JS/jquery.js"></script>
    
    <script>
        function logout() {
            /**
             * Função para sair da pagina de cadastro
             */
            window.location.href = '../Listar/lista_atividades.php';
        }

        function frm_number_only_exc() {
            /**
             * Função pada deixar digitar apenas numero
             */
            if (event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40 || event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || (event.keyCode < 106 && event.keyCode > 95)) {
                return true;
            } else {
                return false;
            }
        }

        $(document).ready(function() {

            $("input.frm_number_only").keydown(function(event) {

                if (frm_number_only_exc()) {

                } else {
                    if (event.keyCode < 48 || event.keyCode > 57) {
                        event.preventDefault();
                    }
                }
            });

        });
    </script>
    
    <title>Cadastro de convidado</title>
</head>
<body>
    <?php
    # Iniciando sessão 
    session_start();
    $id = $_SESSION['id'];
    echo "$id";
    ?>
    <header>
        <h1 style="height: 100px"><img src="../../../img/logo.png" alt="logo" style="height: 125px;">Sistema de Eventos Academicos</h1>
        <hr />
        <script src="../../../JS/jquery.js"></script>
    </header>
    <section id="Cadastrar_Convidado" class="container">
        <form method="POST" action="../../../Controls/Cadastro/cadastrar_convidado.php" name="form_cadastro">
            <h2>Cadastro de convidado</h2>
            <div class="form-row">
                <div class="col-md-3">
                    <label for="nome" id="campo_nome">Nome:</label>
                    <input type="text" name="campo_nome" id="nome" class="form-control" placeholder="Digite o nome do convidado..." required>
                </div>
                <div class="col-md-3">
                    <label for="email" id="campo_email">E-mail:</label>
                    <input type="email" name="campo_email" id="email" class="form-control" placeholder="Digite o e-mail para contato" required>
                </div>
                <div class="col-md-3">
                    <label for="contato" id="campo_contato">Contato:</label>
                    <input type="tel" name="campo_telefone" id="telefone" onkeypress="formata_mascara(this, '## #####-####', event)" minlength="13" maxlength="13" class="frm_number_only form-control" placeholder="(xx) xxxxx-xxxx" required>
                </div>
                <div class="col-md-3">
                    <label for="tipo_conv">Tipo de Convidado:</label>
                    <select class="form-control" name="tipo_convidado" id="tipo_conv">
                        <?php
                        include "../../../Controls/Listar/listar_tipo_convidado.php";
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="descricao" id="campo_descricao">Descrição</label>
                <textarea name="campo_descricao" id="descricao" cols="30" rows="5" placeholder="Descrição..." class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn btn-primary">Limpar</button>
            <button onclick="logout();">Voltar</button>
        </form>
    </section>
    <section id="Manual">
        <h2>Está com dificuldade?</h2>
        <a href="manual.php">Acesse aqui o manual</a>
    </section>
    <hr />
    <footer>
        <script src="../../../JS/bootstrap/bootstrap.min.js"></script>
        <h2>Direitos</h2>
        <p>2019 &copy; Copyright - Todos os direitos reservados | Criado por Descompila Compilando.</p>
    </footer>
</body>

</html>