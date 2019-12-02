<?php
	session_start();
	include '../conexao.php';
	include '../funcoes.php';

	$acao = $_REQUEST['acao'];

	@$evento_id = mysqli_real_escape_string($conexao, trim($_POST['evento_id']));
	@$tipo_atividade = mysqli_real_escape_string($conexao, trim($_POST['tipo_ativ']));
	@$vagas = mysqli_real_escape_string($conexao, trim($_POST['qtd_vagas']));
	@$convidado = mysqli_real_escape_string($conexao, trim($_POST['convidado']));
	@$titulo = mysqli_real_escape_string($conexao, trim($_POST['nome_ativ']));
	@$valor = mysqli_real_escape_string($conexao, trim($_POST['valor']));
	@$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
	@$data = mysqli_real_escape_string($conexao, trim($_POST['data']));
	@$local = mysqli_real_escape_string($conexao, trim($_POST['local']));
	@$hora_inicio = mysqli_real_escape_string($conexao, trim($_POST['hora_inicio']));
	@$hora_fim = mysqli_real_escape_string($conexao, trim($_POST['hora_fim']));

	echo "<strong>Id Evento: </strong>".$evento_id."<br/>";
	echo "<strong>Tipo Atividade: </strong>".$tipo_atividade."<br/>";
	echo "<strong>Vagas: </strong>".$vagas."<br/>";
	echo "<strong>Convidado: </strong>".$convidado."<br/>";
	echo "<strong>Titulo: </strong>".$titulo."<br/>";
	echo "<strong>Valor: </strong>".$valor."<br/>";
	echo "<strong>Descrição: </strong>".$descricao."<br/>";
	echo "<strong>Data: </strong>".$data."<br/>";
	echo "<strong>Local: </strong>".$local."<br/>";
	echo "<strong>Hora Inicio: </strong>".$hora_inicio."<br/>";
	echo "<strong>Hora Fim: </strong>".$hora_fim."<br/>";
	
	if($acao == "cadastrar"){

		$vagas_evento = vagas($evento_id, $conexao, $vagas);

		$sql = "update eventos set qtde_vagas_evento='{$vagas_evento}' where evento_id = '{$evento_id}'";
		
		if($conexao->query($sql) === TRUE){
			$sql = "insert into atividade (evento_id, idTipoAtividade, idConvidado, qtde_vagas_atividade, valor, titulo_atividade, descricao, data, local_id, inicio ,fim) values ('{$evento_id}', '{$tipo_atividade}', '{$convidado}', '{$vagas}', '{$valor}', '{$titulo}', '{$descricao}', '{$data}', '{$local}', '{$hora_inicio}', '{$hora_fim}'); ";
			
			echo mysqli_error($conexao);

			if($conexao->query($sql) === TRUE){
				$_SESSION['atividade_cadastrada'] = true;
				echo "cadastrado";
			}else{
				$_SESSION['atividade_não_cadastrada'] = true;
				echo "não cadastrado".mysqli_error($conexao);
			}

			$conexao->close();

			header('Location: ../../views/Eventos/Cadastros/cadastra_atividade.php');
			exit();
		}
	}else if($acao == "deletar"){
		$atividade_id = $_POST['delete_id'];

		if (isset($_POST['deletedata'])) {
			$sql = "delete from atividade where atividade_id = $atividade_id";

			$result = mysqli_query($conexao, $sql);

			if(!$result){
				$_SESSION['erro_excluir'] = true;
				die('Erro: '.mysqli_error($conexao));
			}else{
				$_SESSION['sucesso_excluir'] = true;
			}
			header('Location: ../../views/Eventos/Listar/lista_atividades.php');
			
			$conexao->close();
			
			exit();
		}
	}else if ($acao == "editar") {
		$atividade_id = $_POST['atividade_id'];
		$sql = "UPDATE atividade SET idTipoAtividade = '{$tipo_atividade}', idConvidado = '{$convidado}', qtde_vagas_atividade = '{$vagas}', valor = '{$valor}', titulo_atividade = '{$titulo}', descricao = '{$descricao}', data = '{$data}', local_id = '{$local}', inicio = '{$hora_inicio}', fim = '{$hora_fim}' WHERE atividade_id = $atividade_id;";

		$result = mysqli_query($conexao, $sql);

		if (!$result) {
			die('Erro: '.mysqli_error($conexao));
			$_SESSION['atividade_nao_alterada'] = true;
			header('Location: ../../views/Eventos/Editar/edita_atividade.php');
			exit();
		} else {
			$_SESSION['atividade_alterada'] = true;
			header('Location: ../../views/Eventos/Editar/edita_atividade.php');
			exit();
		}
	}
?>