<?php

    include('../banco/conexaoBD.php');
    
    $conn = abrirConexao();
    $nome = $_POST["evento"];
    $semestre = $_POST["semestre"];

    $sql = 'INSERT INTO evento(id, nome, semestre) VALUES(null, "'.$nome.'", "'.$semestre.'")';
    $mysqli->query( $sql ) or die("Erro ao cadastra semestre");

    header('Location: ../view/criarEvento.php');
?>