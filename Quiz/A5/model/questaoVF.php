<?php

    class questaoVF extends questao{
        
        public $questao_id;
        public $alternativaCorreta;
        
        function __construct($questao_id, $alternativaCorreta){
            $this->questao_id = $questao_id;
            $this->alternativaCorreta = $alternativaCorreta;
        }

        public function getId()
        {
            return $this->questoes_id;
        }

        public function setId($questoes_id)
        {
            $this->questoes_id = $questoes_id;
        }

        public function getAlternativaCorreta()
        {
            return $this->alternativaCorreta;
        }

        public function setRubrica($alternativaCorreta)
        {
            $this->alternativaCorreta = $alternativaCorreta;
        }
    }

?>