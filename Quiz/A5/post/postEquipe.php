<?php

    include('../banco/conexaoBD.php');
    
    $conn = abrirConexao();

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $nome = $_POST["nome"];
    $evento_id = $_POST["evento"];
    $matricula1 = $_POST["matricula1"];
    $nome1 = $_POST["membro1"];
    $matricula2 = $_POST["matricula2"];
    $nome2 = $_POST["membro2"];
    $matricula3 = $_POST["matricula3"];
    $nome3 = $_POST["membro3"];
    $matricula4 = $_POST["matricula4"];
    $nome4 = $_POST["membro4"];
    $matricula5 = $_POST["matricula5"];
    $nome5 = $_POST["membro5"];

    $sql10 = 'INSERT INTO equipe(id, nome , evento_id, login, senha) VALUES(null, "'.$nome.'", "'.$evento_id.'" , "'.$login.'", "'.$senha.'")';
    $mysqli->query( $sql10 ) or die("Erro ao cadastra equipe");
    $id_quest = mysqli_insert_id($mysqli);

    $sql = 'INSERT INTO membro(matricula, nome) VALUES ("'.$matricula1.'", "' .$nome1.'")';
    $mysqli->query( $sql ) or die("Erro ao cadastra membro ");

    $sql2 = 'INSERT INTO membro(matricula, nome) VALUES ("'.$matricula2.'", "' .$nome2.'")';
    $mysqli->query( $sql2 ) or die("Erro ao cadastra membro 2");

    $sql3 = 'INSERT INTO membro(matricula, nome) VALUES ("'.$matricula3.'", "' .$nome3.'")';
    $mysqli->query( $sql3 ) or die("Erro ao cadastra membro 3");


    $sql5 = 'INSERT INTO membro(matricula, nome) VALUES ("'.$matricula5.'", "' .$nome5.'")';
    $mysqli->query( $sql5 ) or die("Erro ao cadastra membro 5");


    $sql4 = 'INSERT INTO membro(matricula, nome) VALUES ("'.$matricula4.'", "' .$nome4.'")';
    $mysqli->query( $sql4 ) or die("Erro ao cadastra membro 4");
    
    $sql15 = 'INSERT INTO vinculo(equipe_id, membro_id1, membro_id2, membro_id3, membro_id4, membro_id5) 
        VALUES ("'.$id_quest.'", "' .$matricula1.'", "'.$matricula2.'", "'.$matricula3.'", "'.$matricula4.'", "'.$matricula5.'")';
    $mysqli->query( $sql15 ) or die("Erro ao cadastra vinculo");


    header('Location: ../view/criarEquipe.php');
?>