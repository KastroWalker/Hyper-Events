<?php
	$id_evento = $_SESSION['id_evento'];
	#echo $id_evento;
	#$id_evento = intval($id_evento);
	#echo gettype($id_evento);

	$sql = "select atividade.*, tipoAtividade.tipo_atividade, convidado.nome_convidado from atividade inner join tipoAtividade on (atividade.idTipoAtividade = tipoAtividade.idTipoAtividade) inner join convidado on (atividade.idConvidado = convidado.idConvidado) inner join eventos on (atividade.evento_id = eventos.evento_id) and eventos.evento_id = $id_evento;";
?>
<table class="table table-condensed table-striped table-bordered table-hover">
	<tr>
		<th>Id: </th>
		<th>Titulo: </th>
		<th>Tipo: </th>
		<th>Ministrante: </th>
		<th>Vagas: </th>
		<th>Valor: </th>
		<th>EDITAR</th>
		<th>APAGAR</th>
	</tr>
<?php
	$result = mysqli_query($conexao, $sql);
	echo mysqli_error($conexao);
	$indice = 1;
	while ($tlb = mysqli_fetch_array($result)) {
		#header("Content-Type: text/html; charset=ISO-8859-1", true);
		$id = $tlb['atividade_id'];
		$titulo = $tlb['titulo_atividade'];
		$tipo_ativ = $tlb['tipo_atividade'];
		$nome_convidado = $tlb['nome_convidado'];
		$vagas = $tlb['qtde_vagas_atividade'];
		$valor = $tlb['valor'];

		mysqli_error($conexao);
		echo "<tr>";
		echo "<td>$indice</td>";
		echo "<td style='display: none;'>$id</td>";
		echo "<td><a href='../informacoes_atividade.php?id=$id'>$titulo</a></td>";
		echo "<td>$tipo_ativ</td>";
		echo "<td>$nome_convidado</td>";
		echo "<td>$vagas</td>";
		echo "<td>R$ $valor</td>";
		echo "<td><a href = '../../../views/Eventos/Editar/edita_atividade.php'><button type='button' class='btn btn-success'>Editar</button></a></td>";
		echo "<td><button type='button' class='btn btn-danger deletebtn'>Apagar</button></td>";
		echo "</tr>";

		$indice++;
	}
	$_SESSION['id_atividade'] = $id;
?>
</table>
</div>