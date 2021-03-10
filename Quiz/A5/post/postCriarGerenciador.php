<?php 

    include('../banco/conexaoBD.php');
    include('../model/gerenciador.php');
    
    $conexao = abrirConexao();

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = 'INSERT INTO gerenciador(id, login, senha) VALUES(
        null, "'.$login.'", "'.$senha.'")';
    $mysqli->query( $sql ) or die("erro ao cadastra gerenciador");

    header('Location: ../view/loginGerenciador.php');
?>