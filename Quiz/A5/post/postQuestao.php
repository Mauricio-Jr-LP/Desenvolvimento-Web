<?php

    include('../banco/conexaoBD.php');

    $conn = abrirConexao();
    
    $nome = $_POST['nome'];
    $texto = $_POST['texto'];
    $alternativa_a = $_POST['a'];
    $alternativa_b = $_POST['b'];
    $alternativa_c = $_POST['c'];
    $alternativa_d = $_POST['d'];
    $alternativa_e = $_POST['e'];
    $alternativa_correta = $_POST['alternativaCorreta'];
    $rubrica = $_POST['rubrica'];
    $radio = $_POST["vddf"];
    
    //Inserir questão
    $sql = 'INSERT INTO questao(id, nome, texto) VALUES(null, "'.$nome.'", "'.$texto.'")';
    $mysqli->query( $sql ) or die("Erro ao cadastra questao");
    $id_quest = mysqli_insert_id($mysqli);

    //Questao Multipla escolha
    if($alternativa_a != '' & $alternativa_b != '' & $alternativa_c != '' & $alternativa_d != '' & $alternativa_e != '' & $alternativa_correta != ''){
        $conn = abrirConexao();
        echo "<hr>Questao de marcar<hr>";
        echo $id_quest, $alternativa_a, $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e, $alternativa_correta;

        $sql2 ='INSERT INTO questao_multipla(questao_id, alternativa_a, alternativa_b, alternativa_c, alternativa_d, alternativa_e, alternativa_correta)
			VALUES("'.$id_quest.'", "'.$alternativa_a.'", "'.$alternativa_b.'", "'.$alternativa_c.'", "'.$alternativa_d.'", "'.$alternativa_e.'", "'.$alternativa_correta.'")';
	    $mysqli->query( $sql2 ) or die("<hr>erro ao cadastra questao de marcar");
    }

    //Questao aberta
    else if($nome != '' & $texto != '' & $rubrica != ''){   
        $conn = abrirConexao();
        
        echo "Questao aberta<hr>";
        $sql2 = 'INSERT INTO questao_aberta(questao_id, rubrica) 
            VALUES ("'.$id_quest.'","'.$rubrica.'")'; 
        $mysqli->query( $sql2 ) or die("erro ao cadastra questao");
        $conn = fecharConexao();
    }

    //Questao Verdadeiro ou falso
    else if ($nome != '' & $texto != '' & $radio != '' ){
        echo "Questao vdd ou f<hr>";
        $retorno;
        
        if($radio == 'yes' ){
            $retorno = true;
        }
        else if($radio == 'no'){
            $retorno = false;
            
        }
        
        $sql2 = 'INSERT INTO questao_vf(questao_id, alternativa_correta) 
            VALUES ("'.$id_quest.'","'.$alternativa_correta.'")'; 
        $mysqli->query( $sql2 ) or die("erro ao cadastra questao");
        $conn = fecharConexao();
        
    }

    header('Location: ../view/criarQuestao.php');
?>