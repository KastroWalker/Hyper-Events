<?php 
	session_start();
	include '../conexao.php';

	$evento_id = mysqli_real_escape_string($conexao, trim($_POST['evento_id']));
	$nome_local = mysqli_real_escape_string($conexao, trim($_POST['nome_local']));

	$acao = $_REQUEST['acao'];
	echo $acao;
	if ($acao == "cadastrar") {
		$sql = "insert into local_atividade (evento_id, nome_local) values ('{$evento_id}', '{$nome_local}');";

		mysqli_error($conexao);

		if($conexao->query($sql) === TRUE){
			$_SESSION['local_cadastrado'] = true;
			echo "cadastrado";
		}else{
			$_SESSION['local_nao_cadastrado'] = true;
			echo "não cadastrado".mysqli_error($conexao);
		}
		
		header('Location: ../../views/Eventos/Cadastros/cadastra_local.php');

		$conexao->close();

		exit();
	}else if ($acao == "deletar") {
		$local_id = $_POST['delete_id'];

		if (isset($_POST['deletedata'])) {
			$sql = "delete from local_atividade where local_id = $local_id";

			$result = mysqli_query($conexao, $sql);

			if(!$result){
				$_SESSION['erro_excluir'] = true;
				die('Erro: '.mysqli_error($conexao));
			}else{
				$_SESSION['sucesso_excluir'] = true;
			}
			header('Location: ../../views/Eventos/Listar/lista_locais.php');
			
			$conexao->close();
			
			exit();
		}
	} else if ($acao == "modalCadastrar") {
		$sql = "insert into local_atividade (evento_id, nome_local) values ('{$evento_id}', '{$nome_local}');";

		mysqli_error($conexao);

		if($conexao->query($sql) === TRUE){
			$_SESSION['local_cadastrado'] = true;
			echo "cadastrado";
		}else{
			$_SESSION['local_nao_cadastrado'] = true;
			echo "não cadastrado".mysqli_error($conexao);
		}
		
		header('Location: ../../views/Eventos/Cadastros/cadastra_atividade.php');

		$conexao->close();

		exit();
	}
?>