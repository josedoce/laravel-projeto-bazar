function crie(user){
    //verificação no localstorage
    //localStorage.removeItem('nome');
    if(localStorage.getItem('_user')==null){
        localStorage.setItem('_user',user);
    }
    //verificação no localstorage
    function getId(id){
        return document.getElementById(id);
    }
    function makeEle(name){
        return document.createElement(name);
    }
    function joinEle(a, b){
        return a.appendChild(b);
    }
    
    let token = document.getElementsByTagName('input')[0]
    dados = [token.name, token.value];
    getId('corpo').removeChild(token);

    let formu = makeEle('form');
    let inp1 = makeEle('input');
    let inp2 = makeEle('input');
    
    // formulario
    formu.setAttribute('method', 'post');
    formu.setAttribute('action', '/auth');
    formu.setAttribute('id', 'tokens');
    // formulario
    //input token
    inp1.setAttribute('id','input1');
    inp1.setAttribute('type','hidden');
    inp1.setAttribute('name',dados[0]);
    inp1.setAttribute('value',dados[1]);
    //input token
    //input token2
    inp2.setAttribute('id','input2');
    inp2.setAttribute('type','hidden');
    inp2.setAttribute('name','_user');
    inp2.setAttribute('value',user);
    //input token2

    joinEle(formu, inp1);
    joinEle(formu, inp2);
    joinEle(getId('corpo'), formu);
}

function auth(user){
    crie(user);
    
}