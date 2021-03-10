<?php

    include("conect_bd.php");
    include("Model/pessoa.php");
    include("Model/pessoaDAO.php");
    
    $nome = "Mauricio";
    $cpf = "12345";
    $sexo = "Masculino";
    $reservista = "98754";
    $perfil = "foto";
    $email = "jrninho20002@hotmail.com";
    $senha = "123456789";

    $p = new Pessoa(0,$nome, $cpf, $sexo, $reservista, $perfil, $email, $senha);
    $pDao = new PessoaDAO($p);
	$pDao->inserirPessoa();

?>