<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Login | bazar</title>
</head>
<body id="corpo">
    <form class="form-login" action="/logar" method="post">
        @csrf
        <label for="nome">digite seu email</label>
        <input class="entradas" placeholder="exemplo: fulano@gmail.com" type="email" name="email" id="email">
        <label for="senha">digite sua senha</label>
        <input class="entradas" placeholder="exemplo: a senha que voce definiu" type="password" name="senha" id="senha">
        <input class="botao-entradas" type="submit" value="fazer login">
        <div class="links-registro">
            <a href="/usuario/registro">fazer registro</a> |
            <a href="#">recuperar senha</a>
        </div>
    </form>
    <script src="/js/script.js"></script>
</body>
</html>