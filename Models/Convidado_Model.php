<?php
class Convidado_Model{
    private $idTipoConvidado;
    private $evento_id;
    private $nome_convidado;
    private $descricao;
    private $email;
    private $contato;

    function __construct(){
        $this->idTipoConvidado = 0;
        $this->evento_id = 0;
        $this->nome_convidado = "Sem Nome";
        $this->descricao = "Sem descrição";
        $this->email = "sememail@mail.com";
        $this->contato = "00 98877-6655";
    }

    function getIdTipoConvidado(){
        return $this->idTipoConvidado;
    }
    function setIdTipoConvidao($idTipoConvidado){
        $this->idTipoConvidado = $idTipoConvidado;
    }

    function getEventoId(){
        return $this->evento_id;
    }
    function setEventoId($evento_id){
        $this->evento_id = $evento_id;
    }

    function getNomeConvidado(){
        return $this->nome_convidado;
    }
    function setNomeConvidado($nome_convidado){
        $nome_convidado = trim($nome_convidado);
        $this->nome_convidado = $nome_convidado;
    }

    function getDescricao(){
        return $this->descricao;
    }
    function setDescricao($descricao){
        $descricao = trim($descricao);
        $this->descricao = $descricao;
    }

    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $email = trim($email);
        $this->email = $email;
    }

    function getContato(){
        return $this->contato;
    }
    function setContato($contato){
        $contato = trim($contato);
        $contato = str_replace("-", "", $contato);
        $contato = str_replace(" ", "", $contato);
        $this->contato = $contato;
    }

}

?>