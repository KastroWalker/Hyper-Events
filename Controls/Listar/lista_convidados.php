<?php
	include '../conexao.php';
	$sql = "select * from convidado";
	$result = mysqli_query($conexao, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		$idConvidado = $tlb['idConvidado'];
		$nome_convidado = $tlb['nome_convidado'];
		echo "<option value=$idConvidado>";
		echo "$nome_convidado";
		echo "</option>";
	}
?>