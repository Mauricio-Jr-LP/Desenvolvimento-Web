<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script src="../scripts/jquery-3.5.1.min.js"></script>
        <script src="../scripts/verifica.js" type="text/javascript"></script>
    </head>
    <body id="corpo">
        <div id="centro">
            <div id="divLoguin">
                <h1>Iniciar sessão - Gerenciador</h1>
            </div>
            <form name="formLogin" action="../post/postLoginGerenciador.php"
                method="POST">
                <div id="divUser">
                    <h2>Usuario</h2>
                    <input type="text" name="login" id="login" class="login" required
                        placeholder="Digite o seu usuário">
                </div>
                <div id="divPass">
                    <h2>Senha</h2>
                    <input type="password" name="senha" id="senha" class="login" required
                        placeholder="Digite o sua senha">
                </div>
                <div id="divButton">
                    <button id="btnLogar" type="submit">Entrar</button>
                </div>
            </form>
            <ul id="linkCadastro">
                <li><a href="criarGerenciador.php">Criar conta</a></li>
            </ul>
        </div>
    </body>
</html>