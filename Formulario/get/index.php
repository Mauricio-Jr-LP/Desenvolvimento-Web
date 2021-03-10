<?php
	include("bd/pessoa.php");
	
	$nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $sexo = $_GET["sexo"];
        $reservista= $_GET["reservista"];
        $perfil= $_GET["perfil"];
        $email= $_GET["email"];
        $senha= $_GET["senha"];
	
	echo "Dados vindos da URL <br>";
	echo $nome ."<br>"; 
    echo $cpf; 
    
	$p = new Pessoa($nome, $cpf);

?>
