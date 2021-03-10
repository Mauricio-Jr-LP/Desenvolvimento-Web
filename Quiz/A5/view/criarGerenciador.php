<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastrar</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <script src="../jquery/jquery-3.5.1.min.js"></script>
        <script src="../js/verifica.js" type="text/javascript"></script>
    </head>
    <body id="corpo">
        <div id="centro">
            <div id="divLoguin">
                <h1>Criar conta</h1>
            </div>
            <form name="formCadastro" action="../post/postCriarGerenciador.php"
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
    </body>
</html>