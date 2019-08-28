<?php
	session_start();
	$id = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Atividades do Evento - Hyper Events</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css">
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
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