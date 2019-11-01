<?php
	$id = $_SESSION['id'];

	require_once '../../../Controls/conexao.php';

	$sql = "select * from eventos where user_id = '{$id}'";
?>

<h2 class="text-center mx-auto" style="margin: 20px; font-size: 35pt;">Meus Eventos</h2>
<table class="table table-condensed table-striped table-bordered table-hover">
	<tr>
		<th>Id</th>
		<th>Titulo</th>
		<th>Descricao</th>
		<th>Hora de inicio</th>
		<th>Data de incio</th>
		<th>Data de fim</th>
		<th>Email</th>
		<th>Site</th>
		<th>Apagar</th>
	</tr>

<?php
	# Exibe os resultados de novidades e noticias
	$result = mysqli_query($conexao, $sql);
	$indice = 1;
	while ($tlb = mysqli_fetch_array($result)) {
		$Titulo = $tlb['titulo_evento'];
		$Descricao = $tlb['descricao'];
		$hora_inicio = $tlb['hora_inicio'];
		$data_inicio = $tlb['data_inicio'];
		$data_fim = $tlb['data_fim'];
		$email = $tlb['email'];
		$url_evento = $tlb['url_evento'];
		$id_evento = $tlb['evento_id'];

		mysqli_error($conexao);
		echo "<tr>";
		echo "<td>$indice</td>";
		echo "<td style='display: none;'>$id_evento</td>";
		echo "<td><a href='../informacoes_evento.php?id=$id_evento'>$Titulo</a></td>";
		echo "<td>$Descricao</td>";
		echo "<td>$hora_inicio</td>";
		echo "<td>$data_inicio</td>";
		echo "<td>$data_fim</td>";
		echo "<td>$email</td>";
		echo "<td><a href='$url_evento'>$url_evento</a></td>";
		echo "<td><button type='button' class='btn btn-danger deletebtn'> APAGAR </button></td>";
		echo "</tr>";

		$indice++;
	}	
?>

</table>