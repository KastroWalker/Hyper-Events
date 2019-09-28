<?php
	include '../../Controls/conexao.php';
	session_start();
	$id_atividade = $_REQUEST['id'];
	$_SESSION['id_atividade'] = $id_atividade;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hyper Events - Acompanhar detalhes da atividade"/>
    <meta name="keywords" content="Eventos Acadêmicos, Escola"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Victor Castro"/>

    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/bootstrap/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/style_padrao.css">
    <link rel="icon" type="image/x-icon" href="../../img/icon.png">
    
    <title>Informações do Evento - HyperEvents</title>
    
    <style type="text/css">
    .div_principal {
        width: 80%;
        margin: auto; 
    }
    </style>
</head>
<body>
	<?php
		include '../header_cadastro.php';
		include '../../Controls/Listar/Informacoes/informacoes_atividade.php';
		include '../footer.php';
	?>
</body>
</html>