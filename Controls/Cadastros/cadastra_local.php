<?php 
	session_start();
	include '../conexao.php';

	$evento_id = mysqli_real_escape_string($conexao, trim($_POST['evento_id']));
	$nome_local = mysqli_real_escape_string($conexao, trim($_POST['nome_local']));

	$sql = "insert into local_atividade (evento_id, nome_local) values ('{$evento_id}', '{$nome_local}');";

	mysqli_error($conexao);

	if($conexao->query($sql) === TRUE){
		$_SESSION['local_cadastrado'] = true;
		echo "cadastrado";
	}else{
		$_SESSION['local_nao_cadastrado'] = true;
		echo "não cadastrado".mysqli_error($conexao);
	}

	$conexao->close();

	header('Location: ../../views/Eventos/Cadastros/cadastra_local.php');
	exit();
?>