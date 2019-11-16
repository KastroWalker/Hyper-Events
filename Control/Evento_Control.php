<?php
    include 'funcoes.php';
    include '../Models/Evento_Model.php';
    include '../bd/conexao.php';

    class Evento_Control{
        private $dados;
        private $con;

        function __construct(){
            $this->dados = new Evento_Model();
            $this->con = new Conexao();
        }

        function View($id){
            echo $id;
        }
    }
?>