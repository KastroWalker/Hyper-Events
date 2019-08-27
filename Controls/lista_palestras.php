<?php 
	$tipo = $_SESSION['tipo'];
	#echo "$tipo";
	include "conexao.php";
	$sql = "select * from palestra;";
?>
<table class="table table-condensed table-striped table-bordered table-hover">
	<tr>
		<th>id</th>
		<th>Palestrante</th>
		<th>Titulo</th>
		<th>Descricao</th>
		<th>Data Inicio</th>
		<th>Data Fim</th>
		<th>Local</th>
		<th>Hora Inicio</th>
		<th>Hora Fim</th>
	</tr>
<?php
	$result = mysqli_query($conexao, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		$id = $tlb['palestra_id'];
		$palestrante_id = $tlb['palestrante_id'];
		$nome = $tlb['nome'];
		$descricao = $tlb['descricao'];
		$data_inicio = $tlb['data_inicio'];
		$data_fim = $tlb['data_fim'];
		$local = $tlb['local'];
		$hora_inicio = $tlb['inicio'];
		$hora_fim = $tlb['fim'];
		echo "<tr>";
		echo "<td>$id</td>";
		echo "<td>$nome</td>";
		echo "<td>$descricao</td>";
		echo "<td>$data_inicio</td>";
		echo "<td>$data_fim</td>";
		echo "<td>$local</td>";
		echo "<td>$hora_inicio</td>";
		echo "<td>$hora_fim</td>";
		echo "</tr>";
	}
?>
</table>