<?php 
	session_start();

	$tipo = $_REQUEST['tipo'];
    $evento_id = $_REQUEST['id'];
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
				require_once 'cadastra_palestra.php';
			} else if ($tipo == 'minicurso') {
				require_once 'cadastra_minicurso.php?tipo=minicurso';
			}
        ?>
        <input type="submit" name="btn_enviar" id="btn_enviar" value="Cadastrar" class="btn btn-primary">
        <input type="reset" name="btn_limpar" id="btn_limpar" value="Limpar" class="btn btn-secondary">
        <a href="lista_atividades.php?id=<?php echo $evento_id?>&tipo=<?php echo $tipo?>" id="btn_voltar" name="btn_voltar" class="btn btn-info">Voltar</a>
        </form>
        <?php 
        	# Importa o rodape padrão
            require_once 'footer.php';
        ?>
	</div>
    </body>
</html>