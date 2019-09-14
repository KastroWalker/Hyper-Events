<?php
	include 'conexao.php';

	$evento_id = $_REQUEST['id'];	
	
	$palestrante_id = mysqli_real_escape_string($conexao, trim($_POST['palestrante']));
	$titulo = mysqli_real_escape_string($conexao, trim($_POST['nome']));
	$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
	$local = mysqli_real_escape_string($conexao, trim($_POST['local']));
	$data_inicio = mysqli_real_escape_string($conexao, trim($_POST['data_init']));
	$data_fim = mysqli_real_escape_string($conexao, trim($_POST['data_end']));
	$hora_inicio = mysqli_real_escape_string($conexao, trim($_POST['time_init']));
	$hora_fim = mysqli_real_escape_string($conexao, trim($_POST['time_end']));

	/*
	echo "$evento_id<br>";
	echo "$palestrante_id<br>";
	echo "$titulo<br>";
	echo "$descricao<br>";
	echo "$local<br>";
	echo "$data_inicio<br>";
	echo "$data_fim<br>";
	echo "$hora_inicio<br>";
	echo "$hora_fim<br>";
	*/

	$sql = "insert into palestra (ministrante_id, evento_id, nome, descricao, data_inicio, data_fim, local, inicio, fim) values ('{$palestrante_id}', '{$evento_id}', '{$titulo}', '{$descricao}', '{$data_inicio}', '{$data_fim}', '{$local}', '{$hora_inicio}', '{$hora_fim}');";

	if ($conexao->query($sql) === TRUE) {
		$_SESSION['palestra_cadastrada'] = true;
		header('Location: ../views/cadastra_atividade.php?tipo=palestra&id='$evento_id'');
		exit();
		echo "Cadastrado com sucesso";
	} else {
		$_SESSION['erro_palestra_cadastro'] = true;
		header('Location: ../views/cadastra_atividade.php?tipo=palestra&id='$evento_id'');
		exit();
		echo "não cadastrado".mysqli_error($conexao);
	}

	$conexao->close();
?>