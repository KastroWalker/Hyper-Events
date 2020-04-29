<?php 
    include '../conexao.php';
    session_start();
    $acao = $_REQUEST['acao'];
    #echo $acao."<br>";

    function pega_matricula($evento_id, $user_id, $conexao){
        $sql = "select matricula from inscricao_evento where user_id = '{$user_id}' and evento_id = '{$evento_id}'";
        $result = mysqli_query($conexao, $sql);
        $row = mysqli_fetch_assoc($result);
        $matricula = $row['matricula'];
        return $matricula;
    }

    function diminui_vaga_atividade($atividade_id, $conexao){
        $sql = "select qtde_vagas_atividade from atividade where atividade_id = $atividade_id";
        $result = mysqli_query($conexao, $sql);
        $row = mysqli_fetch_assoc($result);
        $vagas_atividade = $row['qtde_vagas_atividade'];
        $vagas_atividade = (int)$vagas_atividade;
        $vagas_atividade = $vagas_atividade - 1;
        $vagas_atividade = (string)$vagas_atividade;

        echo "$vagas_atividade";
        
        $sql = "update atividade set qtde_vagas_atividade where atividade_id = $atividade_id";
        $result = mysqli_query($conexao, $sql);
        if(!$result){
            die('Erro: '.mysqli_error($conexao));
            return false;
        }else{
            return true;
        }
    }

    if ($acao == "cadastrar") {
        $user_id = $_SESSION['id'];
        $evento_id = $_POST['evento_id'];
        $atividade_id = $_POST['atividade_id'];
        date_default_timezone_set('America/Fortaleza');
        $hora = date('H:i:s');
        $data = date('Y-m-d');

        $matricula_id = pega_matricula($evento_id, $user_id, $conexao);
    
        echo "user_id: ".$user_id."<br>";
        echo "evento_id: ".$evento_id."<br>";
        echo "atividade_id: ".$atividade_id."<br>";

        $sql = "insert into inscricao_atividade (matricula, data_inscricao_atividade, hora_inscricao_atividade) values ('{$matricula_id}', '{$data}', '{$hora}');";

        if($conexao->query($sql) === TRUE){
            diminui_vaga_atividade($atividade_id, $conexao);
            $_SESSION['user_cadastrado'] = true;
            echo "Cadastrado com sucesso";
        }else{
            $_SESSION['user_nao_cadastrado'] = true;
            echo "Erro ao cadastrar ".mysqli_error($conexao);
        }
        #header('../../views/participante/info_evento.php?id=$evento_id');
    }
?>