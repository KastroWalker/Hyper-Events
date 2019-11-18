<?php
    class Evento_Model{
        private $evento_id;
        private $user_id;
        private $titulo_evento;
        private $descricao;
        private $qtde_vagas_evento;
        private $url_evento;
        private $data_inicio;
        private $data_fim;
        private $hora_inicio;
        private $hora_fim;
        private $email;

        function __construct(){
            $this->evento_id = 0;
            $this->user_id = 0;
            $this->titulo_evento = "vazio";
            $this->descricao = "vazia";
            $this->qtde_vagas_evento = 0;
            $this->url_evento = "www.url.com";
            $this->data_inicio = "aaaa/mm/dd";
            $this->data_fim = "aaaa/mm/dd";
            $this->hora_inicio = "00:00";
            $this->hora_fim = "00:00";
            $this->email = "aaaa@mail.com";
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
            trim($user_id);
            $this->user_id = $user_id;
        }

        function getTituloEvento(){
            return $this->titulo_evento;
        }
        function setTituloEvento($titulo_evento){
            trim($titulo_evento);
            $this->titulo_evento = $titulo_evento;
        }

        function getDescricao(){
            return $this->descricao;
        }
        function setDescricao($descricao){
            trim($descricao);
            $this->descricao = $descricao;
        }

        function getQtdeVagasEvento(){
            return $this->qtde_vagas_evento;
        }
        function setQtdeVagasEvento($qtde_vagas_evento){
            $this->qtde_vagas_evento = $qtde_vagas_evento;
        }

        function getUrlEvento(){
            return $this->url_evento;
        }
        function setUrlEvento($url_evento){
            trim($url_evento);
            $this->url_evento = $url_evento;
        }

        function getDataInicio(){
            return $this->data_inicio;
        }
        function setDataInicio($data_inicio){
            $this->data_inicio = $data_inicio;
        }

        function getDataFim(){
            return $this->data_fim;
        }
        function setDataFim($data_fim){
            $this->data_fim = $data_fim;
        }

        function getHoraInicio(){
            return $this->hora_inicio;
        }
        function setHoraInicio($hora_inicio){
            $this->hora_inicio = $hora_inicio;
        }

        function getHoraFim(){
            return $this->hora_fim;
        }
        function setHoraFim($hora_fim){
            $this->hora_fim = $hora_fim;
        }

        function getEmail(){
            return $this->email;
        }
        function setEmail($email){
            trim($email);
            $this->email = $email;
        }
    }
?>