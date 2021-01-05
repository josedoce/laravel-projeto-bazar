<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/geral.css">
    <title> home|bazar</title>
</head>
<body id="corpo">
    
    <header class="cabecalho">
        <nav class="nav-menu">
            <h2 class="logo">bazar</h2>
            <ul class="opcoes">
                <li class="li-opcoes"><a class="link-opcoes" href="">inicio</a></li>
                <li class="li-opcoes"><a id="botao-setor" class="link-opcoes">setores</a>
                    <div id="setor" class="setores hide">
                        <h3>setores do bazar</h3>
                        <div class="itens-setores">

                            <div class="card-cat">
                                <h4 class="titulo-cat">categoria isso</h4>
                                <ul class="ul-cat">
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                </ul>
                            </div>

                            <div class="card-cat">
                                <h4 class="titulo-cat">categoria isso2</h4>
                                <ul class="ul-cat">
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                   <li class="item-cat"><a class="link-cat" href="http://">sandalias</a></li> 
                                </ul>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="li-opcoes"><a class="link-opcoes" href="">contato</a></li>
                <li class="li-opcoes"><a class="link-opcoes" href="">sobre</a></li>
            </ul>
            <ul class="usuario">
               @if ($logado)
               <li class="li-usuario btn-compras"><a class="carrinho mestre"><p class="cont-car">{{$usuario['carrinho']}}</p></a>
                    <div class="compras hide">
                        <div class="menu-compras">
                            <form class="form-compras" action="" method="GET">
                                <input type="hidden" name="produtos" value="">
                                <button type="submit">finalizar compra</button>
                                <a class="lk-compras" href="/carrinho"><button type="button">olhar carrinho</button></a>
                            </form>
                        </div>
                        <h4>carrinho de compras</h4>
                       
                    </div>
                </li>
               <li class="li-usuario"><a class="link-usuario" href="/usuario/{{$usuario['nome']}}">{{$usuario['nome']}}</a></li>
                <li class="li-usuario"><a class="link-usuario" href="/sair">sair</a></li>
               @else
               <li class="li-usuario"><a class="carrinho" href="/usuario/login"><p class="cont-car">0</p></a></li>
               <li class="li-usuario"><a class="link-usuario" href="/usuario/login">login</a></li>
               <li class="li-usuario"><a class="link-usuario" href="/usuario/registro">registrar</a></li>
               @endif
                
            </ul>
        </nav>
    </header>
    <section class="conteudo">

    </section>
    <footer>
        <p>bazar.com</p>
    </footer>
    {{-- <script src="/js/autenticacao.js"></script> --}}
    <script src="/js/servicos.js"></script>
    <script>
        let db_produts = [
            {
                id: 'algumid0',
                produto: 'azeite de oliva virgem',
                img: 'https://www.paodeacucar.com/img/uploads/1/240/673240.jpg',
                preco: 20,
            },
            {
                id: 'algumid1',
                produto: 'maçã',
                img: 'https://superprix.vteximg.com.br/arquivos/ids/175207-292-292/Maca-Argentina--1-unidade-aprox.-200g-.png?v=636294203590200000',
                preco: 2,
            },
            {
                id: 'algumid2',
                produto: 'pera',
                img: 'https://hiperideal.vteximg.com.br/arquivos/ids/167745-1000-1000/80764.jpg?v=636615816415070000',
                preco: 3,
            },
            {
                id: 'algumid3',
                produto: 'maracuja',
                img: 'data:image/jpeg;base64,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',
                preco: 2,
            },

        ]
        let a = new Carrinho(db_produts);
        a.conteudo()
        a.por({nome: 'fulano'})
        a.por({nome: 'sicrano'})
        a.por({nome: 'deltrano'})
    </script>
    <script src="/js/eventos.js"></script>
</body>
</html>