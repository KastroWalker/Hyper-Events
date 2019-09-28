<?php 
	$id_evento = $_SESSION['id'];

	$sql = "select atividade.*, tipoAtividade.tipo_atividade, convidado.nome_convidado, local_atividade.nome_local from atividade inner join tipoAtividade on (atividade.idTipoAtividade = tipoAtividade.idTipoAtividade) inner join convidado on (atividade.idConvidado = convidado.idConvidado) inner join eventos on (atividade.evento_id = eventos.evento_id) inner join local_atividade on (atividade.local_id = local_atividade.local_id) and eventos.evento_id = $id_evento and atividade.atividade_id = $id_atividade;";

	$result = mysqli_query($conexao, $sql);
	$row = mysqli_fetch_assoc($result);
	$idConvidado = $row['idConvidado'];
	function escreve_coluna($titulo, $atributo){
		$linha = "
			<tr>
				<td>
					<dt class='col-sm-3'>$titulo</dt>
				</td>
				<td>
					<dd class='col-sm-9'>$atributo</dd>
				</td>
			</tr>
		";
		echo $linha;
	}

	echo "
	<table class='table table-bordered table-hover'>
		<dl class='row'>";
	#ID da atividade
	escreve_coluna("ID: ", $row['atividade_id']);

	#Titulo da atividade
	escreve_coluna("Titulo: ", $row['titulo_atividade']);
	
	#Tipo da atividade
	escreve_coluna("Tipo:", $row['tipo_atividade']);
	
	#Ministrante da atividade
	escreve_coluna("Ministrante", "<a href='informacoes_ministrante.php?id_convidado=$idConvidado'>".$row['nome_convidado']."</a>");
		
	#Vagas da atividade
	escreve_coluna("Vagas: ", $row['qtde_vagas_atividade']);
	
	#Valor da atividade
	escreve_coluna("Valor: ", $row['valor']);
	
	#Descrição da atividade
	escreve_coluna("Descrição: ", $row['descricao']);
	
	#Data da atividade
	escreve_coluna("Data: ", $row['data']);
	
	#Local da atividade
	escreve_coluna("Local: ", $row['nome_local']);
	
	#Hora de inicio da atividade
	escreve_coluna("Hora de Inicio: ", $row['inicio']);
	echo "
		</dl>
	</table>";
?>