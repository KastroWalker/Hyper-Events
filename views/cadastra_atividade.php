<?php 
	$tipo = $_REQUEST['tipo'];

	if ($tipo == 'palestra') {
		require_once 'cadastra_palesta.html';
	} else if ($tipo == 'minicurso') {
		require_once 'cadastra_minicurso.html';
	} else if ($tipo == 'oficina') {
		require_once 'cadastra_oficina.html';
	}
	
?>