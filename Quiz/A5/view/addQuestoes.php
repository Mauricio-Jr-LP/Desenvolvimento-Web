<?php
	include_once("../banco/conexaoBD.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
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
				<li><a href="editarQuestao.php">Editar questão</a></li>
            </ul>
        </div>


		<div id="cadastrarEvento" class="site">
			<form name="addQuestForm" id="eventoForm" action="../post/postAddQuestoes.php" method="post">
				<div id="divTitle">
					<h3>Cadastrar questões no evento</h3>
				</div>

				<div id="SelecionaNome">
					<h4>Nome do evento</h4>
					<input id="evento" name="evento" type="text" placeholder="Nome do evento"
						required/>
				</div>
				<div id="SelecionaSemestre">
					<h4>Nome da questão</h4>
					<input id="questao" name="questao" type="text" placeholder="Nome da questão"
						required/>
				</div>
				
				<button type="submit">Adicionar</button>
			</form>
			<script src="../scripts/jquery-3.5.1.min.js"></script>
        	<script src="../scripts/script.js" type="text/javascript"></script>
		</div>

	</body>
</html>