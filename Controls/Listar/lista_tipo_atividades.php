<?php
	$sql = "select * from tipoAtividade";
	$result = mysqli_query($conexao, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		$id_tipoAtiv = $tlb['idTipoAtividade'];
		$tipo_atividade = $tlb['tipo_atividade'];
		echo "<option value=$id_tipoAtiv>";
		echo "$tipo_atividade";
		echo "</option>";
	}
?>