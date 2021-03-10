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
				<li><a href="delQuestao.php">Deletar questão</a></li>
				<li><a href="criarQuestao.php">Criar questão</a></li>
            </ul>
        </div>
        <div class="site">
            <form name="questaoForm" id="questaoForm" action="../post/postQuestaoEdit.php" method="post">
                <div id="divTitle">
                    <h3>Alterar questão</h3>
                </div>
                <div id="SelecionaNome">
                    <h4>Nome da questão</h4>
                    <input id="nome" class="inputQuestoes" name="nome"
                        type="text" placeholder="Nome da questão" required/>
                </div>
                <div id="SelecionaNome">
                    <h4>Nome novo da questão</h4>
                    <input id="nomeNovo" class="inputQuestoes" name="nomeNovo"
                        type="text" placeholder="Nome novo da questão" required/>
                </div>
                <div id="SelecionaTexto">
                    <h4>Texto da questão</h4>
                    <input id="texto" class="inputQuestoes" name="texto"
                        type="text" placeholder="Texto da questão" required/>
                </div>
                <div id="SelecionaTexto">
                    <h4>Texto novo da questão</h4>
                    <input id="textoNovo" class="inputQuestoes" name="textoNovo"
                        type="text" placeholder="Texto novo da questão" required/>
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
                    <div>
                        <h4>Opção A nova</h4>
                        <input id="aNova" name="aNova" placehouder="Opção A nova"
                            type="text" />
                    </div>
                    <div>
                        <h4>Opção B</h4>
                        <input id="b" name="b" placehouder="Opção B"
                            type="text" />
                    </div>
                    <div>
                        <h4>Opção B nova</h4>
                        <input id="bNova" name="bNova" placehouder="Opção B nova"
                            type="text" />
                    </div>
                    <div>
                        <h4>Opção C</h4>
                        <input id="c" name="c" placehouder="Opçãoo C"
                            type="text" />
                    </div>
                    <div>
                        <h4>Opção C nova</h4>
                        <input id="cNova" name="cNova" placehouder="Opçãoo C Nova"
                            type="text" />
                    </div>
                    <div>
                        <h4>Opção D</h4>
                        <input id="d" name="d" placehouder="Opção D"
                            type="text"/>
                    </div>
                    <div>
                        <h4>Opção D nova</h4>
                        <input id="dNova" name="dNova" placehouder="Opção D nova"
                            type="text"/>
                    </div>
                    <div>
                        <h4>Opção E</h4>
                        <input id="e" name="e" placehouder="Opção E"
                            type="text" />
                    </div>
                    <div>
                        <h4>Opção E Nova</h4>
                        <input id="eNova" name="eNova" placehouder="Opção E nova"
                            type="text" />
                    </div>
                    <div>
                        <select name="alternativaCorreta"
                            id="alternativaCorreta">
                            <option value="0">Selecione a
                                alternativa
                                correta</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                            <option value="5">E</option>
                        </select>
                        
                        <select name="alternativaCorretaNova"
                            id="alternativaCorretaNova">
                            <option value="0">Selecione a
                                alternativa
                                correta Nova</option>
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                            <option value="5">E</option>
                        </select>
                    </div>
                </div>
                <div id="bloco03">
                    <h4>Bloco 03</h4>
                    <div>
                        <h4>Rubrica</h4>
                        <input id="rubrica" name="rubrica"
                            placehouder="Rubrica" type="text" />
                    </div>
                    <div>
                        <h4>Rubrica nova</h4>
                        <input id="rubricaNova" name="rubricaNova"
                            placehouder="Rubrica nova" type="text" />
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
                    <div id="vddouff">
                        <div id="vdd">
                            <input type="radio" name="vddfNovo" value="yes"
                                id="vddfNovo" checked>
                        </div>
                        <div id="falso">
                            <input type="radio" name="vddfNovo" value="no"
                                id="vddfNovo">
                        </div>
                    </div>
                    <div class="opcoes">
                        <label for="yesNovo">Verdadeira Nova</label><br>
                        <label for="noNovo">Falsa Nova</label>
                    </div>
                </div>
                <div id="DivBnt">
                    <button id="btnSalvar" type="submit">Salvar</button>
                </div>
            </div>    
        </form>
        
        <script src="../jquery/jquery-3.5.1.min.js"></script>
        <script src="../js/scripts.js" type="text/javascript"></script>
    </body>
</html>