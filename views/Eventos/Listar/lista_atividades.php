<?php
	session_start();
	$tipo = $_REQUEST['tipo'];
	$_SESSION['tipo'] = $tipo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Atividades do Evento - Hyper Events</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css">
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
	<link rel="icon" href="../img/icon.png" type="image/x-icon"/>
</head>
<body>

	<?php 
		require_once 'header.php';
	?>
	<div class="text-right mx-auto" style="margin: 20px">
        <a href="atividades.php" class="btn btn-info btn-lg text-right"> Voltar </a>
        <a href="cadastra_atividade.php?tipo=<?php echo $tipo ?>" class="btn btn-info btn-lg text-right"> Cadastrar <?php echo $tipo ?> </a>
    </div>
	<?php
		require_once '../Controls/lista_atividades.php'; 
		require_once 'footer.php';
	?>
</body>
</html>