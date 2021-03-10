<?php

    include('../banco/conexaoBD.php');
    
    $conn = abrirConexao();
    $evento = $_POST["evento"];
    $questao = $_POST["questao"];

    $sql = 'INSERT INTO evento_has_bloco(questao_id, bloco_id, evento_id) VALUES(null, "'.$nome.'", "'.$semestre.'")';
    $mysqli->query( $sql ) or die("Erro ao cadastra questao");
    
    header('Location: ../view/addQuestoes.php');
?>