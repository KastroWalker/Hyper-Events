<?php
	$evento_id = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Atividades - Hyper Events</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css">
		<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
	</head>
	<body>
		<?php
			require_once 'header.php';
		?>
		<li>
			<ul><a href="lista_palestras.php?id=<?php echo $evento_id ?>">palestra</a></ul>
			<ul><a href="lista_atividades.php?tipo=minicurso">minicurso</a></ul>
		</li>
		<a href="lista_eventos.php?id=<?php echo $evento_id ?>" id="btn_voltar" name="btn_voltar" class="btn btn-info">Voltar</a>
		<?php
			require_once 'footer.php';
		?>
	</body>
</html>