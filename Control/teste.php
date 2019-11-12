<?php
	require_once 'conexao.php';

	$sql = "select * from eventos";
?>

<form method="POST">
	<input type="time" name="time">
	<button type="submit" id="btn-enviar" name="btn-enviar">Enviar</button>
</form>

<?php
	function transforma_hora($hora){
		/*
			Função para pegar a hora e o minuto do horario;
			Recebe uma String;
			Retora um Array com o minuto(int) e hora(int);
		*/
		$min = substr($hora, 3, 4);
		$hora = substr($hora, 0, 2);

		$min = (int)$min;
		$hora = (int)$hora;

		$hora = array($min, $hora);
		return $hora;
	}
	$hora = @$_POST['time'];
	
	$time = transforma_hora($hora);

	print_r($time);
?>


<link rel="stylesheet" type="text/css" href="../CSS/bootstrap/bootstrap.min.css">

<form method="POST">
	<input type=time value='<?php echo $hora?>' id='hora_evento'>
</form>

<script type="text/javascript" src="../JS/jquery.js"></script>

<h2 class="text-center mx-auto" style="margin: 20px; font-size: 35pt;">Meus Eventos</h2>
<table class="table table-condensed table-striped table-bordered table-hover">
	<tr>
		<th>Id</th>
		<th>Titulo</th>
		<th>Descricao</th>
		<th>Hora de inicio</th>
		<th>Data de incio</th>
		<th>Data de fim</th>
		<th>Hora Final</th>
		<th>Site</th>
		<th>vagas</th>
	</tr>

<?php
	# Exibe os resultados de novidades e noticias
	$result = mysqli_query($conexao, $sql);
	$indice = 1;
	while ($tlb = mysqli_fetch_array($result)) {
		$Titulo = $tlb['titulo_evento'];
		$Descricao = $tlb['descricao'];
		$vagas = $tlb['qtde_vagas_evento'];
		$hora_inicio = $tlb['hora_inicio'];
		$data_inicio = $tlb['data_inicio'];
		$data_fim = $tlb['data_fim'];
		$hora_fim = $tlb['hora_fim'];
		$url_evento = $tlb['url_evento'];
		$id_evento = $tlb['evento_id'];

		$hora_inicio = (int)$hora_inicio;
		echo gettype($hora_inicio)."<br>";

		mysqli_error($conexao);
		echo "<tr>";
		echo "<td>$indice</td>";
		echo "<td style='display: none;'>$id_evento</td>";
		echo "<td><a href='../informacoes_evento.php?id=$id_evento'>$Titulo</a></td>";
		echo "<td>$Descricao</td>";
		echo "<td>$hora_inicio</td>";
		echo "<td>$data_inicio</td>";
		echo "<td>$data_fim</td>";
		echo "<td>$hora_fim</td>";
		echo "<td><a href='$url_evento'>$url_evento</a></td>";
		echo "<td> $vagas </td>";
		echo "</tr>";

		$indice++;
	}	
?>

</table>

<script>
	function transforma_hora(hora){
		/*
			Função para pegar a hora e o minuto do horario;
			Recebe uma String;
			Retora um Array com o minuto(int) e hora(int);
		*/
		hora = hora.substring(0, 2);
		min = hora.substring(3, 5);

		hora = parseInt(hora);
		min = parseInt(min);

		time = [hora, min];

		return time;
	}
	
	hora = document.getElementById("hora_evento").value;
	hora = transforma_hora(hora);
	console.log(hora);
</script>