<?php
	function escreve_linha($titulo, $atributo){
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

	function vagas($evento_id, $conexao, $vagas){
		/*
			Função para diminuir as quantidades de vagas do evento quando cadastrar uma atividade
		*/
		$sql = "select * from eventos where evento_id = '{$evento_id}'";

		$result = mysqli_query($conexao, $sql);

		$result = $result->fetch_array();

		$vagas_evento = $result['qtde_vagas_evento'];
		$vagas_evento = (int)$vagas_evento;

		$vagas_evento = $vagas_evento - $vagas;
		$vagas_evento = (string)$vagas_evento;

		return $vagas_evento;
	}

	function mostra_msg($session, $msg){
        if(isset($_SESSION[$session])){
            echo "$msg";
        }
        unset($_SESSION[$session]);
    }
?>