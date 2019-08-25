<?php
	session_start();
	$tipo = $_REQUEST['tipo'];
	$_SESSION['tipo'] = $tipo;
	require_once '../Controls/lista_atividades.php';
?>