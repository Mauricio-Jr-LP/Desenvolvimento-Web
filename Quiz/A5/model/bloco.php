<?php 

    class bloco extends evento {
        
        public $id;
        public $nome;
        public $evento_id;
        
        function __construct($id, $nome, $evento_id){
            $this->id = $id;
            $this->nome = $nome;
            $this->evento_id = $evento_id;
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

        public function getEvento_id()
        {
            return $this->evento_id;
        }

        public function setSemestre($evento_id)
        {
            $this->evento_id = $evento_id;
        }
    }
?>

