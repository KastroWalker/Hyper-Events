<?php
	$id_evento = $_SESSION['id'];
	#$id_evento = intval($id_evento);
	#echo gettype($id_evento);

	$sql = "select atividade.*, tipoAtividade.tipo_atividade, atividade.nome_convidado from atividade inner join tipoAtividade on (atividade.idTipoAtividade = tipoAtividade.idTipoAtividade) inner join convidado on (atividade.idConvidado = convidado.idConvidado) inner join eventos on (atividade.evento_id = eventos.evento_id) and eventos.evento_id = $id_evento;";
?>
<table class="table table-condensed table-striped table-bordered table-hover">
	<tr>
		<th>Id: </th>
		<th>Nome: </th>
		<th>Tipo: </th>
	</tr>
<?php
	$result = mysqli_query($conexao, $sql);
	echo mysqli_error($conexao);
	$indice = 1;
	while ($tlb = mysqli_fetch_array($result)) {
		#header("Content-Type: text/html; charset=ISO-8859-1", true);
		$id = $tlb['atividade_id'];
		$nome = $tlb['nome_convidado'];
		$tipo_convi = $tlb['tipo_convidado'];

		mysqli_error($conexao);
		echo "<tr>";
		echo "<td>$indice</td>";
		echo "<td>$nome</td>";
		echo "<td>$tipo_convi</td>";
		echo "</tr>";

		$indice++;
	}
?>
</table>
</div>