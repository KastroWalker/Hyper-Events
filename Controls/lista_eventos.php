<?php
	include_once '../Controls/verifica_login.php'; 
	$id = $_SESSION['id'];

	# Dados para a conexão com o banco de dados
	$servidor = 'localhost:3308'; 		# Nome do DNS ou IP do servidor HTTP
	$usuario = 'matue';        		# Nome de usuário para acesso ao MySQL
	$senha = 'banco'; 	            # Senha do acesso
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
	$result = mysqli_query($link, $sql);
	while ($tlb = mysqli_fetch_array($result)) {
		$Titulo = $tlb['titulo'];
		$Descricao = $tlb['descricao'];
		$hora_inicio = $tlb['hora_inicio'];
		$data_inicio = $tlb['data_inicio'];
		$data_fim = $tlb['data_fim'];
		$email = $tlb['email'];
		$url_evento = $tlb['url_evento'];
		$id_evento = $tlb['evento_id'];

		mysqli_error($link);
		echo "<tr>";
		echo "<td>$id_evento</td>";
		echo "<td><a href='#'>$Titulo</a></td>";
		echo "<td>$Descricao</td>";
		echo "<td>$hora_inicio</td>";
		echo "<td>$data_inicio</td>";
		echo "<td>$data_fim</td>";
		echo "<td>$email</td>";
		echo "<td><a href='$url_evento' blank>$url_evento</a></td>";
		echo "<td><a href='../views/edita_evento.php?id=$id_evento'><button class='btn btn-primary'>Editar</button></a></td>";
		echo "<td><a href='../Controls/gerencia_evento.php?acao=deletar&id=$id_evento' data-confirm='teste'><button type='button' class='btn btn-danger'>Excluir</button></a></td>";
		echo "<td><a href='../views/atividades.php'><button type'button' class='btn btn-info'> Atividades</button></a></td>";
		echo "</tr>";
	}	
?>

</table>

<script src="../JS/personalizado.js"></script>