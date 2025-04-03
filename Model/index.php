<?php 
    class User{
        private $Dados;

        public function __construct(){
            $this->Dados=[
                "nome"=> "Alberto",
                "Sexo"=>"M",
                "DataNasc"=> "16/04/2021"
    
            ];
        }

        public function getDados(){
            return $this->Dados;
        }
    }