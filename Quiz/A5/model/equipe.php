<?php 

    class equipe extends evento{
        
        public $id;
        public $nome;
        public $evento_id;
        public $login;
        public $senha;
        
        function __construct($id, $nome, $evento_id, $login, $senha){
            $this->id = $id;
            $this->nome = $nome;
            $this->evento_id = $evento_id;
            $this->login = $login;
            $this->senha = $senha;
        }
        
        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

    }
?>