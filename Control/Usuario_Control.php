<?php
    include "../Models/Usuario_Model.php";
    include "../bd/conexao.php";
    class Usuario_Control{
        private $dados;
        private $con;

        function __construct(){
            $this->dados = new Usuario_Model();
            $this->con = new Conexao();
        }

        function read($user){
            try{
                $sql = "SELECT COUNT(*) FROM usuario WHERE usuario = '$user';";
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

        function add($idTipoUsuario, $nome, $sexo, $cpf, $data_nasc, $usuario, $senha, $email, $contato){
            $this->dados->setIdTipoUsuario($idTipoUsuario);
            $this->dados->setNome($nome);
            $this->dados->setSexo($sexo);
            $this->dados->setCpf($cpf);
            $this->dados->setDataNascimento($data_nasc);
            $this->dados->setUsuario($usuario);
            $this->dados->setSenha($senha);
            $this->dados->setEmail($email);
            $this->dados->setContato($contato);
            try{
                $sql = "INSERT INTO usuario (idtipo_usuario, nome, sexo, cpf, data_nasc, usuario, senha, email, contato) VALUES (:idTipoUsuario, :nome, :sexo, :cpf, :data_nasc, :usuario, :senha, :email, :contato);";
                $d = $this->con->Conectar();
                $dados = $d->prepare($sql);
                $dados->bindValue(":idTipoUsuario", $this->dados->getIdTipoUsuario());
                $dados->bindValue(":nome", $this->dados->getNome());
                $dados->bindValue(":sexo", $this->dados->getSexo());
                $dados->bindValue(":cpf", $this->dados->getCpf());
                $dados->bindValue(":data_nasc", $this->dados->getDataNascimento());
                $dados->bindValue(":usuario", $this->dados->getUsuario());
                $dados->bindValue(":senha", $this->dados->getSenha());
                $dados->bindValue(":email", $this->dados->getEmail());
                $dados->bindValue(":contato", $this->dados->getContato());
                $dados->execute();
                if($dados->rowCount() == 1){
                    $_SESSION['user_cadastrado'] = true;
                }else{
                    $_SESSION['erro_cadastrado'] = true;
                }
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
                $_SESSION['erro_cadastrado'] = true;
                return $e->getMessage();
            }
        }
    }
    /*Dados Pessoais*/
    $nome = $_POST['campo_nome'];
    $data_nasc = $_POST['campo_data_nasc'];
    $sexo = $_POST['campo_sexo'];
    $contato = $_POST['campo_telefone'];
    $cpf =  $_POST['campo_cpf'];
    /*Dados da conta*/
    $email = $_POST['campo_email'];
    $user = $_POST['campo_user'];
    $senha = $_POST['campo_senha'];
    $tipo_user = $_POST['tipo_user'];

    $obj_user = new Usuario_Control();

    $cadastrado = $obj_user->read($user);
    echo "$cadastrado";
    if($cadastrado == 0){
        $obj_user->add($tipo_user, $nome, $sexo, $cpf, $data_nasc, $user, $senha, $email, $contato);
    }else{
        $_SESSION['usuario_existe'] = true;
    }

    header('Location: ../View/cadastro.php');
?>