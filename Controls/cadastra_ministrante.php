<?php 
	include 'conexao.php';

	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
	$sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$contato = mysqli_real_escape_string($conexao, $_POST['contato']);
	$data_nasc = mysqli_real_escape_string($conexao, $_POST['data_nasc']);
	$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);

	echo "$nome<br>";
	echo "$cpf<br>";
	echo "$sexo<br>";
	echo "$email<br>";
	echo "$contato<br>";
	echo "$data_nasc<br>";
	echo "$descricao<br>";

	/*
	$sql = "insert into ministrante(nome, cpf, sexo, email, contato, idade, data_nasc, descricao) values('{$nome}', '{$cof}', '{$sexo}', '{$email}', '{$contato}', '{$idade}', '{$data_nasc}', '{$descricao}');";
	*/
?>