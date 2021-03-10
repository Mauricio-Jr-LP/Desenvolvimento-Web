<?php 
    
    class Questao {
        public $id;
        public $nome;
        public $texto;
        public $conexao;

        function __construct($id, $nome, $texto){
            $this->id = $id;
            $this->nome = $nome;
            $this->texto = $texto;
        }
        
        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }
        
        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getTexto()
        {
            return $this->texto;
        }

        public function setTexto($texto)
        {
            $this->texto = $texto;
        }
    }
?>