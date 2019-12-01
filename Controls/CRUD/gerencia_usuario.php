<?php
	session_start();
	include '../conexao.php';

	$acao = $_REQUEST['acao'];
	
	/*Dados Pessoais*/
	$nome = mysqli_real_escape_string($conexao, trim($_POST['campo_nome']));
	$data_nasc = mysqli_real_escape_string($conexao, trim($_POST['campo_data_nasc']));
	$sexo = mysqli_real_escape_string($conexao, trim($_POST['campo_sexo']));
	$contato = mysqli_real_escape_string($conexao, trim($_POST['campo_telefone']));
	$contato = str_replace('-', '', $contato);
	$contato = str_replace(' ', '', $contato);
	$cpf =  mysqli_real_escape_string($conexao, trim($_POST['campo_cpf']));
	$cpf = str_replace('-', '', $cpf);
	$cpf = str_replace('.', '', $cpf);
	
	/*Dados da conta*/
	$email = mysqli_real_escape_string($conexao, trim($_POST['campo_email']));
	$conf_email = mysqli_real_escape_string($conexao, trim($_POST['campo_conf_email']));
	$user = mysqli_real_escape_string($conexao, trim($_POST['campo_user']));
	$senha = mysqli_real_escape_string($conexao, trim($_POST['campo_senha']));
	$conf_senha = mysqli_real_escape_string($conexao, trim($_POST['campo_conf_senha']));
	$tipo_user = mysqli_real_escape_string($conexao, trim($_POST['tipo_user']));
	$senha = md5($senha);

	if($tipo_user == "part"){
		$tipo_user = "2";
	}else if($tipo_user == "org"){
		$tipo_user = "1";
	}

	$ano = substr($data_nasc, 0, 4);
	$mes = substr($data_nasc, 5, 2);
	$dia = substr($data_nasc, 8, 2);
	
	$ano_atual = date('Y');
	$mes_atual = date('m');
	$dia_atual = date('d');

	$idade = $ano_atual - $ano;

	if ($mes_atual < $mes || $mes_atual == $mes && $dia_atual < $dia) {
        $idade--;
    }

	//echo "$senha";
	echo "NOME: <strong>$nome</strong><br/>";
	echo "DATA: <strong>$data_nasc</strong><br/>";
	echo "SEXO: <strong>$sexo</strong><br/>";
	echo "CPF: <strong>$cpf</strong><br/>";
	echo "EMAIL: <strong>$email</strong><br/>";
	echo "CONF_EMAIL: <strong>$conf_email</strong><br/>";
	echo "USER: <strong>$user</strong><br/>";
	echo "SENHA: <strong>$senha</strong><br/>";
	echo "CONF_SENHA: <strong>$conf_senha</strong><br/>";
	echo "TIPO_USER: <strong>$tipo_user</strong><br/>";

	$sql = "select count(*) as total from usuario where usuario = '$user'";
	
	$result = mysqli_query($conexao, $sql);
	
	$row = mysqli_fetch_assoc($result);

	#print_r($row);

	if ($row['total'] >= 1) {
		$_SESSION['usuario_existe'] = true;
		header('Location: ../views/cadastro.php');
		exit();
	}

	if ($acao = "cadastrar") {
		$sql = "insert into usuario (idtipo_usuario, nome, sexo, cpf, data_nasc, usuario, senha, email, contato) values ('{$tipo_user}', '{$nome}', '{$sexo}', '{$cpf}', '{$data_nasc}', '{$user}', '{$senha}', '{$email}', '{$contato}');";

		if($conexao->query($sql) === TRUE){
			$_SESSION['status_cadastro'] = true;
			echo "cadastrado";
		}else{
			$_SESSION['Não_foi_cadastrado'] = true;
			echo "não cadastrado".mysqli_error($conexao);
		}

		$conexao->close();

		header('Location: ../../views/Cadastros/cadastro.php');
		exit();
	}
?>