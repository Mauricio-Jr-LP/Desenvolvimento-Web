<?php

    $host = "localhost";
    $banco = "a5";
    $usuario = "root";
    $senha = "";

    $mysqli;
    $conn = mysqli_connect($host, $usuario, $senha, $banco);

    function abrirConexao(){
        global $mysqli, $host, $usuario, $senha, $banco;
        $mysqli = new mysqli($host, $usuario, $senha, $banco);

        if($mysqli->connect_errno) {
            printf("Conexão falhou! <br>", $mysqli->connect_error);
            exit();
        }else{
            //print("Conectado!<br> ");
        }	
    }

    function fecharConexao(){
        global $mysqli;
        $mysqli->close();
    }
        
?>