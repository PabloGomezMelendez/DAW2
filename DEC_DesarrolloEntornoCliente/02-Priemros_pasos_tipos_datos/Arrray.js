let notas=[8.1,5.0,6,,8,16];

function calcularmedia(){
    let suma=0;
    let contador=0;
    for(let i=0; i<notas.length; i++){
        if(!isNaN(notas[i])){
            suma+=notas[i];
            contador++;
        }
    }
    return suma/contador;
}
console.log(calcularmedia(notas));