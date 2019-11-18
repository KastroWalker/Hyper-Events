<?php
	session_start();
	include('../../bd/conexao.php');

	$idtipo_usuario = mysqli_real_escape_string($conexao, trim($_POST['tipo_user']));
	$nome = mysqli_real_escape_string($conexao, trim($_POST['campo_nome']));
	$sexo = mysqli_real_escape_string($conexao, trim($_POST['campo_sexo']));
	
	$cpf = mysqli_real_escape_string($conexao, trim($_POST['campo_cpf']));
	$cpf = str_replace("-", "", $cpf);
	$cpf = str_replace(".", "", $cpf);

	$data_nasc = mysqli_real_escape_string($conexao, trim($_POST['campo_data_nasc']));
	$usuario = mysqli_real_escape_string($conexao, trim($_POST['campo_usuario']));
	$senha = mysqli_real_escape_string($conexao, trim($_POST['campo_senha']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['campo_email']));
	
	$contato = mysqli_real_escape_string($conexao, trim($_POST['campo_contato']));
	$contato = str_replace(" ", "", $contato);
	$contato = str_replace("-", "", $contato);

	$acao = $_REQUEST['acao'];

	if ($acao == 'cadastrar') {
		$sql = 'INSERT INTO usuario (idtipo_usuario, nome, sexo, cpf, data_nasc, usuario, senha, email, contato) VALUES ('{$idtipo_usuario}', '{$nome}', '{$sexo}', '{$cpf}', '{$data_nasc}', '{$usuario}', '{$senha}', '{$email}', '{$contato}');';

		echo mysqli_error($conexao);
	}
?>