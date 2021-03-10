<?php
	include_once("../banco/conexaoBD.php");
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Gerenciador</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <link rel="stylesheet" type="text/css" href="../css/estilo.css"></script>
    </head>
    <body id="corpoMenu">
        <div id="barra">
            <ul id="listaLinks">
                <li><a href="gerenciar.html">Inicio</a></li>
				<li><a href="criarQuestao.php">Criar questão</a></li>
				<li><a href="editarQuestao.php">Deletar questão</a></li>
            </ul>
        </div>
        <div class="site">
            <form name="questaoForm" id="questaoForm" action="../post/postDelQuestao.php" method="post">
                <div id="divTitle">
                    <h3>Deletar questão</h3>
                </div>
                <div id="SelecionaNome">
                    <h4>Nome da questão</h4>
                    <input id="nome" class="inputQuestoes" name="nome"
                        type="text" placeholder="Nome da questão" required/>
                </div>
                <div id="SelecionaBloco" name="SelecionaBloco">
                    <h4>Bloco da questão</h4>
                    <select name="blocoSelect" id="blocoSelect">
                        <option>Escolha o bloco da questão</option>
                        <option value="b1">Bloco 01</option>
                        <option value="b2">Bloco 02</option>
                        <option value="b3">Bloco 03</option>
                    </select>
                </div>
                <div id="bloco01">
                    <h4>Bloco 1</h4>
                    <div>
                        <h4>Opção A</h4>
                        <input id="a" name="a" placehouder="Opção A"
                            type="text" />
                    </div>
                </div>
                <div id="bloco03">
                    <h4>Bloco 03</h4>
                    <div>
                        <h4>Rubrica</h4>
                        <input id="rubrica" name="rubrica"
                            placehouder="Rubrica" type="text" />
                    </div>
                </div>
                <div id="bloco02">
                    <h4>Bloco 02</h4>
                    <div id = "vddouff">
                        <div id="vdd">
                        <input type="radio" name="vddf" value="yes"
                            id="vddf" checked>
                        </div>
                        <div id="falso">
                            <input type="radio" name="vddf" value="no"
                                id="vddf">
                        </div>
                    </div>
                    <div class="opcoes">
                        <label for="yes">Verdadeira</label><br>
                        <label for="no">Falsa</label>
                    </div>
                </div>
                <div id="DivBnt">
                    <button id="btnSalvar" type="submit">Deletar</button>
                </div>
            </div>    
        </form>
        <script src="../jquery/jquery-3.5.1.min.js"></script>
        <script src="../js/scripts.js" type="text/javascript"></script>
    </body>
</html>