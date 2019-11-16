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

    function lista_eventos($id){
    $con = new Conexao();

    $sql = "select * from eventos where user_id = '{$id}'";
    $d = $con->Conectar();
    $dados=$d->prepare($sql);
    $dados->execute();
    $indice = 1;
    foreach ($dados as $tlb) {
        $Titulo = $tlb['titulo_evento'];
        $Descricao = $tlb['descricao'];
        $hora_inicio = $tlb['hora_inicio'];
        $data_inicio = $tlb['data_inicio'];
        $data_fim = $tlb['data_fim'];
        $hora_fim = $tlb['hora_fim'];
        $url_evento = $tlb['url_evento'];
        $id_evento = $tlb['evento_id'];

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
        echo "<td><button type='button' class='btn btn-danger deletebtn'>Apagar</button></td>";
        echo "</tr>";
        $indice++;
    }
}
?>