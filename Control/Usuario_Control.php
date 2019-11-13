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
            $sql = "INSERT INTO usuario (idTipoUsuario, nome, sexo, cpf, data_nasc, usuario, senha, email, contato) VALUES ($idTipoUsuario, $nome, $sexo, $cpf, $data_nasc, $usuario, $senha, $email, $contato);";
            $d = $this->con->Conectar();
            $dados = $d->prepare($sql);
            $dados->bindValue($idTipoUsuario, $this->dados->getIdTipoUsuario());
            $dados->bindValue($nome, $this->dados->getNome());
            $dados->bindValue($sexo, $this->dados->getSexo());
            $dados->bindValue($cpf, $this->dados->getCpf());
            $dados->bindValue($data_nasc, $this->dados->getDataNascimento());
            $dados->bindValue($usuario, $this->dados->getUsuario());
            $dados->bindValue($senha, $this->dados->getSenha());
            $dados->bindValue($email, $this->dados->getEmail());
            $dados->bindValue($contato, $this->dados->getContato());
            $dados->execute();
            header("");
        }
    }
?>
