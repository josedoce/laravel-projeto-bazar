//servicos
class Conteudo{
    constructor(){

    }
    compras(element){
        let compras = document.querySelector('.compras');
            compras.innerHTML += `
            <div class="produto-car">
                <div class="item-car">
                    <img src="${element['img']}" width="100%" alt="">
                    <p>${element['produto']}</p>
                </div>
                <div class="opc-car">
                    <div class="det-car">
                        <span>unidades: ${element['quantidade']}</span>
                        <span>preco unidade: R$: ${element['preco']},00</span>
                        <span>preco total: R$: ${element['precoTotal']},00</span>
                    </div>
                    <div class="btn-det-car">
                        <button>remover</button>
                        <div class="btn-car-acoes">
                            <button onclick="a.incremento('algumid2')" class="bt-acoes">-</button>
                            <p class="contador-unid">0</p>
                            <button class="bt-acoes">+</button>
                        </div>
                    </div>
                </div>
        </div>
            `;
    }
    conteudo(){
        let conteudo = document.querySelector('.conteudo');
            this.produtos.forEach(element => {
                conteudo.innerHTML += `
                <div class="card-conteudo">
                    <p class="itens-no-carrinho">1</p>
                    <img class="img-coteudo" src="${element['img']}" width="100%" alt="">
                    <h4 class="nome-prod">${element['produto']}</h4>
                    <p class="preco-prod">preco: R$${element['preco']},00</p>
                    <div class="add-pay" style="display: none">
                        <a class="link-prod" href="/produto/${element['id']}"><button class="btn-prod0">ver produto</button></a>
                        <button class="btn-prod1" onclick="a.adicionar('${element['id']}')">adicionar ao carrinho</button>
                        <a class="link-prod" href=""><button class="btn-prod2">comprar</button></a>
                    </div>
                </div>
            `;
            });
    }
    
}

class Carrinho extends Conteudo{
    carrinho;
    produtos;
    constructor(produtos){
        super()
        this.carrinho = localStorage;
        this.produtos = produtos
    }
    encontreOuEdite(idProduto){
        let produto;
        this.produtos.forEach((elemento)=>{
            if(elemento['id']===idProduto){
                produto = elemento
            }
        })
        return produto
    }
    pegar(a){
        return this.carrinho.getItem(a)
    }
    por(item){
        let itens = JSON.parse(this.carrinho.getItem('produtos'))
        console.log(itens)
        let produto = [];
        produto.push( JSON.stringify(itens))
        produto.push( JSON.stringify({nome: 'joseildo'}))
        this.carrinho.setItem('produtos', produto)
    }
    adicionar(idProduto){
        console.log(idProduto)
        
        const produto = this.encontreOuEdite(idProduto)
        
        produto.quantidae = 1
        produto.precoTotal = produto.preco + produto.preco
        
        
            
        this.compras(produto)
        
        console.log(produto)
       
    }
}

