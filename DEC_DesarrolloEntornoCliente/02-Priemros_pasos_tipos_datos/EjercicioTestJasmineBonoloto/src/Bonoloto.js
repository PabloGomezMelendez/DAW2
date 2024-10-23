//@Author @PabloGomezMelendez
function bonoloto() {
    let numbers = [];
    while (numbers.length < 6) {
        let randomNumber = Math.floor(Math.random() * 49) + 1; // Genera un número entre 1 y 49
        if (!numbers.includes(randomNumber)) { // Verifica que no esté repetido
            numbers.push(randomNumber);
        }
    }
    return numbers.sort((a, b) => a - b); // Devuelve el array ordenado
}