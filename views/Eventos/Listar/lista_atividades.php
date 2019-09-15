<?php
require_once '../../../Controls/conexao.php';   
$id = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /--> 
    <title>Atividades do Evento - Hyper Events</title>
    <link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
    <link rel="icon" href="../img/icon.png" type="image/x-icon"/>
</head>
<body>

    <?php 
    require_once '../../header_eventos.php';
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="area_org.php">Hyper Events</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../informacoes_evento.php?id=<?php echo $id; ?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lista_atividades.php?id=<?php echo $id; ?>">Atividades</a>
                </li>  
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <a href="../Listar/lista_eventos.php" class="btn btn-danger">Voltar</a>
        </form>
    </nav>
    <?php
    require_once '../../../Controls/Listar/lista_atividades.php'; 
    require_once '../../footer.php';
    ?>
</body>
</html>