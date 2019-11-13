<?php
class Tipo_Convidado_Model{
    private $idTipoConvidado;
    private $tipo_convidado;

    function __construct(){
        $this->idTipoConvidado = 0;
        $this->tipo_convidado = "sem classificação";
    }

    function getIdTipoConvidado(){
        return $this->idTipoConvidado;
    }
    function setIdTipoConvidado($idTipoConvidado){
        $this->idTipoConvidado = $idTipoConvidado;
    }

    function getTipoConvidado(){
        return $this->tipo_convidado;
    }
    function setTipoConvidado($tipo_convidado){
        trim($tipo_convidado);
        $this->tipo_convidado = $tipo_convidado;
    }
}

?>