<?php
	$evento_id = $_POST['evento_id'];
	$tipo_atividade = $_POST['tipo_ativ'];
	$vagas = $_POST['qtd_vagas'];
	$convidado = $_POST['convidado'];
	$titulo = $_POST['nome_ativ'];
	$valor = $_POST['valor'];
	$descricao = $_POST['descricao'];
	$data = $_POST['data'];
	$local = $_POST['local'];
	$hora_inicio = $_POST['hora_inicio'];
	$hora_fim = $_POST['hora_fim'];

	echo "<strong>Id Evento: </strong>".$evento_id."<br/>";
	echo "<strong>Tipo Atividade: </strong>".$tipo_atividade."<br/>";
	echo "<strong>Vagas: </strong>".$qtd_vagas."<br/>";
	echo "<strong>Convidado: </strong>".$convidado."<br/>";
	echo "<strong>Titulo: </strong>".$titulo."<br/>";
	echo "<strong>Valor: </strong>".$valor."<br/>";
	echo "<strong>Descrição: </strong>".$descricao."<br/>";
	echo "<strong>Data: </strong>".$data."<br/>";
	echo "<strong>Local: </strong>".$local."<br/>";
	echo "<strong>Hora Inicio: </strong>".$hora_inicio."<br/>";
	echo "<strong>Hora Fim: </strong>".$hora_fim."<br/>";
	
	$sql = "insert into ministrantes (evento_id, idTipoAtividade, idConvidado, qtde_vagas_atividade, valor, titulo_atividade, descricao, data, local, inicio ,fim) values ('{$evento_id}', '{$tipo_atividade}', '{$qtd_vagas}', '{$valor}', '{$titulo}', '{$descricao}', '{$data}', '{$local}', '{$hora_inicio}', '{$hora_fim}'); ";
	
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


?>