<?php
$evento_id = $_SESSION['id_evento'];
$sql = "select convidado.nome_convidado, convidado.idConvidado, eventos.evento_id,
from convidado
inner join eventos on (convidado.evento_id = eventos.evento_id)
and eventos.evento_id = $evento_id
and convidado.idTipoConvidado = 1;";

$result = mysqli_query($conexao, $sql);
while($tlb = mysqli_fetch_array($result)){
	$idConvidado = $tlb['idConvidado'];
	$nome_convidado = $tlb['nome_convidado'];
	echo "<option value=$idConvidado>";
	echo "$nome_convidado";
	echo "</option>";
}
?>