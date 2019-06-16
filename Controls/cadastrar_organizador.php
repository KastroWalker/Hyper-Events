<?php
	session_start();
	include 'conexao.php';
	
	/*Dados Pessoais*/
	
	$nome = mysqli_real_escape_string($conexao, trim($_POST['campo_nome']));
	$data_nasc = mysqli_real_escape_string($conexao, trim($_POST['campo_data_nasc']));
	$sexo = mysqli_real_escape_string($conexao, trim($_POST['campo_sexo']));
	$cpf =  mysqli_real_escape_string($conexao, trim($_POST['campo_cpf']));
	$cpf = str_replace('-', '', $cpf);
	$cpf = str_replace('.', '', $cpf);
	/*Dados da conta*/
	$email = mysqli_real_escape_string($conexao, trim($_POST['campo_email']));
	$conf_email = mysqli_real_escape_string($conexao, trim($_POST['campo_conf_email']));
	$user = mysqli_real_escape_string($conexao, trim($_POST['campo_user']));
	$senha = mysqli_real_escape_string($conexao, trim($_POST['campo_senha']));
	$conf_senha = mysqli_real_escape_string($conexao, trim($_POST['campo_conf_senha']));

	$senha = md5($senha);

	//echo "$senha";

	/*
	echo "NOME: <strong>$nome</strong><br/>";
	echo "DATA: <strong>$data_nasc</strong><br/>";
	echo "SEXO: <strong>$sexo</strong><br/>";
	echo "CPF: <strong>$cpf</strong><br/>";
	echo "EMAIL: <strong>$email</strong><br/>";
	echo "CONF_EMAIL: <strong>$conf_email</strong><br/>";
	echo "USER: <strong>$user</strong><br/>";
	echo "SENHA: <strong>$senha</strong><br/>";
	echo "CONF_SENHA: <strong>$conf_senha</strong><br/>";
	*/

	$sql = "select count(*) as total from organizadores where usuario = '$user'";
	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);

	print_r($row);

	if ($row['total'] == 1) {
		$_SESSION['usuario_existe'] = true;
		header('Location: ../views/cadastro.php');
		exit();
	}

	$sql = "insert into organizadores (nome, datanasc, sexo, cpf, email, usuario, senha) values ('{$nome}', '{$data_nasc}', '{$sexo}', '{$cpf}', '{$email}', '{$user}', '{$senha}');";

	if($conexao->query($sql) === TRUE){
		$_SESSION['status_cadastro'] = true;
		echo "cadastrado";
	}else{
		$_SESSION['Não_foi_cadastrado'] = true;
		echo "não cadastrado".mysqli_error($conexao);
	}

	$conexao->close();

	header('Location: ../views/cadastro.php');
	exit();
	
?>