<?php
	session_start();
	include '../conexao.php';

	$acao = $_REQUEST['acao'];

	$evento_id = mysqli_real_escape_string($conexao, trim($_POST['evento_id']));
	$tipo_atividade = mysqli_real_escape_string($conexao, trim($_POST['tipo_ativ']));
	$vagas = mysqli_real_escape_string($conexao, trim($_POST['qtd_vagas']));
	$convidado = mysqli_real_escape_string($conexao, trim($_POST['convidado']));
	$titulo = mysqli_real_escape_string($conexao, trim($_POST['nome_ativ']));
	$valor = mysqli_real_escape_string($conexao, trim($_POST['valor']));
	$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
	$data = mysqli_real_escape_string($conexao, trim($_POST['data']));
	$local = mysqli_real_escape_string($conexao, trim($_POST['local']));
	$hora_inicio = mysqli_real_escape_string($conexao, trim($_POST['hora_inicio']));
	$hora_fim = mysqli_real_escape_string($conexao, trim($_POST['hora_fim']));

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
?>