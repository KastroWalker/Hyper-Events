<?php 
	$id = $_SESSION['id'];

	# Dados para a conexão com o banco de dados
	$servidor = 'localhost'; 		# Nome do DNS ou IP do servidor HTTP
	$usuario = 'root';        		# Nome de usuário para acesso ao MySQL
	$senha = 'Suc0del@ranjaasd'; 	# Senha do acesso
	$banco = 'HyperEvents';			# Nome do banco de dados

	# Executa a conexao com MySQL
	$link = mysqli_connect($servidor, $usuario, $senha) or die ('Não foi possivel conectar: '.mysqli_error($link));

	# Seleciona o banco de dados que deseja utilizar
	$select = mysqli_select_db($link, $banco);

	# Cria a expressão SQL de consulta aos registro
	$sql = "select * from eventos where org_id = '{$id}'";
	#org_id, titulo, descricao, hora_inicio, data_inicio, data_fim, email_contato, url_evento
?>
	
	<h2 class="text-center mx-auto" style="margin: 20px; font-size: 35pt;">Meus Eventos</h2>
	<table class="table table-condensed table-striped table-bordered table-hover">
		<tr>
			<th>Titulo</th>
			<th>Descricao</th>
			<th>Hora de inicio</th>
			<th>Data de incio</th>
			<th>Data de fim</td>
			<th>Email</td>
			<th>Site</th>
		</tr>
	
	<?php 
		# Exibe os resultados de novidades e noticias
		$result = mysqli_query($link, $sql);
		while ($tlb = mysqli_fetch_array($result)) {
			$Titulo = $tlb['titulo'];
			$Descricao = $tlb['descricao'];
			$hora_inicio = $tlb['hora_inicio'];
			$data_inicio = $tlb['data_inicio'];
			$data_fim = $tlb['data_fim'];
			$email_contato = $tlb['email_contato'];
			$url_evento = $tlb['url_evento'];

			echo "<tr>";
			echo "<td>$Titulo</td>";
			echo "<td>$Descricao</td>";
			echo "<td>$hora_inicio</td>";
			echo "<td>$data_inicio</td>";
			echo "<td>$data_fim</td>";
			echo "<td>$email_contato</td>";
			echo "<td>$url_evento</td>";
			echo "</tr>".mysqli_error($link);
		}
	?>

	</table>
