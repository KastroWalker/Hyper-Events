<?php
require_once '../../../Controls/conexao.php';

	# Cria a expressão SQL de consulta aos registro
$sql = "select * from eventos";
?>

<h2 class="text-center mx-auto" style="margin: 20px; font-size: 35pt;">Eventos</h2>
<div class="div_principal">
	<table class="table table-condensed table-striped table-bordered table-hover">
		<tr>
			<th>id</th>
			<th>Titulo</th>
			<th>Descricao</th>
			<th>Hora de inicio</th>
			<th>Data de inicio</th>
			<th>Data de fim</th>
			<th>Email</th>
			<th>Site</th>
			<th>Ações</th>
		</tr>
		<?php
	# Exibe os resultados de novidades e noticias
		$pos = 0;
		$result = mysqli_query($conexao, $sql);
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
			echo "<td>$id_evento</td>";
			echo "<td><a href='#'>$Titulo</a></td>";
			echo "<td>$Descricao</td>";
			echo "<td>$hora_inicio</td>";
			echo "<td>$data_inicio</td>";
			echo "<td>$data_fim</td>";
			echo "<td>$email</td>";
			echo "<td><a href='$url_evento' blank>$url_evento</a></td>";
			echo "<td><a href='#'><button class='btn btn-primary'>Cadastrar</button></a></td>";
			echo "</tr>";
		}	
		?>
	</table>
</div>
<script src="../JS/personalizado.js"></script>