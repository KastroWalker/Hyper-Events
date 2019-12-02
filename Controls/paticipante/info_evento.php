<?php
    /* Pegando informações do Evento */
    $sql = "select * from eventos where evento_id = $id";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);
    
    $titulo = $row['titulo_evento'];
    $descricao = $row['descricao'];
    $site = $row['url_evento'];
    $email = $row['email'];

    /* Pegando informações dos Convidados */
    function lista_convidados($conexao, $id){
        $sql = "select * from convidado where evento_id = $id";
        $result = mysqli_query($conexao, $sql);

        $indice = 1;
        while ($tlb = mysqli_fetch_array($result)) {
            $id = $tlb['idConvidado'];
            $nome = $tlb['nome_convidado'];
            $descricao = $tlb['descricao'];
            $email = $tlb['email'];
            $contato = $tlb['contato'];

            echo "<tr>";
            echo "<td>".$indice."</td>";
            #echo "<td style='display: none;'>$id</td>";
            echo "<td><a class=ministrante href=#info_convidado>".$nome."</a></td>";
            echo "<td style='display: none;'>$descricao</td>";
            echo "<td style='display: none;'>$email</td>";
            echo "<td style='display: none;'>$contato</td>";
            echo "</tr>";
            $indice++;
        }
    }

    /* Pegando informações das Atividades */
    function lista_atividades($conexao, $id){
        $sql = "select atividade_id from atividade where evento_id = $id";
        $result_row = mysqli_query($conexao, $sql);
        
        while($tlb = mysqli_fetch_array($result_row)){
            $id_atividade = $tlb['atividade_id'];
            #echo "$id_atividade";
            $sql = "select atividade.*, tipoAtividade.tipo_atividade, convidado.nome_convidado, local_atividade.nome_local from atividade inner join tipoAtividade on (atividade.idTipoAtividade = tipoAtividade.idTipoAtividade) inner join convidado on (atividade.idConvidado = convidado.idConvidado) inner join eventos on (atividade.evento_id = eventos.evento_id) inner join local_atividade on (atividade.local_id = local_atividade.local_id) and eventos.evento_id = $id and atividade.atividade_id = $id_atividade;";
            
            $result = mysqli_query($conexao, $sql);

            $indice = 1;
            while ($row = mysqli_fetch_array($result)) {
                $nome = $row['titulo_atividade'];
                $id = $row['atividade_id'];
                $tipo_atividade = $row['tipo_atividade'];
                $vagas = $row['qtde_vagas_atividade'];
                $valor = $row['valor'];
                $descricao = $row['descricao'];
                $data = $row['data'];
                $nome_local = $row['nome_local']; 
                $inicio = $row['inicio'];
                $convidado  = $row['nome_convidado'];
                echo "<tr>";
                echo "<td>".$indice."</td>";
                #echo "<td style='display: none;'>$id</td>";
                echo "<td><a class=atividade href=#info_atividade>".$nome."</a></td>";
                echo "<td style='display: none;'>$tipo_atividade</td>";
                echo "<td style='display: none;'>$vagas</td>";
                echo "<td style='display: none;'>$valor</td>";
                echo "<td style='display: none;'>$descricao</td>";
                echo "<td style='display: none;'>$data</td>";
                echo "<td style='display: none;'>$nome_local</td>";
                echo "<td style='display: none;'>$inicio</td>";
                echo "<td style='display: none;'>$convidado</td>";
                echo "</tr>";
                $indice++;
            }
        }
    }
?>