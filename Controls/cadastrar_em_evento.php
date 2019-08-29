<?php
	include 'conexao.php';
	$id = $_REQUEST['id'];
	$user_id = $_REQUEST['user_id'];
	echo "$id";
	echo "$user_id";

	$sql = "insert into eventos_participantes(part_id, evento_id) values('{$user_id}', '{$id}');";

	if($conexao->query($sql) === TRUE){
		$_SESSION['cadastrado_no_evento'];
		header('Location: ../views/area_user.php');
		exit();
		echo "Cadastrado com sucesso";
	}else{
		$_SESSION['nao_cadastrado_no_evento'];
		header('Location: ../views/area_user.php');
		exit();
		echo "Erro ao cadastrar ".mysqli_error($conexao);
	}

	$conexao->close();
?>