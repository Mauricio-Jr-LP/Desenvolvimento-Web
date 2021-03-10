<?php

	class PessoaDAO{
		
		public $pessoa;
		
		function __construct($p){
			$this->pessoa = $p;
		}
		
		function inserirPessoa(){	
			abrirConexao();
			global $mysqli;
			
			$sql = 'INSERT INTO pessoa(id, nome, cpf, sexo, reservista, pathimagem, email, senha) VALUES(
				null, "'.$this->pessoa->nome.'", "'.$this->pessoa->cpf.'", 
				"'.$this->pessoa->sexo.'", "'.$this->pessoa->reservista.'", "'
			.$this->pessoa->perfil.'", "'.$this->pessoa->sexo.'", "'
			.$this->pessoa->senha.'")';
			
			
			$resultado = $mysqli->query( $sql );
			
			fecharConexao();
			
			return $resultado;
			
		}	
		
		function deletarPessoa(){
			abrirConexao();
			global $mysqli;
			
			$sql = "DELETE FROM PESSOA WHERE id = ". $this->pessoa->id;
			$resultado = $mysqli->query( $sql );
			
			fecharConexao();
			return $resultado;
			
		}
		
		
		function getAllPessoas(){
			abrirConexao();
			global $mysqli;
			
			$sql = 'SELECT * FROM pessoa ORDER BY nome';
			$resultado = $mysqli->query( $sql );
			
			$row1 = $resultado->fetch_all(MYSQLI_ASSOC);
			$array = array();
			for($i = 0; $i  < count($row1); $i++){
				
				$p = new Pessoa( $row1[$i]["id"], $row1[$i]["nome"],$ro,w1[$i]["cpf"],$row1[$i]["sexo"],$row1[$i]["reservista"],$row1[$i]["perfil"],$row1[$i]["email"],$row1[$i]["senha"]);
				echo $row1[$i]["id"]."<br>";
				array_push($array, $p);
				
			}
			
			fecharConexao();
			
			return $array;
			
		}
		
	}
?>
