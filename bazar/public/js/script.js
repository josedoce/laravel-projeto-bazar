let elemento = document.getElementById('corpo');
function cori(){
    const cores = [
        '(131,111,255,0.849)',
        '(25,25,112,0.849)',
        '(0,191,255,0.849)',
        '(127,255,212,0.849)',
        '(0,255,127,0.849)',
        '(0,128,0,0.849)',
        '(218,165,32,0.849)',
        '(147,112,219,0.849)',
        '(255,20,147,0.849)',
        '(255,255,0,0.849)',
        '(248,248,255,0.849)',
        '(176,224,230,0.849)'
    ];
    let num = Math.round(Math.random() * 11);
    return cores[num];
}
let cont = [0, 360];
setInterval(() => {
    if(cont[0] == 360){
        cont[0] = 0;
    }
    cont[0] += 1;
    if(cont[1] == 0){
        cont[1] = 360;
    }
    cont[1] -= 1;
    elemento.style.background = `linear-gradient(${cont[0]}deg, rgba${cori()}, rgba${cori()}, rgba${cori()})`;
    elemento.style.background = `linear-gradient(${cont[1]}deg, rgba${cori()}, rgba${cori()}, rgba${cori()})`;
}, 3000);
