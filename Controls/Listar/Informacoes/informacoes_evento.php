<?php
  $evento_id = $_SESSION['id_evento'];
  $sql = "select * from eventos where evento_id = '{$evento_id}';";
  $result = mysqli_query($conexao, $sql);
  $row = mysqli_fetch_array($result);

  echo "
  <table class='table table-bordered table-hover'>
    <dl class='row'>";
    escreve_linha("ID: ", $row['evento_id']);
    escreve_linha("Titulo: ", $row['titulo_evento']);
    escreve_linha("Descrição: ", $row['descricao']);
    escreve_linha("Vagas: ", $row['qtde_vagas_evento']);
    escreve_linha("Site: ", $row['url_evento']);
    escreve_linha("Data do Inicio: ", $row['data_inicio']);
    escreve_linha("Data do Fim: ", $row['data_fim']);
    escreve_linha("Hora de Inicio: ", $row['hora_inicio']);
    escreve_linha("Hora de fim: ", $row['hora_fim']);
    escreve_linha("Email do organizador: ", $row['email']);  
  echo "
    </dl>
  </table>";
?>