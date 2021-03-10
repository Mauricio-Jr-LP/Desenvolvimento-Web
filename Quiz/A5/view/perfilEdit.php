<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gerenciar</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script src="../jquery/jquery-3.5.1.min.js"></script>
        <script src="../js/verifica.js" type="text/javascript"></script>
    </head>
    <body id="corpo">
        <div id="barra">
            <ul id="listaLinks">
                <li><a href="gerenciar.html">Inicio</a></li>
            </ul>
        </div>
        <div class="site">
            <div id="divLoguin">
                <h1>Modifica conta</h1>
            </div>
            <form name="formEdit" action="../post/postEditaGerenciador.php"
                method="POST">
                <div id="">
                    <h2>Usuario</h2>
                    <input type="text" name="login" id="login" class="l" required
                        placeholder="Digite o seu usuário">
                </div>
                <div id="">
                    <h2>Usuario novo</h2>
                    <input type="text" name="loginNovo" id="loginNovo" class="l" required
                        placeholder="Digite o seu usuário novo">
                </div>
                <div id="">
                    <h2>Senha</h2>
                    <input type="password" name="senha" id="senha" class="l" required
                        placeholder="Digite o sua senha">
                </div>
                <div id="">
                    <h2>Senha nova</h2>
                    <input type="password" name="senhaNova" id="senhaNova" class="l" required
                        placeholder="Digite o sua senha nova">
                </div>
                <div id="divButton">
                    <button id="btnLogar" type="submit">Concluir</button>
                </div>
            </form>
    </body>
</html>