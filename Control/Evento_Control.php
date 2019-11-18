<?php
    session_start();
    include 'funcoes.php';
    include '../Models/Evento_Model.php';
    include '../bd/conexao.php';

    class Evento_Control{
        private $dados;
        private $con;

        function __construct(){
            $this->dados = new Evento_Model();
            $this->con = new Conexao();
        }

        function read($titulo){
            try{
                $sql = "select count(*) as total from eventos where titulo_evento = '$titulo';";
                $d = $this->con->Conectar();
                $dados=$d->prepare($sql);
                #$dados->bindValue(":user", $user);
                $dados->execute();
                return $dados->fetchColumn();
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
                return $e->getMessage();
            }
        }

        function add($user_id, $titulo, $descricao, $hora_inicio, $vagas, $hora_fim, $data_inicio, $data_fim, $email, $site){
            $this->dados->setUserId($user_id);
            $this->dados->setTituloEvento($titulo);
            $this->dados->setDescricao($descricao);
            $this->dados->setHoraInicio($hora_inicio);
            $this->dados->setQtdeVagasEvento($vagas);
            $this->dados->setHoraFim($hora_fim);
            $this->dados->setDataInicio($data_inicio);
            $this->dados->setDataFim($data_fim);
            $this->dados->setEmail($email);
            $this->dados->setUrlEvento($site);

            try{
                /* Ele não esta aceitando user os ':' no lugar do $ */
                
                #$sql = "insert into eventos (user_id, titulo_evento, descricao, qtde_vagas_evento, url_evento, data_inicio, data_fim, hora_inicio, hora_fim, email) values (':user_id', ':titulo', ':descricao', ':vagas', ':site', ':data_inicio', ':data_fim', ':hora_inicio', ':hora_fim', ':email');";
                $sql = "insert into eventos (user_id, titulo_evento, descricao, qtde_vagas_evento, url_evento, data_inicio, data_fim, hora_inicio, hora_fim, email) values ('$user_id', '$titulo', '$descricao', '$vagas', '$site', '$data_inicio', '$data_fim', '$hora_inicio', '$hora_fim', '$email');";
                $d = $this->con->Conectar();

                $dados = $d->prepare($sql);
                /*
                $dados->bindValue(":user_id", $this->dados->getUserId($user_id));
                $dados->bindValue(":titulo", $this->dados->getTituloEvento($titulo));
                $dados->bindValue(":descricao", $this->dados->getDescricao($descricao));
                $dados->bindValue(":vagas", $this->dados->getQtdeVagasEvento($vagas));
                $dados->bindValue(":site", $this->dados->getUrlEvento($site));
                $dados->bindValue(":data_inicio", $this->dados->getDataInicio($data_inicio));
                $dados->bindValue(":data_fim", $this->dados->getDataFim($data_fim));
                $dados->bindValue(":hora_fim", $this->dados->getHoraFim($hora_fim));
                $dados->bindValue(":hora_inicio", $this->dados->getHoraInicio($hora_inicio));
                $dados->bindValue(":email", $this->dados->getEmail($email));
                */
                $dados->execute();
                if($dados->rowCount() == 1){
                    $_SESSION['evento_cadastrado'] = true;
                    echo "certo";
                }else{
                    $_SESSION['erro_cadastrado'] = true;
                    print_r($dados->errorInfo());
                    echo "errado";
                }
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
                $_SESSION['erro_cadastrado'] = true;
                return $e->getMessage();
            }
        }
    }

    $obj_evento = new Evento_Control();

    $acao = $_REQUEST['acao'];

    @$titulo = trim($_POST['titulo']);
    @$descricao = trim($_POST['descricao']);
    @$hora_inicio = trim($_POST['hora_inicio']);
    @$vagas = trim($_POST['vagas']); 
    @$hora_fim = trim($_POST['hora_fim']);
    @$data_inicio = trim($_POST['inicio']);
    @$data_fim = trim($_POST['fim']);
    @$email = trim($_POST['email']);
    @$site = trim($_POST['site']);
    @$user_id = $_SESSION['user_id'];

    if($acao == "cadastrar"){
        $cadastrado = $obj_evento->read($titulo);
        #echo "$cadastrado";
        if($cadastrado == 0){
            $obj_evento->add($user_id, $titulo, $descricao, $hora_inicio, $vagas, $hora_fim, $data_inicio, $data_fim, $email, $site);
            echo "certo";
            header('Location: ../View/organizador/evento/cadastro_de_evento.php');
        }else{
            $_SESSION['evento_ja_cadastrado'] = true;
            header('Location: ../View/organizador/evento/cadastro_de_evento.php');
        }
    }
?>