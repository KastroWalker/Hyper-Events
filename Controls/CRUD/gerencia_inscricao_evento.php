<?php 
    include '../conexao.php';
    session_start();
    $acao = $_REQUEST['acao'];
    #echo $acao."<br>";

    if ($acao == "cadastrar") {
        $user_id = $_SESSION['id'];
        $evento_id = $_POST['evento_id'];
        date_default_timezone_set('America/Fortaleza');
        $hora = date('H:i:s');
        $data = date('Y-m-d');

        #echo "user_id: ".$user_id."<br>";
        #echo "evento_id: ".$evento_id."<br>";
        
        $sql = "insert into inscricao_evento (evento_id, user_id, data_inscricao_evento, hora_inscricao_evento) values ('{$evento_id}', '{$user_id}', '{$data}', '{$hora}');";

        if($conexao->query($sql) === TRUE){
            $_SESSION['user_cadastrado'] = true;
            echo "Cadastrado com sucesso";
        }else{
            $_SESSION['user_nao_cadastrado'] = true;
            echo "Erro ao cadastrar ".mysqli_error($conexao);
        }
        header('../../views/participante/info_evento.php?id=$evento_id');
    }
?>