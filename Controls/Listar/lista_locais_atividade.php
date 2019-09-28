<?php
	include '../conexao.php';
	session_start();
	$evento_id = $_SESSION['id'];
	echo "$evento_id";

	$sql = "select * from local_atividade where evento_id = $evento_id;";
	$result = mysqli_query($conexao, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		$id = $tlb['local_id'];
		$nome = $tlb['nome_local'];
		echo mysqli_error($conexao);
		echo "<option value=$id>";
		echo "$nome";
		echo "</option>";
	}
?>