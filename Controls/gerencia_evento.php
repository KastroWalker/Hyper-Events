<?php 
	session_start();

	include_once 'conexao.php';
	include_once '../Controls/verifica_login.php';

	$titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
	$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
	$hora = mysqli_real_escape_string($conexao, trim($_POST['hora_inicio']));
	$data_inicio = mysqli_real_escape_string($conexao, trim($_POST['inicio']));
	$data_fim = mysqli_real_escape_string($conexao, trim($_POST['fim']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$site = mysqli_real_escape_string($conexao, trim($_POST['site']));
	$id = $_SESSION['id'];

	/*
	echo "<strong>Titulo: </strong>".$titulo."<br/>";
	echo "<strong>Descrição: </strong>".$descricao."<br/>";
	echo "<strong>Hora: </strong>".$hora."<br/>";
	echo "<strong>Data_inicio: </strong>".$data_inicio."<br/>";
	echo "<strong>Data_fim: </strong>".$data_fim."<br/>";
	echo "<strong>Email: </strong>".$email."<br/>";
	echo "<strong>Site: </strong>".$site."<br/>";
	echo "<strong>Id: </strong>".$id."<br/>";
	*/

	$sql = "select count(*) as total from eventos where nome = '$titulo';";

	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);

	mysqli_error($conexao);
	print_r($row);
	echo $row['total'];	

	if ($row['total'] >= 1) {
		echo "Evento cadastrado".mysqli_error($conexao);
		$_SESSION['evento_ja_cadastrado'] = true;
		header('Location: ../views/cadastro_de_evento.php');
		exit();
	} else {
		$sql = "insert into eventos (org_id, titulo, descricao, url_evento, hora_inicio, data_inicio, data_fim, email) values ('$id', '$titulo', '$descricao', '$site', '$hora', '$data_inicio', '$data_fim', '$email');";

		if ($conexao->query($sql) === TRUE) {
			$_SESSION['evento_cadastrado'] = true;
			header('Location: ../views/cadastro_de_evento.php');
			exit();
			echo "Cadastrado com sucesso";
		} else {
			$_SESSION['erro_cadastrado'] = true;
			header('Location: ../views/cadastro_de_evento.php');
			exit();
			echo "não cadastrado".mysqli_error($conexao);
		}
	}

	$conexao->close();
?>