describe("bonoloto", function () {

    // 1. Comprobar que la función devuelve un array
    it("debe devolver un array", function () {
        let result = bonoloto();
        expect(Array.isArray(result)).toBe(true);
    });

    // 2. Comprobar que el array tiene 6 elementos
    it("debe devolver un array con 6 elementos", function () {
        let result = bonoloto();
        expect(result.length).toBe(6);
    });

    // 3. Comprobar que todos los elementos del array son números
    it("todos los elementos deben ser números", function () {
        let result = bonoloto();
        result.forEach(num => {
            expect(typeof num).toBe("number");
        });
    });

    // 4. Comprobar que los elementos del array están ordenados (1000 comprobaciones)
    it("los elementos del array deben estar ordenados", function () {
        for (let i = 0; i < 1000; i++) {
            let result = bonoloto();
            for (let j = 0; j < result.length - 1; j++) {
                expect(result[j]).toBeLessThanOrEqual(result[j + 1]);
            }
        }
    });

    // 5. Comprobar que los elementos del array están comprendidos entre 1 y 49 (1000 comprobaciones)
    it("todos los elementos deben estar entre 1 y 49", function () {
        for (let i = 0; i < 1000; i++) {
            let result = bonoloto();
            result.forEach(num => {
                expect(num).toBeGreaterThanOrEqual(1);
                expect(num).toBeLessThanOrEqual(49);
            });
        }
    });

    // 6. Comprobar que no hay números repetidos en el array (1000 comprobaciones)
    it("no debe haber números repetidos", function () {
        for (let i = 0; i < 1000; i++) {
            let result = bonoloto();
            let uniqueNumbers = new Set(result);
            expect(uniqueNumbers.size).toBe(result.length); // Verifica que todos los números son únicos
        }
    });

    // 7. Comprobar que tras 1000 llamadas han salido todos los números entre 1 y 49
    it("tras 1000 llamadas deben haber salido todos los números entre 1 y 49", function () {
        let allNumbers = new Set(); // Un conjunto para almacenar todos los números generados
        for (let i = 0; i < 1000; i++) {
            let result = bonoloto();
            result.forEach(num => allNumbers.add(num));
        }
        for (let num = 1; num <= 49; num++) {
            expect(allNumbers.has(num)).toBe(true); // Verifica que cada número entre 1 y 49 ha aparecido al menos una vez
        }
    });

});
