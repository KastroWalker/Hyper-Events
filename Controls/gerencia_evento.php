<?php 
	session_start();

	include_once 'conexao.php';
	include_once '../Controls/verifica_login.php';

	#$acao = $_REQUEST['acao'];
	$titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
	$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
	$hora = mysqli_real_escape_string($conexao, trim($_POST['hora_inicio']));
	$data_inicio = mysqli_real_escape_string($conexao, trim($_POST['inicio']));
	$data_fim = mysqli_real_escape_string($conexao, trim($_POST['fim']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$site = mysqli_real_escape_string($conexao, trim($_POST['site']));
	$id = $_SESSION['id'];

	$sql = "select count(*) as total from eventos where titulo = '$titulo';";

	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);

	/*print_r($row);
	echo $row['total'];*/	

	if ($row['total'] >= 1) {
		#echo "Evento cadastrado".mysqli_error($conexao);
		$_SESSION['evento_ja_cadastrado'] = true;
		header('Location: ../views/cadastro_de_evento.php');
		exit();
	} else {
		$sql = "insert into eventos (org_id, titulo, descricao, hora_inicio, data_inicio, data_fim, email_contato, url_evento) values ('{$id}', '{$titulo}', '{$descricao}', '{$hora}', '{$data_inicio}', '{$data_fim}', '{$email}', '{$site}');";

		if ($conexao->query($sql) === TRUE) {
			$_SESSION['evento_cadastrado'] = true;
			header('Location: ../views/cadastro_de_evento.php');
			exit();
			#echo "Cadastrado com sucesso";
		} else {
			$_SESSION['erro_cadastrado'] = true;
			header('Location: ../views/cadastro_de_evento.php');
			exit();
			echo "não cadastrado".mysqli_error($conexao);
		}
	}
?>