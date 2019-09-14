<?php
	include_once '../Controls/verifica_login.php'; 

	require_once 'conexao.php';

	# Cria a expressão SQL de consulta aos registro
	$sql = "select * from eventos";
?>

<h2 class="text-center mx-auto" style="margin: 20px; font-size: 35pt;">Meus Eventos</h2>
<table class="table table-condensed table-striped table-bordered table-hover">
	<tr>
		<th>id</th>
		<th>Titulo</th>
		<th>Descricao</th>
		<th>Hora de inicio</th>
		<th>Data de incio</th>
		<th>Data de fim</td>
		<th>Email</td>
		<th>Site</th>
		<th colspan="3">Ações</th>
	</tr>

<?php
	# Exibe os resultados de novidades e noticias
	$result = mysqli_query($conexao, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		$Titulo = $tlb['titulo'];
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
		echo "<td><a href='../views/lista_atividades.php?id=$id_evento'>$Titulo</a></td>";
		echo "<td>$Descricao</td>";
		echo "<td>$hora_inicio</td>";
		echo "<td>$data_inicio</td>";
		echo "<td>$data_fim</td>";
		echo "<td>$email</td>";
		echo "<td><a href='$url_evento' blank>$url_evento</a></td>";
		echo "<td><a href='../Controls/cadastrar_em_evento.php?id=$id_evento&user_id=$id'><button class='btn btn-primary'>Cadastrar</button></a></td>";
		echo "</tr>";
	}	
?>

</table>

<script src="../JS/personalizado.js"></script>