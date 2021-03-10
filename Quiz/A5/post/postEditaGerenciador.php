<?php

    include('../banco/conexaoBD.php');

    $conn = abrirConexao();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $loginNovo = $_POST['loginNovo'];
    $senhaNova = $_POST['senhaNova'];
    
    $sql = 'UPDATE gerenciador SET login = "'.$loginNovo.'", senha = "'.$senhaNova.'" WHERE gerenciador.login = "'.$login.'" 'AND' "'.$senha.'"';
    $mysqli->query( $sql ) or die("erro ao atualizar gerenciador");

    header('Location: ../view/perfilEdit.php');
?>