<?php
class Tipo_Usuario_Model{
    private $idtipo_usuario;
    private $nome;

    function __construct(){
        $this->idtipo_usuario = 0;
        $this->nome = "Sem nome";
    }

    function getIdTipoUsuario(){
        return $this->idtipo_usuario;
    }
    function setIdTipoUsuario($idtipo_usuario){
        $this->idtipo_usuario = $idtipo_usuario;
    }

    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        trim($nome);
        $this->nome = $nome;
    }
}

?>