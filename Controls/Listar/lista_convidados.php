<?php
	$id_evento = $_SESSION['id'];

	$sql = "select convidado.nome_convidado, convidado.idConvidado, tipoConvidado.tipo_convidado, eventos.evento_id from convidado inner join tipoConvidado on (convidado.idTipoConvidado = tipoConvidado.idTipoConvidado) inner join eventos on (eventos.evento_id = convidado.evento_id) and eventos.evento_id = $id_evento;";
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
		$id = $tlb['idConvidado'];
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