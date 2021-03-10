<?php 

    class Evento {
        
        public $id;
        public $nome;
        public $semestre;
        
        function __construct($id, $nome, $semestre){
            $this->id = $id;
            $this->nome = $nome;
            $this->semestre = $semestre;
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

        public function getSemestre()
        {
            return $this->semestre;
        }

        public function setSemestre($semestre)
        {
            $this->semestre = $semestre;
        }
    }
?>

