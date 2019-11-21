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
	$usuario = mysqli_real_escape_string($conexao, trim($_POST['campo_user']));
	$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['campo_senha'])));
	$email = mysqli_real_escape_string($conexao, trim($_POST['campo_email']));
	
	$contato = mysqli_real_escape_string($conexao, trim($_POST['campo_telefone']));
	$contato = str_replace(" ", "", $contato);
	$contato = str_replace("-", "", $contato);

	$acao = $_REQUEST['acao'];

	if ($acao == 'cadastrar') {
		$sql = "select count(*) as total from usuario where usuario = '$usuario'";
		$result = mysqli_query($conexao ,$sql);
		$row = mysqli_fetch_assoc($result);

		if ($row['total'] == 1) {
			$_SESSION['usuario_existe'] = true;
			header('Location: ../../View/cadastro.php');
			exit;
		}

		$sql = "insert into usuario (idtipo_usuario, nome, sexo, cpf, data_nasc, usuario, senha, email, contato) values ('{$idtipo_usuario}', '{$nome}', '{$sexo}', '{$cpf}', '{$data_nasc}', '{$usuario}', '{$senha}', '{$email}', '{$contato}');";

		if ($conexao->query($sql) === TRUE) {
			$_SESSION['status_cadastro'] = true;
		}
		else {
			$_SESSION['nao_cadastrado'];
		}

		$conexao->close();
		header("Location: ../../View/cadastro.php");
		exit;
	}


?>