<?php
    include("pessoa.php");
    if($_POST):
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $reservista= $_POST['reservista'];
        $perfil= $_POST['perfil'];
        $email= $_POST['email'];
        $senha= $_POST['senha'];

        if(move_uploaded_file(string $nome['nome'], string nome['nome'])){
            echo $nome.' '.$cpf;
        }
        else{
            echo 'erro';
        }
    endif;
?>