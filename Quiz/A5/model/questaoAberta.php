<?php 

    class QuestaoAberta extends Questao{
        
        public $questoes_id;
        public $rubrica;
        
        function __construct($questoes_id, $rubrica){
            $this->questoes_id = $questoes_id;
            $this->rubrica = $rubrica;
        }
        
        public function getId()
        {
            return $this->id;
        }

        public function setId($questoes_id)
        {
            $this->questoes_id = $questoes_id;
        }

        public function getRubrica()
        {
            return $this->rubrica;
        }

        public function setRubrica($rubrica)
        {
            $this->rubrica = $rubrica;
        }
    }
?>