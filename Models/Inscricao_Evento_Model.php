<?php
class Inscricao_Evento_Model{
    private $matricula;
    private $evento_id;
    private $user_id;
    private $data_inscricao_evento;
    private $hora_inscricao_evento;

    function __construct(){
        $this->matricula = 0;
        $this->evento_id = 0;
        $this->user_id = 0;
        $this->data_inscricao_evento = "aaaa/mm/dd";
        $this->hora_inscricao_evento = "00:00";
    }

    function getMatricula(){
        return $this->matricula;
    }
    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    function getEventoId(){
        return $this->evento_id;
    }
    function setEventoId($evento_id){
        $this->evento_id = $evento_id;
    }

    function getUserId(){
        return $this->user_id;
    }
    function setUserId($user_id){
        $this->user_id = $user_id;
    }

    function getDataInscricaoEvento(){
        return $this->data_inscricao_evento;
    }
    function setDataInscricaoEvento($data_inscricao_evento){
        $this->data_inscricao_evento = $data_inscricao_evento;
    }

    function getHoraInscricaoEvento(){
        return $this->hora_inscricao_evento;
    }
    function setHoraInscricaoEvento($hora_inscricao_evento){
        $this->hora_inscricao_evento = $hora_inscricao_evento;
    }
}

?>