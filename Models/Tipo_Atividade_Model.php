<?php
class Tipo_Atividade_Model{
    private $idTipoAtividade;
    private $tipo_atividade;

    function __construct(){
        $this->idTipoAtividade = 0;
        $this->tipo_atividade = "Sem Tipo";
    }

    function getIdTipoAtividade(){
        return $this->idTipoAtividade;
    }
    function setIdTipoAtividade($idTipoAtividade){
        $this->idTipoAtividade = $idTipoAtividade;
    }

    function getTipoAtividade(){
        return $this->tipo_atividade;
    }
    function setTipoAtividade($tipo_atividade){
        trim($tipo_atividade);
        $this->tipo_atividade = $tipo_atividade;
    }
}

?>