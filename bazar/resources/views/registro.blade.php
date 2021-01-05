<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Registro | bazar</title>
</head>
<body id="corpo">
    <form class="form-login" action="/registrar" method="post">
        @csrf
        <label for="nome">diga seu nome</label>
        <input class="entradas" placeholder="exemplo: jose" type="text" name="nome" id="nome">
        <label for="sobrenome">diga seu sobrenome</label>
        <input class="entradas" placeholder="exemplo: silva" type="text" name="sobrenome" id="sobrenome">
        <label for="email">diga seu email</label>
        <input class="entradas" placeholder="exemplo: fulano@gmail.com" type="email" name="email" id="email">
        <label for="senha">diga sua senha</label>
        <input class="entradas" placeholder="exemplo: algumasenhaforte37262191" type="password" name="senha" id="senha">
        <input class="botao-entradas" type="submit" value="cadastrar">
        <div class="links-registro">
            <a href="/usuario/login">fazer login</a>
        </div>
    </form>
    <script src="/js/script.js"></script>
</body>
</html>