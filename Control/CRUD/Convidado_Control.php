<?php
	include '../conexao.php';
	session_start();
    
	$acao = $_REQUEST['acao'];

    $evento_id = $_SESSION['id_evento'];
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
	}else if($acao == "deletar"){
		$convidado_id = $_POST['delete_id'];

		if (isset($_POST['deletedata'])) {
			$sql = "delete from convidado where idConvidado = $convidado_id";

			$result = mysqli_query($conexao, $sql);

			if(!$result){
				$_SESSION['erro_excluir'] = true;
				die('Erro: '.mysqli_error($conexao));
			}else{
				$_SESSION['sucesso_excluir'] = true;
			}
			header('Location: ../../views/Eventos/Listar/lista_convidados.php');
			
			$conexao->close();
			
			exit();
		}
	}else if ($acao == "modalCadastrar") {
		$sql = "insert into convidado(idTipoConvidado ,evento_id ,nome_convidado ,descricao ,email ,contato) values ('{$tipo_convidado}', '{$evento_id}', '{$nome}', '{$descricao}', '{$email}', '{$contato}');";

	    if($conexao->query($sql) === TRUE){
			$_SESSION['convidado_cadastrado'] = true;
			echo "Cadastrado com sucesso";
		}else{
			$_SESSION['convidado_nao_cadastrado'] = true;
			echo "Erro ao cadastrar ".mysqli_error($conexao);
		}

		header('Location: ../../views/Eventos/Cadastros/cadastra_atividade.php');
		exit();
		$conexao->close();
	}
?>