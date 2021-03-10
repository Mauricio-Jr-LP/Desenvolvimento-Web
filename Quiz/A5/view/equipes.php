<?php
    include_once("../banco/conexaoBD.php");
?>
<html>
    <head>
        <title>Equipes</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css"></script>
    </head>
    <body id="corpoMenu">
    <div id="barra">
            <ul id="listaLinks">
                <li><a href="gerenciar.html">Inicio</a></li>
                <li><a href="criarEquipe.php">criar equipes</a></li>
                <li><a href="equipes.php">Ver equipes</a></li>
            </ul>
        </div>
        <select name="equipesList">
        <option value="0">Lista de equipes</option>
        <?php
            $result_evento = "SELECT * FROM equipe";
            $resultado_revento = mysqli_query($conn, $result_evento);
            while($row_evento = mysqli_fetch_assoc($resultado_revento)){?>
                <option value="<?php echo $row_evento['nome']; ?>"><?php echo $row_evento['nome']; ?>
                </option> <?php
            }
        ?>
        </select>
    </body>
    
</html>