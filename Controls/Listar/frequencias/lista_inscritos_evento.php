<?php 
    include '../../conexao.php';
    session_start();
    $id = $_SESSION['id_evento'];

    use Dompdf\Dompdf;

    require_once("../../../lib/dompdf/autoload.inc.php");

    $sql = "select usuario.nome, eventos.titulo_evento, inscricao_evento.* from inscricao_evento inner join eventos on (inscricao_evento.evento_id = eventos.evento_id) inner join usuario on (inscricao_evento.user_id = usuario.user_id) where eventos.evento_id = $id;";

    $result = mysqli_query($conexao, $sql);
    $indice = 1;
    while ($tlb = mysqli_fetch_array($result)) {
        $nome_inscrito = $tlb['nome'];
        $titulo = $tlb['titulo_evento'];
        $matricula = $tlb['matricula'];
        $evento_id = $tlb['evento_id'];
        $user_id = $tlb['user_id'];
        $data_inscricao_evento = $tlb['data_inscricao_evento'];
        $hora_inscricao_evento = $tlb['hora_inscricao_evento'];
    
        echo "<tr>";
        echo "<td>".$indice."</td>";
        echo "<td>".$matricula."</td>";
        echo "<td>".$nome_inscrito."</td>";
        echo "<td style='display: none;'>".$titulo."</td>";
        echo "<td style='display: none;'>".$evento_id."</td>";
        echo "<td style='display: none;'>".$user_id."</td>";
        echo "<td style='display: none;'>".$data_inscricao_evento."</td>";
        echo "<td style='display: none;'>".$hora_inscricao_evento."</td>";
        echo "</tr>";
        $indice++;
    }
?>