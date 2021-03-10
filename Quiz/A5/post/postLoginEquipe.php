<?php 

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $connect = mysqli_connect('localhost', 'root', '');
    $db  = mysqli_select_db($connect,'a5');

    if(isset($login)){
        $verifica = mysqli_query($connect,"SELECT * FROM equipe WHERE login = '$login' AND senha = '$senha'") or die("erro ao seleciona no banco");
        if((mysqli_num_rows($verifica)<=0)){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorrretos');window.location.href='../view/loginEquipe.php';</script>";
            die();
        }
        else{
            echo"
            <script language='javascript' type='text/javascript'>
            location.href='../view/evento.php';</script>";
        }
    
    }
?>