<?php
	$evento_id = $_SESSION['id_evento'];
	//include '../conexao.php';
	$sql = "select convidado.nome_convidado, convidado.idConvidado, tipoConvidado.tipo_convidado, eventos.evento_id
	from convidado inner join tipoConvidado on (convidado.idTipoConvidado = tipoConvidado.idTipoConvidado)
	inner join eventos on (eventos.evento_id = convidado.evento_id) and eventos.evento_id = $evento_id;";
	$result = mysqli_query($conexao, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		$idConvidado = $tlb['idConvidado'];
		$nome_convidado = $tlb['nome_convidado'];
		echo "<option value=$idConvidado>";
		echo "$nome_convidado";
		echo "</option>";
	}
?>