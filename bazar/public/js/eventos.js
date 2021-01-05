//setores function
function setores(){
    let botao = document.getElementById('botao-setor');
    let sujeito = document.getElementById('setor');

    botao.addEventListener('mouseenter', function(){
        sujeito.classList.remove('hide');
    });
    sujeito.addEventListener('mouseleave',function(){
        sujeito.classList.add('hide');
    });
    botao.addEventListener('click',function(){
        sujeito.classList.toggle('hide');
    });
    
}
setores();

function produtos(){
    let produtox = document.querySelectorAll('.card-conteudo');
    let produtoxy = document.querySelectorAll('.add-pay');
    produtox.forEach((elemento, index)=>{
        elemento.addEventListener('click', function(){
            produtoxy[index].removeAttribute('style');
        });
        elemento.addEventListener('mouseleave', function(){
            produtoxy[index].setAttribute('style','display: none');
        });
    });
}
produtos();

function menuCarrinho(){
    let botao = document.querySelector('.mestre');
    let item = document.querySelector('.compras');
    botao.addEventListener('mouseenter', function(){
        item.classList.remove('hide');
    });
    botao.addEventListener('click', function(){
        item.classList.toggle('hide');
    });
    item.addEventListener('mouseleave',function(){
        item.classList.add('hide');
    });
}
menuCarrinho();