<?php
	$sql = "select atividade.*, tipoAtividade.tipo_atividade, convidado.nome_convidado from tipoAtividade inner join atividade on tipoAtividade.idTipoAtividade = atividade.idTipoAtividade left outer join convidado on atividade.idConvidado = convidado.idConvidado;";
?>
<table class="table table-condensed table-striped table-bordered table-hover">
	<tr>
		<th>Id: </th>
		<th>Titulo: </th>
		<th>Tipo: </th>
		<th>Ministrante: </th>
		<th>Vagas: </th>
		<th>Valor: </th>
	</tr>
<?php
	$result = mysqli_query($conexao, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		#header("Content-Type: text/html; charset=ISO-8859-1", true);
		$id = $tlb['atividade_id'];
		$titulo = utf8_encode($tlb['titulo_atividade']);
		$tipo_ativ = $tlb['tipo_atividade'];
		$nome_convidado = $tlb['nome_convidado'];
		$vagas = $tlb['qtde_vagas_atividade'];
		$valor = $tlb['valor'];

		mysqli_error($conexao);
		echo "<tr>";
		echo "<td>$id</td>";
		echo "<td>$titulo</td>";
		echo "<td>$tipo_ativ</td>";
		echo "<td>$nome_convidado</td>";
		echo "<td>$vagas</td>";
		echo "<td>$valor</td>";
		echo "</tr>";
	}
?>
</table>