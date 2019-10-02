<?php
	include '../conexao.php';
	session_start();
    
	$acao = $_REQUEST['acao'];

    $evento_id = $_SESSION['id'];
    $nome = mysqli_real_escape_string($conexao, trim($_POST['campo_nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['campo_email']));
    $contato = mysqli_real_escape_string($conexao, trim($_POST['campo_telefone']));
	$contato = str_replace('-', '', $contato);
	$contato = str_replace(' ', '', $contato);
    $tipo_convidado = mysqli_real_escape_string($conexao, trim($_POST['tipo_convidado']));
    $descricao = mysqli_real_escape_string($conexao, trim($_POST['campo_descricao']));
   	
	if($acao == "cadastrar"){
	    $sql = "insert into convidado(idTipoConvidado ,evento_id ,nome_convidado ,descricao ,email ,contato) values ('{$tipo_convidado}', '{$evento_id}', '{$nome}', '{$descricao}', '{$email}', '{$contato}');";

	    if($conexao->query($sql) === TRUE){
			$_SESSION['convidado_cadastrado'] = true;
			echo "Cadastrado com sucesso";
		}else{
			$_SESSION['convidado_nao_cadastrado'] = true;
			echo "Erro ao cadastrar ".mysqli_error($conexao);
		}

		header('Location: ../../views/Eventos/Cadastros/cadastro_convidado.php');
		exit();
		$conexao->close();
	}
?>