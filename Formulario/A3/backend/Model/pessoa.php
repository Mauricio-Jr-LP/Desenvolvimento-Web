<?php

	class Pessoa{
        public $id;
		public $nome;
        public $cpf;
        public $sexo;
        public $reservista;
        public $perfil;
        public $email;
        public $senha;

		function __construct($id, $nome, $cpf, $sexo, $reservista, $perfil, $email, $senha){
            $this->id = $id;
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->sexo = $sexo;
            $this->reservista = $reservista;
            $this->perfil = $perfil;
            $this->email = $email;
            $this->senha = $senha;
		}	
	}
?>
