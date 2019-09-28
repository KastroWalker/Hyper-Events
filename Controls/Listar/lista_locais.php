<?php 
	$id_evento = $_SESSION['id'];
	$sql = "select * from local_atividade where local_id = $id_evento;"
?>
<table class="table table-condensed table-striped table-bordered table-hover">
<tr>
	<th>Id: </th>
	<th>Nome: </th>
</tr>
<?php
	$result = mysqli_query($conexao, $sql);
	echo mysqli_error($conexao);
	$indice = 1;
	while ($tlb = mysqli_fetch_array($result)) {
		$id = $tlb['local_id'];
		$nome = $tlb['nome_local'];
		
		mysqli_error($conexao);
		echo "<tr>";
		echo "<td>$indice</td>";
		echo "<td><a href='#'>$nome</a></td>";
		echo "</tr>";

		$indice++;
	}
?>
</table>
</div>	
