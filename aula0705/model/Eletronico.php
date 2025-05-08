<?php
    class Eletronico extends Produto { // Herança
        private $voltagem;
        
        public function __construct($descricao, $valor, $qtdEstoque, $voltagem){
            parent::__construct($descricao, $valor, $qtdEstoque); //"parent", o "super" do java
            $this->voltagem = $voltagem;
        }

        public function getVoltagem(){
            return $this->voltagem;
        }

        public function setVoltagem($v){
            $this->voltagem = $v;
        }

        public function __toString(){
            return parent::__toString()." Eletronico: Voltagem: {$this->voltagem}";
        } 
    }
?>