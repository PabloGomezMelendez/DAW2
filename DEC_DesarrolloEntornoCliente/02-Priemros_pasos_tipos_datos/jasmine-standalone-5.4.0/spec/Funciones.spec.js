describe('Test del boletín de funciones', () => {
    describe('Ejercicio 1 - comprobarEsPar', () => {
        const datos=[
            {entrada:2, salidaESperada:true},
            {entrada:3, salidaESperada:false},
            {entrada:0, salidaESperada:true},
            {entrada:1, salidaESperada:false},
            {entrada:-1, salidaESperada:false},

        ];
        datos.forEach(dato => {
            it(`${dato.entrada} debería ser ${(dato.salidaESperada)?'es par':'es impar'}`, () => {
                expect(comprobarEsPar(dato.entrada)).toEqual(dato.salidaESperada);
            });
            it('Deberia lanzar un error por no usar nuemro entero'),()=>{
                expect(() => {comprobarEsPar(2.2)}).toThrowError("El número a comprobar debe ser un número entero");
            }
        });
    });

});