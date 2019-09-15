<?php
	require_once '../../../Controls/conexao.php';	
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
		require_once '../../../Controls/Listar/lista_atividades.php'; 
		require_once '../../footer.php';
	?>
</body>
</html>