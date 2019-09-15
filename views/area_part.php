<!-- 
Tela do organizador 
Criado por: Victor Castro
-->

<?php
    session_start();
	$id = $_SESSION['id'];
    #echo "$id";
	/*<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
	<h2><a href="../Controls/logout.php">Sair</a></h2>*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="O participante pode ver os eventos disponíveis e se cadastrar no qual lhe agradar e estiver disponível">
	<title>Área do participante - Hyper Events</title>
	<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../CSS/style_padrao.css">
	<link rel="icon" href="../img/icon.png" type="image/x-icon"/>
	<style>
    .div_principal {
        width: 80%;
        margin: auto; 
    }
</style>

</head>
<body>
	<?php
		require_once 'header.php';
		require_once 'Menus/nav_bar_user.php';
		require_once '../Controls/Listar/lista_eventos_user.php';
		require_once 'footer.php';
	?>
</body>
</html>
