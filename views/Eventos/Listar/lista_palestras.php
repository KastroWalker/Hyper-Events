<?php
    session_start();
    $id = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Visualizar palestras cadastradas na atividade"/>
    <meta name="keywords" content="Visualizar, Palestras, Evento, Detalhes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/> 

    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap-theme.css">
    <link rel="icon" href="../img/icon.png" type="image/x-icon"/>
    
    <title>Atividades do Evento - Hyper Events</title>
</head>
<body>

    <?php 
        require_once 'header.php';
    ?>
    <div class="text-right mx-auto" style="margin: 20px">
        <a href="atividades.php?id=<?php echo $id ?>" class="btn btn-info btn-lg text-right"> Voltar </a>
        <a href="cadastra_atividade.php?tipo=palestra&id=<?php echo $id ?>" class="btn btn-info btn-lg text-right"> Cadastrar Palestra </a>
    </div>
    <?php
        require_once '../Controls/lista_palestras.php'; 
        require_once 'footer.php';
    ?>
</body>
</html>