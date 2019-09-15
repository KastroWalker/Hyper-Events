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

	function tipoAtividade(int $tipoAtiv){
		$sql_tipo = "select titulo from tipoAtividade where idTipoAtividade = '$idTipoAtiv'";
		$result_tipo = mysqli_query($conexao, $sql_tipo);
		$row = mysqli_fetch_array($result_tipo);
		$tipo = $row['titulo'];
		return $tipo;
	}

	function Convidado(int $idConvidado){
		$sql_nome = "select nome from convidado where idConvidado = '$idConvidado'";
		$result_nome = mysqli_query($conexao, $sql_nome);
		$row = mysqli_fetch_array($result_tipo);
		$nome = $row['nome'];
		return $nome;	
	}

	$sql = "select * from atividade;";
	$result = mysqli_query($conexao, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		$id = $tlb['atividade_id'];
		$titulo = $tlb['nome'];
		$idTipoAtiv = $tlb['idTipoAtividade'];
		$tipo_ativ = tipoAtividade($idTipoAtiv);
		$idConvidado = $tlb['idConvidado'];
		$nome_convidado = Convidado($idConvidado);
		$vagas = $tlb['vagas'];
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