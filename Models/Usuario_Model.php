<?php
<<<<<<< HEAD
    Class Usuario_Model{
        private $user_id;
        private $idTipoUsuario;
        private $nome;
        private $sexo;
        private $cpf;
        private $data_nasc;
        private $usuario;
        private $senha;
        private $email;
        private $contato;

        function __construct(){
            $this->user_id = 0;
            $this->idTipoUsuario;
            $this->nome = "vazio";
            $this->sexo = 'u';
            $this->cpf = "000.000.000-00";
            $this->data_nasc = "aaaa/mm/dd";
            $this->usuario = "vazio";
            $this->senha = "semsenha";
            $this->email = "email@mail.com";
            $this->contato = "00123456789";
        }

        function getUserId(){
            return $this->user_id;
        }

        function getIdTipoUsuario(){
            return $this->idTipoUsuario;
        }

        function getNome(){
            return $this->nome;
        }

        function getSexo(){
            return $this->sexo;
        }

        function getCpf(){
            return $this->cpf;
        }

        function getDataNascimento(){
            return $this->data_nasc;
        }

        function getUsuario(){
            return $this->usuario;
        }

        function getSenha(){
            return $this->senha;
        }

        function getEmail(){
            return $this->email;
        }

        function getContato(){
            return $this->contato;
        }


        function setUserId($user_id){ 
            $this->user_id = $user_id;
        }
        function setIdTipoUsuario($idTipoUsuario){ 
            $this->idTipoUsuario = $idTipoUsuario;
        }
        function setNome($nome){ 
            $this->nome = $nome;
        }
        function setSexo($sexo){ 
            $this->sexo = $sexo;
        }
        function setCpf($cpf){ 
            $this->cpf = $cpf;
        }
    }
?>
=======
class Usuario_Model
{
    private $user_id;
    private $idTipoUsuario;
    private $nome;
    private $sexo;
    private $cpf;
    private $data_nasc;
    private $usuario;
    private $senha;
    private $email;
    private $contato;
    
    function __construct()
    {
        $this->user_id = 0;
        $this->idTipoUsuario = 0;
        $this->nome = "vazio";
        $this->sexo = 'u';
        $this->cpf = "000.000.000-00";
        $this->data_nasc = "aaaa/mm/dd";
        $this->usuario = "vazio";
        $this->senha = "semsenha";
        $this->email = "email@mail.com";
        $this->contato = "00123456789";
    }
    
    function getUserId(){
        return $this->user_id;
    }
    function setUserId($user_id){ 
        $this->user_id = $user_id;
    }
    
    function getIdTipoUsuario(){
        return $this->idTipoUsuario;
    }
    function setIdTipoUsuario($idTipoUsuario){ 
        $this->idTipoUsuario = $idTipoUsuario;
    }
    
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){ 
        trim($nome);
        $this->nome = $nome;
    }
    
    function getSexo(){
        return $this->sexo;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }
    
    function getCpf(){
        return $this->cpf;
    }
    function setCpf($cpf){
        $this->cpf = $cpf;
    }

    function getDataNascimento(){
        return $this->data_nasc;
    }
    function setDataNascimento($data_nasc){
        $this->data_nasc = $data_nasc;
    }

    function getUsuario(){
        return $this->usuario;
    }
    function setUsuario($usuario){
        trim($usuario);
        $this->usuario = $usuario;
    }

    function getSenha(){
        return $this->senha;
    }
    function setSenha($senha){
        $this->senha = $senha;
    }

    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        trim($email);
        $this->email = $email;
    }

    function getContato(){
        return $this->contato;
    }
    function setContato($contato){
        $this->contato = $contato;
    }

}
>>>>>>> fc481985c5137fe0b461d9b5abba49d84ce6b2db
