<?php 
	session_start();
	include_once '../Controls/verifica_login.php';

	$tipo = $_REQUEST['tipo'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Victor Castro">
        <link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">
        <style type="text/css">
            header, footer, #Manual {
                text-align: center;
            }
        </style>
        <script src="../JS/valida_cadastro_evento.js"></script>
        <title>Cadastrar Evento - Hyper-Events</title>
    </head>
    <body>
    	<div class="container">
        <?php 
            require_once 'header.php';

            if ($tipo == 'palestra') {
				require_once 'cadastra_palesta.php';
			} else if ($tipo == 'minicurso') {
				require_once 'cadastra_minicurso.html';
			} else if ($tipo == 'oficina') {
				require_once 'cadastra_oficina.html';
			}
        ?>
        <input type="submit" name="btn_enviar" id="btn_enviar" value="Cadastrar" class="btn btn-primary">
        <input type="reset" name="btn_limpar" id="btn_limpar" value="Limpar" class="btn btn-secondary">
        <a href="atividades.php" id="btn_voltar" name="btn_voltar" class="btn btn-info">Voltar</a>
        </form>
        <?php 
        	# Importa o rodape padrão
            require_once 'footer.php';
        ?>
	</div>
    </body>
</html>