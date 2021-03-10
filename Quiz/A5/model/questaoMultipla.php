<?php

    class QuestaoMultipla extends Questao{
        
        public $questao_id;
        public $alternativa_a;
        public $alternativa_b;
        public $alternativa_c;
        public $alternativa_d;
        public $alternativa_e;
        public $alternativa_correta;

        function __construct($questao_id, $alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e, $alternativa_correta){
            $this->questao_id = $questao_id;
            $this->alternativa_a = $alternativa_a;
            $this->alternativa_b = $alternativa_b;
            $this->alternativa_c = $alternativa_c;
            $this->alternativa_d = $alternativa_d;
            $this->alternativa_e = $alternativa_e;
            $this->alternativa_correta = $alternativa_correta;
		}
        
        public function getId()
        {
            return $this->id;
        }

        public function setId($questao_id)
        {
            $this->id = $questao_id;
        }

        public function getAlternativa_a()
        {
            return $this->alternativa_a;
        }

        public function setAlternativa_a($alternativa_a)
        {
            $this->alternativa_a = $alternativa_a;
        }

        public function getAlternativa_b()
        {
            return $this->alternativa_b;
        }

        public function setAlternativa_b($alternativa_b)
        {
            $this->alternativa_b = $alternativa_b;
        }

        public function getAlternativa_c()
        {
            return $this->alternativa_c;
        }

        public function setAlternativa_c($alternativa_c)
        {
            $this->alternativa_c = $alternativa_c;
        }

        public function getAlternativa_d()
        {
            return $this->alternativa_d;
        }

        public function setAlternativa_d($alternativa_d)
        {
            $this->alternativa_d = $alternativa_d;
        }

        public function getAlternativa_e()
        {
            return $this->alternativa_e;
        }

        public function setAlternativa_e($alternativa_e)
        {
            $this->alternativa_e = $alternativa_e;
        }

        public function getAlternativa_corretea()
        {
            return $this->alternativa_correta;
        }

        public function setAlternativa_correta($alternativa_correta)
        {
            $this->getAlternativa_corretea = $alternativa_correta;
        }
    }

?>