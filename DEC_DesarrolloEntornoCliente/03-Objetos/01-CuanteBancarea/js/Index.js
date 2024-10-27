// @Autor @PabloGomezMelendez

import { Cuenta } from "./Cuenta6.js";

const cuenta1= new Cuenta("Javier", 3000);
const cuenta2= new Cuenta("Rocio", 5000);

cuenta1.transferir(cuenta2,500);

console.log(cuenta1.toString());
console.log(cuenta2.toString());

