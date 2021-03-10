<?php

    include('../banco/conexaoBD.php');

    $conn = abrirConexao();

    $nome = $_POST['nome'];
    $alternativa_a = $_POST['a'];
    $rubrica = $_POST['rubrica'];
    $radio = $_POST["vddf"];
    
    //Questao Multipla escolha
    if($alternativa_a != ''){
        echo "Questao de marcar<hr>";

        $sql2 ='DELETE FROM questao_multipla WHERE  alternativa_a = "'.$alternativa_a.'"';
        $resultado = $mysqli->query( $sql2 ) or die("erro ao deleta questao de marca");
        
        $sql = 'DELETE from questao where nome = "'.$nome.'"';
            $mysqli->query( $sql ) or die("Erro ao deleta questao");

    }

    //Questao aberta
    else if($nome != '' & $rubrica != ''){   
        $conn = abrirConexao();
        
        $sql2 = 'DELETE from questao_aberta where rubrica = "'.$rubrica.'"';
        $mysqli->query( $sql2 ) or die("erro ao deletar questao a aberta");
        
       
        $sql = 'DELETE from questao where nome = "'.$nome.'"';
        $mysqli->query( $sql ) or die("Erro ao deleta questao");


    }

    //Questao Verdadeiro ou falso
    else if ($nome != '' & $texto != '' & $radio != '' ){
        $retorno;
        
        if($radio == 'yes' ){
            $retorno = true;
        }
        else if($radio == 'no'){
            $retorno = false;
            
        }

        $sql2 = 'DELETE from questao_vf where alternativa_correta = "'.$retorno.'"';
        $mysqli->query( $sql2 ) or die("erro ao deletar questao a aberta");
        
       
        $sql = 'DELETE from questao where nome = "'.$nome.'"';
        $mysqli->query( $sql ) or die("Erro ao deleta questao");
    }

    header('Location: ../view/delQuestao.php');
?>
