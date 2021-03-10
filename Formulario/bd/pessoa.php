<?php
	class Pessoa{
		public $nome;
        public $cpf;
        public $sexo;
        public $reservista;
        public $perfil;
        public $email;
        public $senha;

		function __construct($n, $i){
			$this->nome = $n;
            $this->cpf = $c;
            $this->sexo = $sx;
            $this->reservista = $r;
            $this->perfil = $p;
            $this->email = $e;
            $this->senha = $s;
		}	
	}
?>
