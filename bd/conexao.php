<?php
    class Conexao
    {
        private $con;
        function __construct()
        {
            try {
                $this->con = new PDO("mysql:hostname=localhost;dbname=HyperEvents", "root", "");
            } catch (PDOException $e) {
                echo ("Erro: ".$e);
            }
        }
        function Conectar(){
            return $this->con;
        }
    }
    
?>