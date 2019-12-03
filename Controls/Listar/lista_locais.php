<?php
	$id_evento = $_SESSION['id_evento'];
	$sql = "select * from local_atividade where evento_id = $id_evento;"
?>
<table class="table table-condensed table-striped table-bordered table-hover">
<tr>
	<th>Id: </th>
	<th>Nome: </th>
	<th>EDITAR</th>
	<th>APAGAR</th>
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
		echo "<td style='display: none;'>$id</td>";
		echo "<td><a href='#'>$nome</a></td>";
		echo "<td><a href='../../Eventos/Editar/edita_local.php?local_id=$id'><button type='button' class='btn btn-success'>Editar</button></td>";
		echo "<td><button type='button' class='btn btn-danger deletebtn'>Apagar</button></td>";
		echo "</tr>";

		$indice++;
	}
?>
</table>
</div>	
