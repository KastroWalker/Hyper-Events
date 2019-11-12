<?php
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

    function getUserId()
    {
        return $this->user_id;
    }

    function getIdTipoUsuario()
    {
        return $this->idTipoUsuario;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getSexo()
    {
        return $this->sexo;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function getDataNascimento()
    {
        return $this->data_nasc;
    }

    function getUsuario()
    {
        return $this->usuario;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getContato()
    {
        return $this->contato;
    }


    function setUserId($user_id)
    { 
        $this->user_id = $user_id;
    }
    function setIdTipoUsuario($idTipoUsuario)
    { 
        $this->idTipoUsuario = $idTipoUsuario;
    }
    function setNome($nome)
    { 
        $this->nome = $nome;
    }
    function setSexo($sexo)
    { 
        $this->sexo = $sexo;
    }
    function setCpf($cpf)
    { 
        $this->cpf = $cpf;
    }
}
