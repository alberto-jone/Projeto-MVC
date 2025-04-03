<?php
    // include_once "../Model/index.php";
    class User{
        private $Dados;
        // private $model;

        public function __construct(){
            // User User::$model;
            // $this->Dados=$this->model->getDados();
            $this->Dados=[
                "nome"=> "Alberto",
                "Sexo"=>"M",
                "DataNasc"=> "16/04/2021"
    
            ];
        }

        public function getDados(){
            return $this->Dados;
        }

        public function index($dado): void {
            extract(['dado' => $dado]); // Converte chave-valor do array em variáveis
            require "./views/index.php";
        }
        
    }