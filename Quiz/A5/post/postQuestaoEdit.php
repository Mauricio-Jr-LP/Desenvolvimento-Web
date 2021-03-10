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
    $nomeNovo = $_POST['nomeNovo'];
    $textoNovo = $_POST['textoNovo'];
    $alternativa_aNova= $_POST['aNova'];
    $alternativa_bNova= $_POST['bNova'];
    $alternativa_cNova= $_POST['cNova'];
    $alternativa_dNova= $_POST['dNova'];
    $alternativa_eNova= $_POST['eNova'];
    $alternativa_corretaNova = $_POST['alternativaCorretaNova'];
    $rubricaNova = $_POST['rubricaNova'];
    $radioNovo = $_POST["vddfNovo"];
    header('Location: ../view/editarQuestao.php');
    //Atualizando questao
    $sql = 'UPDATE questao SET nome = "'.$nomeNovo.'", texto = "'.$textoNovo.'" WHERE questao.nome = "'.$nome.'" 'AND' "'.$texto.'"';
    $mysqli->query( $sql ) or die("erro ao atualizar questao");
    
    //Questao Multipla escolha
    if($alternativa_a != '' ){
        $conn = abrirConexao();
        echo "passou pela multiplca<hr>";
        $sql2 ='UPDATE questao_multipla SET alternativa_a = "'.$alternativa_aNova.'",  alternativa_b = "' .$alternativa_bNova.'", alternativa_c ="' .$alternativa_cNova.' 
            ", alternativa_d = " '.$alternativa_dNova.' ", alternativa_e = " '.$alternativa_eNova.' ", alternativa_correta = " '.$alternativa_corretaNova.'
            "WHERE questao_multipla.alternaiva_a = "'.$alternativa_a.'"';
        $mysqli->query( $sql2 ) or die("erro ao atualiza questao de marca");
    }

    //Questao aberta
    if($rubrica != ''){   
        echo " aberta<hr>";
        $sql2 = 'UPDATE questao_aberta SET rubrica = "'.$rubricaNova.'" WHERE questao_aberta.rubrica = "'.$rubrica.'"';
        $mysqli->query( $sql2 ) or die("erro ao atualizar questao");
    }

    //Questao Verdadeiro ou falso
    if($radio != '' ){
        
        $retorno;
        if($radio == 'yes' ){
            $retorno = true;
        }
        else if($radio == 'no'){
            $retorno = false;
            
        }

        $retornoNovo;
        echo "passou pelo vdd f<hr>";
        if($radioNovo == 'yes' ){
            $retornoNovo = true;
        }
        else if($radioNovo == 'no'){
            $retornoNovo = false;
            
        }
        echo $retorno."nova<hr>";
        $sql2 = 'UPDATE questao_vf SET alternativa_correta = "'.$retornoNovo.'" WHERE questao_vf.alternativa_correta = "'.$retorno.'"';
        $mysqli->query( $sql2 ) or die("erro ao atualizar questao");
    }

    header('Location: ../view/editarQuestao.php');
?>