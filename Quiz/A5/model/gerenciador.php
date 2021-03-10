<?php

    class Gerenciador {
        
        public $id;
        public $login;
        public $senha;

        function __construct($id, $login, $senha){
            $this->id = $id;
            $this->login = $login;
            $this->senha = $senha;
		}	
        
        public function getId()
        {
            return $this->id;
        }

        public function getLogin()
        {
            return $this->login;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setLogin($login)
        {
            $this->login = $login;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;
        }
    }
?>