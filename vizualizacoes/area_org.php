<!-- 
Tela do organizador 
Criado por: Victor Castro
-->

<?php
    session_start();
    include '../Negocios/verifica_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php 
		require_once 'SEO.php';
	?>
</head>
<body>
	<?php 
		require_once 'header.php';
	?>
<h2>Olá organizador, <?php echo $_SESSION['usuario']; ?></h2>
<a href="../Negocios/logout.php"><button>Sair</button></a>
<a href="cadastro_de_evento.php"><button>Cadastrar Evento</button></a>
<a href="eventos.php"><button>Ver meus Eventos</button></a>
	<?php 
		require_once 'footer.php';
	?>
</body>
</html>
