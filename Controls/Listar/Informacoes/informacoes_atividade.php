<?php 
	$id_evento = $_SESSION['id'];

	$sql = "select atividade.*, tipoAtividade.tipo_atividade, convidado.nome_convidado from atividade inner join tipoAtividade on (atividade.idTipoAtividade = tipoAtividade.idTipoAtividade) inner join convidado on (atividade.idConvidado = convidado.idConvidado) inner join eventos on (atividade.evento_id = eventos.evento_id) and eventos.evento_id = $id_evento and atividade.atividade_id = $id_atividade;";

	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);
	$idConvidado = $row['idConvidado'];
	
	function escreve_coluna($titulo, $atributo){
		echo "<tr>";
		echo "<td>";
		echo "<dt class='col-sm-3'>$titulo</dt>";
		echo "</td>";
		echo "<td>";
		echo "<dd class='col-sm-9'>".$atributo."</dd>";
		echo "</td>";
		echo "</tr>";
	}

	echo "<div class='div_principal'>";
	echo "<table border=5 width=100%;>";
	echo "<h2>Informações Atividade:</h2>";
	echo "<dl class='row'>";
	#ID da atividade
	escreve_coluna("ID: ", $row['atividade_id']);

	#Titulo da atividade
	escreve_coluna("Titulo: ", $row['titulo_atividade']);
	
	#Tipo da atividade
	escreve_coluna("Tipo:", $row['tipo_atividade']);
	
	#Ministrante da atividade
	echo "<tr>";
		echo "<td>";
			echo "<dt class='col-sm-3'>Ministrante: </dt>";
		echo "</td>";
		echo "<td>";
			echo "<dd class='col-sm-9'><a href'informacoes_ministrante.php?id_convidado=$idConvidado'>".$row['nome_convidado']."</a></dd>";
		echo "</td>";
	echo "</tr>";
		
	#Vagas da atividade
	escreve_coluna("Vagas: ", $row['qtde_vagas_atividade']);
	
	#Valor da atividade
	escreve_coluna("Valor: ", $row['valor']);
	
	#Descrição da atividade
	escreve_coluna("Descrição: ", $row['descricao']);
	
	#Data da atividade
	escreve_coluna("Data: ", $row['data']);
	
	#Local da atividade
	escreve_coluna("Local: ", $row['local_id']);
	
	#Hora de inicio da atividade
	escreve_coluna("Inicio: ", $row['inicio']);
	echo "</table>";
	echo "</dl>";
	echo "</div>";
?>