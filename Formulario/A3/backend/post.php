<?php
    include("conect_bd.php");
	include("Model/pessoa.php");
    include("Model/pessoaDAO.php");
    
	$nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $sexo = $_POST["sexo"];
    $reservista = $_POST["reservista"];
    $perfil = $_FILES["perfil"];
    $target_file = "perfils/";
    $namefile = $target_file."". uniqid() ."".$perfil["name"];
    $email= $_POST["email"];
    $_senha= $_POST["senha"];

    if(move_uploaded_file($perfil["tmp_name"], $namefile)){

        $p = new Pessoa(1, $nome, $cpf, $sexo, $reservista, $namefile, $email, $_senha );
        $pDao = new PessoaDAO($p);
        
        //Inserindo uma pessoa
        echo $pDao->inserirPessoa();
        
    } else{
        echo "error";
    }

?>
