<?php
	session_start();
	include 'conexao.php';

	if (empty($_POST['usuario']) || empty($_POST['senha'])) {
		header('Location: tela_login.php');
		exit();
	}

	$user = mysqli_real_escape_string($conexao, $_POST['usuario']);
	$pass = mysqli_real_escape_string($conexao, $_POST['senha']);

	$query = "select participante_id, user from participante where user = '{$user}' and senha = md5('{$pass}')";

	/*	
	echo $query;
	exit();
	*/

	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);

	echo $row;

	if($row == 1){
		$_SESSION['usuario'] = $user;
		header('Location: area_user.php');
		exit();
	} else {
		header('Location: tela_login.php');
		exit();
	}

?>