<?php
	session_start();
	include('../../bd/conexao.php');
	$idtipo_usuario = mysqli_real_escape_string($conexao, $_POST['tipo_user']);
	$nome = mysqli_real_escape_string($conexao, $_POST['campo_nome']);
?>