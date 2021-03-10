<?php 

    class questaoBloco extends questao extends bloco extends evento {
        
        public $questao_id;
        public $bloco_id;
        public $evento_id;
        
        function __construct($questao_id, $bloco_id, $evento_id){
            $this->equipe_id = $equipe_id;
            $this->bloco_id = $bloco_id;
            $this->evento_id = $evento_id;
		}	

        public function getEquipe_id()
        {
            return $this->equipe_id;
        }

        public function setEquipe_id($equipe_id)
        {
            $this->equipe_id = $equipe_id;
        }
        
        public function getMembro_id()
        {
            return $this->bloco_id;
        }

        public function setMembro_id($bloco_id)
        {
            $this->bloco_id = $bloco_id;
        }

        public function getEvento_id()
        {
            return $this->evento_id;
        }

        public function setEvento_id($evento_id)
        {
            $this->evento_id = $evento_id;
        }
    }
?>    