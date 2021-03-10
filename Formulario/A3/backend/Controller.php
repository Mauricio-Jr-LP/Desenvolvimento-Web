<?php

include("conect_bd.php");
include("pessoa.php");
include("PessoaDAO.php");

$req = $_POST["requisicao"];

if($req == "getallpessoas"){
	getAllPessoas();
	
}else if($req == "inserirpessoa"){
	
	$nome      = $_POST['nome'];
    $cpf       = $_POST['cpf'];
    $sexo      = $_POST['sexo'];
    $reservista= $_POST['reservista'];
    $perfil    = $_POST['perfil'];
    $email     = $_POST['email'];
    $senha     = $_POST['senha'];
	
	insertPessoa($nome, $cpf, $sexo, $reservista, $perfil, $email, $senha);
	
}else if($req == "deletarpessoa"){
	$id =  $_POST["id"];
	deletePessoa($id);
}



function getAllPessoas(){
	$pDao = new PessoaDao(null);
	$arrPessoas = $pDao->getAllPessoas();
	echo json_encode( $arrPessoas );
}

function insertPessoa($nome, $idade){
	$pDao = new PessoaDao(new Pessoa(-1, $nome, $idade));
	$arrPessoas = $pDao->inserirPessoa();	
	echo json_encode( $arrPessoas );
}

function deletePessoa($id){
	$pDao = new PessoaDao( new Pessoa($id, "", "") );
	$arrPessoas = $pDao->deletarPessoa();
	echo json_encode( $arrPessoas );
}

?>