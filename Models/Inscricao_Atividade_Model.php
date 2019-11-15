<?php
class Inscricao_Atividade_Model{
    private $atividade_id;
    private $matricula;
    private $data_inscricao_atividade;
    private $hora_inscricao_atividade;

    function __construct(){
        $this->atividade_id = 0;
        $this->matricula = 0;
        $this->data_inscricao_atividade = "aaaa/mm/dd";
        $this->hora_inscricao_atividade = "00:00";
    }

    function getAtividadeId(){
        return $this->atividade_id;
    }
    function setAtividadeId($atividade_id){
        $this->atividade_id = $atividade_id;
    }

    function getMatricula(){
        return $this->matricula;
    }
    function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    function getDataInscricaoAtividade(){
        return $this->data_inscricao_atividade;
    }
    function setDataInscricaoAtividade($data_inscricao_atividade){
        $this->data_inscricao_atividade = $data_inscricao_atividade;
    }

    function getHoraInscricaoAtividade()
    {
        return $this->hora_inscricao_atividade;
    }
    function setHoraInscricaoAtividade($hora_inscricao_atividade)
    {
        $this->hora_inscricao_atividade = $hora_inscricao_atividade;
    }
}

?>