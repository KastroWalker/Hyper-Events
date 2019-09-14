<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<meta name="robots" content="index, follow"/>
	<meta name="description" content="Hyper Events - Sistema de Eventos Acadêmicos"/>
	<meta name="keywords" content="Eventos Acadêmicos, Escola,"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" href="img/icon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/CSS" href="CSS/style_padrao.css"/>
	<!--link rel="stylesheet" type="text/CSS" href="CSS/style_index.css"/-->
	<link rel="stylesheet" type="text/CSS" href="CSS/bootstrap/bootstrap.min.css"/>
	<title>Hyper Events</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php"><img src="img/icon.png" width="30" height="30" class="d-inline-block align-top" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="views/login.php">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="views/area_part.php">Eventos</a>
				</li>  
			</ul>
		</div>
		<form class="form-inline my-2 my-lg-0">
			<a href="Controls/logout.php" class="btn btn-danger">Sair</a>
		</form>
	</nav>
	<div style="width: 80%; margin: 15px auto;">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni reprehenderit quae sit quidem, delectus. Et laboriosam quia cumque, animi rerum! Eveniet provident eius, numquam, iure sit quis laboriosam voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni reprehenderit quae sit quidem, delectus. Et laboriosam quia cumque, animi rerum! Eveniet provident eius, numquam, iure sit quis laboriosam voluptatibus?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni reprehenderit quae sit quidem, delectus. Et laboriosam quia cumque, animi rerum! Eveniet provident eius, numquam, iure sit quis laboriosam voluptatibus?
	</div>
	<div class="rodape">
		<?php 
		require_once 'views/footer.php'
		 ?>
	</div>
</body>
</html>