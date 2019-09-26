<?php
	include '../conexao.php';
	session_start();
    
    $evento_id = $_SESSION['id'];
    $nome = mysqli_real_escape_string($conexao, trim($_POST['campo_nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['campo_email']));
    $contato = mysqli_real_escape_string($conexao, trim($_POST['campo_telefone']));
    $tipo_convidado = mysqli_real_escape_string($conexao, trim($_POST['tipo_convidado']));
    $descricao = mysqli_real_escape_string($conexao, trim($_POST['campo_descricao']));
   	
    $sql = "insert into convidado(idTipoConvidado ,evento_id ,nome_convidado ,descricao ,email ,contato) values ('{$tipo_convidado}', '{$evento_id}', '{$nome}', '{$descricao}', '{$email}', '{}');";

    if($conexao->query($sql) === TRUE){
		$_SESSION['convidado_cadastrado'] = true;
		#echo "Cadastrado com sucesso";
	}else{
		$_SESSION['convidado_nao_cadastrado'] = true;
		#echo "Erro ao cadastrar ".mysqli_error($conexao);
	}

	header('Location: ../../views/Eventos/Cadastros/cadastro_convidado.php');
	exit();
	$conexao->close();
?>