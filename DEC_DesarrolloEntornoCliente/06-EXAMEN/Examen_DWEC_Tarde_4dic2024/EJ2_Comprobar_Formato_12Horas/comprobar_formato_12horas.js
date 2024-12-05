// @PabloGomezMelendez
// Formato h:mm am|pm (ej. 8:12 pm, 12:15 am)
function comprobarHora(fechaHoraStr){
    // Escribe aquí tu código
        const regex = /^ \d{2}:\d{2} ([(am)]|[(pm)]) $/;
        return regex.test(fechaHoraStr);

}

