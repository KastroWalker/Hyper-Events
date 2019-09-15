<?php
	include '../../../Controls/conexao.php';	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Atividades do Evento - Hyper Events</title>
	<link rel="stylesheet" type="text/css" href="../../../CSS/style_padrao.css">
	<link rel="stylesheet" type="text/css" href="../../../CSS/bootstrap/bootstrap.min.css">
	<link rel="icon" href="../img/icon.png" type="image/x-icon"/>
</head>
<body>

	<?php 
		require_once '../../header_eventos.php';
	?>
	<?php
		require_once '../../../Controls/Listar/lista_atividades.php'; 
		require_once '../../footer.php';
	?>
</body>
</html>