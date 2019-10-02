<?php 
	$convidado_id = $_SESSION['convidado_id'];	
	$sql = "select convidado.*, eventos.titulo_evento, tipoConvidado.tipo_convidado from convidado inner join eventos on (convidado.evento_id = eventos.evento_id) inner join tipoConvidado on (tipoConvidado.idTipoConvidado = convidado.idTipoConvidado) and convidado.idConvidado = $convidado_id";
  	$result = mysqli_query($conexao, $sql);
  	$row = mysqli_fetch_array($result);

  	echo "
	<table class='table table-bordered table-hover'>
		<dl class='row'>";
		escreve_linha("ID: ", $row['idConvidado']);
		escreve_linha("Tipo: ", $row['tipo_convidado']);
		escreve_linha("Nome: ", $row['nome_convidado']);
		escreve_linha("Email: ", $row['email']);
		escreve_linha("Contato: ", $row['contato']);  
		escreve_linha("Descrição: ", $row['descricao']);
		escreve_linha("Evento Relacionado: ", $row['titulo_evento']);
	echo "
		</dl>
	</table>";
?>