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
                <li><a href="equipes.php">Ver equipes</a></li>
            </ul>
        </div>
        <div class="site">
            <form name="equipeForm" id="equipeForm" action="../post/postEquipe.php" method="post">
                <div id="divTitle">
                    <h3>Cadastrar equipe</h3>
                </div>
                <div id="divUser">
                    <h2>Login</h2>
                    <input type="text" name="login" id="login" class="login" required
                        placeholder="Digite o login da equipe">
                </div>
                <div id="divPass">
                    <h2>Senha</h2>
                    <input type="password" name="senha" id="senha" class="login" required
                        placeholder="Digite a senha da equipe">
                </div>
                <div id="divUser">
                    <h2>Nome da equipe</h2>
                    <input type="text" name="nome" id="nome" class="login" required
                        placeholder="Digite o nome da equipe">
                </div>

                <div id="SelecionaNome">
                    <h4>Matricula do membro </h4>
                    <input id="matricula1" class="inputQuestoes" name="matricula1"
                        type="text" placeholder="Matricula do membro" required/>
                </div>
                <div id="">
                    <h4>Nome do membro</h4>
                    <input id="membro1" class="inputQuestoes" name="membro1"
                        type="text" placeholder="Nome do membro" required/>
                </div>
                <div id="SelecionaNome">
                    <h4>Matricula do membro </h4>
                    <input id="matricula2" class="inputQuestoes" name="matricula2"
                        type="text" placeholder="Matricula do membro" required/>
                </div>
                <div id="">
                    <h4>Nome do membro</h4>
                    <input id="membro2" class="inputQuestoes" name="membro2"
                        type="text" placeholder="Nome do membro" required/>
                </div>
                <div id="SelecionaNome">
                    <h4>Matricula do membro </h4>
                    <input id="matricula3" class="inputQuestoes" name="matricula3"
                        type="text" placeholder="Matricula do membro" required/>
                </div>
                <div id="">
                    <h4>Nome do membro</h4>
                    <input id="membro3" class="inputQuestoes" name="membro3"
                        type="text" placeholder="Nome do membro" required/>
                </div>
                <div id="SelecionaNome">
                    <h4>Matricula do membro </h4>
                    <input id="matricula4" class="inputQuestoes" name="matricula4"
                        type="text" placeholder="Matricula do membro" required/>
                </div>
                <div id="">
                    <h4>Nome do membro</h4>
                    <input id="membro4" class="inputQuestoes" name="membro4"
                        type="text" placeholder="Nome do membro" required/>
                </div>
                <div id="SelecionaNome">
                    <h4>Matricula do membro </h4>
                    <input id="matricula5" class="inputQuestoes" name="matricula5"
                        type="text" placeholder="Matricula do membro" required/>
                </div>
                <div id="">
                    <h4>Nome do membro</h4>
                    <input id="membro5" class="inputQuestoes" name="membro5"
                        type="text" placeholder="Nome do membro" required/>
                </div>


                <div id="SelecionaEvento">
                    <h4>Selecione Evento da equipe</h4>
					<select name="eventoList">
						<option value="0">ID - Nome do evento</option>
						<?php
							$result_evento = "SELECT * FROM evento";
							$resultado_revento = mysqli_query($conn, $result_evento);
							while($row_evento = mysqli_fetch_assoc($resultado_revento)){?>
								<option value="<?php echo $row_evento['id'],$row_evento['nome']; ?>"><?php echo $row_evento['id'], $row_evento['nome']; ?>
								</option> <?php
							}
						?>

                    </select>
                    <h2>Digite o ID</h2>
                    <input type="text" name="evento" id="evento" required
                        placeholder="Digite o ID do evento selecionado">

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