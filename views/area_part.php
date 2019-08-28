<!-- 
Tela do organizador 
Criado por: Victor Castro
-->

<?php
    session_start();
    include '../Controls/verifica_login.php';
	$id = $_SESSION['id'];
    #echo "$id";
	/*<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
	<h2><a href="../Controls/logout.php">Sair</a></h2>*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Area do participante - Hyper Events</title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css">
</head>
<body>
	<?php
		require_once 'header.php';
		require_once 'nav_bar_user.php';
		require_once '../Controls/lista_eventos_user.php';
		require_once 'footer.php';
	?>
</body>
</html>
