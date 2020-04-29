<?php
//include "../conexao.php";
$sql = "select * from tipoConvidado;";
$result = mysqli_query($conexao, $sql);
while ($tlb = mysqli_fetch_array($result)) {
    $idTipoConvidado = $tlb['idTipoConvidado'];
    $tipo_convidado = $tlb['tipo_convidado'];
    echo "<option value=$idTipoConvidado>";
    echo "$tipo_convidado";
    echo "</option>";
}
?>