<?php 
	$acao = $_REQUEST['acao'];
	#echo "$acao";

	session_start();

	include_once 'conexao.php';

	#$org = $_POST['org'];
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$hora = $_POST['hora_inicio'];
	$data_inicio = $_POST['inicio'];
	$data_fim = $_POST['fim'];
	$email = $_POST['email'];
	$site = $_POST['site'];

	echo "$titulo<br/>";
	echo "$descricao<br/>";
	echo "$hora<br/>";
	echo "$data_inicio<br/>";
	echo "$data_fim<br/>";
	echo "$email<br/>";
	echo "$site<br/>";

	#$sql = "insert into eventos ()"
?>