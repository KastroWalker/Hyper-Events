<?php
class Local_Atividade_Model{
    private $local_id;
    private $evento_id;
    private $nome_local;

    function __construct(){
        $this->local_id = 0;
        $this->evento_id = 0;
        $this->nome_local = "Sem nome";
    }

    function getLocalId(){
        return $this->local_id;
    }
    function setLocalId($local_id){
        $this->local_id = $local_id;
    }

    function getEventoId(){
        return $this->evento_id;
    }
    function setEventoId($evento_id){
        $this->evento_id = $evento_id;
    }

    function getNomeLocal(){
        return $this->nome_local;
    }
    function setNomeLocal($nome_local){
        trim($nome_local);
        $this->nome_local = $nome_local;
    }
}

?>