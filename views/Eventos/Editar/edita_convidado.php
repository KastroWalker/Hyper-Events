<?php 
    include '../../../Controls/conexao.php';
    session_start();
    $id_convidado = $_SESSION['convidado_id'];

    $sql = "select * from convidado where idConvidado = $id_convidado";

    $result = mysqli_query($conexao, $sql);

    if($row = mysqli_fetch_array($result)){
        $id_convidado = $row['idConvidado'];
        $tipo_convidado = $row['idTipoConvidado'];
        $evento_id = $row['evento_id'];
        $nome_convidado = $row['nome_convidado'];
        $descricao = $row['descricao'];
        $email = $row['email'];
        $contato = $row['contato'];

        echo mysqli_error($conexao);
    } else {
        echo "Registro não encontrado".mysqli_error($conexao);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="robots" content="index, follow"/>
        <meta name="description" content="Hyper Events - Pode Editar o convidado"/>
        <meta name="keywords" content="Eventos Acadêmicos, Escola"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="author" content="Victor Castro"/>

        <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
        <link rel="icon" type="image/x-icon" href="../../../img/icon.png">
        
        <script src="../../../JS/valida_cadastro_evento.js"></script>

        <title>Edita Convidado - HyperEvents</title>

        <script>
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
    </head>
    <body>
        <?php
            require_once '../../header_eventos.php';
        ?>
        <main class="container">
            <?php
                # Verifica se o convidado foi cadastrado com sucesso
                if (isset($_SESSION['convidado_cadastrado'])) {
                    # Mostra a mensagem pro usuário
                    ?>
                    <div class="alert alert-success text-center">
                        Convidado Cadastrado com Sucesso!<br />
                        Clique <a href="../Listar/lista_convidados.php"><strong>aqui</strong></a> para ver os convidados;
                    </div>
                <?php
                }
                # Encerra a sessão de convidado cadastrado
                unset($_SESSION['convidado_cadastrado']);
                # Verifica se o convidado ja esta cadastrado
                if (isset($_SESSION['convidado_ja_cadastrado'])) {
                    # Mostra a mensagem pro usuário
                    ?>
                    <div class="alert alert-danger text-center">
                        Convidado já cadastrado!
                    </div>
                <?php
                }
                # Encerra a sessão de convidado ja cadastrado
                unset($_SESSION['convidado_ja_cadastrado']);
                # Verfica se deu algum erro na hora de cadastrar o convidado
                if (isset($_SESSION['convidado_nao_cadastrado'])) {
                    # Mostra a mensagem pro usuário
                    ?>
                    <div class="alert alert-danger text-center">
                        Não foi possivel cadastrar o convidados!
                    </div>
                <?php
                }
                # Encerra a sessão de erro ao cadastrar
                unset($_SESSION['convidado_nao_cadastrado']);
            ?>

            <form method="POST" action="../../../Controls/CRUD/gerencia_convidado.php?acao=cadastrar" name="form_cadastro">
                <h2>Cadastro de convidado</h2>
                <div class="form-row">
                    <div class="col-md-3">
                        <label for="nome" id="campo_nome">Nome:</label>
                        <input type="text" name="campo_nome" id="nome" class="form-control" placeholder="Digite o nome do convidado..." required value=<?php echo $nome_convidado; ?>>
                    </div>
                    <div class="col-md-3">
                        <label for="email" id="campo_email">E-mail:</label>
                        <input type="email" name="campo_email" id="email" class="form-control" placeholder="Digite o e-mail para contato" required value=<?php echo $email; ?>>
                    </div>
                    <div class="col-md-3">
                        <label for="telefone" id="campo_contato">Contato:</label>
                        <input type="tel" name="campo_telefone" id="telefone" onkeypress="formata_mascara(this, '## #####-####', event)" minlength="13" maxlength="13" class="frm_number_only form-control" placeholder="(xx) xxxxx-xxxx" required value=<?php echo $contato; ?>>
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
                    <textarea name="campo_descricao" id="descricao" cols="30" rows="5" placeholder="Descrição..." class="form-control" required><?php echo $nome_convidado; ?></textarea>
                </div>
                <button type="submit" class="btn btn-success">Editar</button>
                <button type="reset" class="btn btn-primary">Limpar</button>
                <a class="btn btn-info" href="../informacoes_convidado.php">Voltar</a>
            </form>
        </main>
        <?php 
            # Importa o rodape padrão
            require_once '../../footer.php';
        ?>
    </body>
</html>