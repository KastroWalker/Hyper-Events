<?php
include '../../Controls/funcoes.php';
include '../../Controls/conexao.php';
session_start();
$_SESSION['id_atividade'] = $_REQUEST['id'];
$evento_id = $_SESSION['id_evento'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hyper Events - Acompanhar detalhes da atividade" />
    <meta name="keywords" content="Eventos Acadêmicos, Escola" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Victor Castro" />

    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/style_padrao.css">
    <link rel="icon" type="image/x-icon" href="../../img/icon.png">

    <title>Informações do Evento - HyperEvents</title>
</head>

<body>
    <?php
    include '../header_cadastro.php';
    ?>
    <div class='div_principal'>
        <h2 align="center">Informações Atividade:</h2>
        <?php
        include '../../Controls/Listar/Informacoes/informacoes_atividade.php';
        ?>
        <a class="btn btn-info" href="Listar/lista_atividades.php?id=<?php echo $evento_id ?>">Voltar</a>
    </div>
    <?php
    include '../footer.php';
    ?>
</body>

</html>