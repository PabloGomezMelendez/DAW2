/*2. Test Filtro de numeros primos*/

//Creamos la funcion donde realizamos el filtro de los numeros indicados
function filtrarPrimosMayoresOnce(arryNum) {
    return arryNum.filter(item => esPrimo(item) && item>11).sort(); 
 }

 //Creamos la funcion que comprueba dichos numeros para saber si son primos
 function esPrimo(num) {
     for (let i = 2; i < num; i++) {
         if (num%i==0) {
             return false;
         }
     }
     return true;
 }