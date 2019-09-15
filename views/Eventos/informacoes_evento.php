<?php
	$id_evento = $_REQUEST['id'];
	#echo "$id_evento";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="../../CSS/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/style_padrao.css">
	<title>Informações do Evento - HyperEvents</title>
</head>
<body>
	<?php
		require_once '../header_cadastro.php';
	?>
	<style type="text/css">
    .div_principal {
        width: 80%;
        margin: auto; 
    }
	</style>

	<div class="div_principal">
	    <nav class="navbar navbar-expand-lg navbar-light bg-light">
	        <a class="navbar-brand" href="area_org.php">Hyper Events</a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <ul class="navbar-nav mr-auto">
	                <li class="nav-item active">
	                    <a class="nav-link" href="area_org.php">Home<span class="sr-only">(current)</span></a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="Listar/lista_atividades.php">Atividades</a>
	                </li>  
	            </ul>
	        </div>
	        <form class="form-inline my-2 my-lg-0">
	            <a href="../Controls/logout.php" class="btn btn-danger">Sair</a>
	        </form>
	    </nav>
	    <main>
	<?php
		require_once '../footer.php';
	?>
</body>
</html>