describe('Funciones de Ejercicios Funciones', () => {

  // Test para comprobar si un número es par
  describe('comprobarEsPar', () => {
      it('debería devolver true para números pares', () => {
          expect(comprobarEsPar(2)).toEqual(true);
          expect(comprobarEsPar(0)).toEqual(true);
      });

      it('debería devolver false para números impares', () => {
          expect(comprobarEsPar(3)).toEqual(false);
          expect(comprobarEsPar(1)).toEqual(false);
      });

      it('debería devolver false para números decimales', () => {
          expect(comprobarEsPar(2.2)).toEqual(false);
          expect(comprobarEsPar(3.5)).toEqual(false);
      });
  });

  // Test para ver la calificación con nota entera
  describe('verCalificacion', () => {
      it('debería devolver la calificación correcta para notas enteras', () => {
          expect(verCalificacion(0)).toEqual("INSUFICIENTE");
          expect(verCalificacion(4)).toEqual("INSUFICIENTE");
          expect(verCalificacion(5)).toEqual("SUFICIENTE");
          expect(verCalificacion(6)).toEqual("BIEN");
          expect(verCalificacion(7)).toEqual("NOTABLE");
          expect(verCalificacion(8)).toEqual("NOTABLE");
          expect(verCalificacion(9)).toEqual("SOBRESALIENTE");
          expect(verCalificacion(10)).toEqual("SOBRESALIENTE");
      });

      it('debería devolver "VALOR INCORRECTO" para notas inválidas', () => {
          expect(verCalificacion(-1)).toEqual("VALOR INCORRECTO");
          expect(verCalificacion(11)).toEqual("VALOR INCORRECTO");
          expect(verCalificacion(10.00001)).toEqual("VALOR INCORRECTO");
          expect(verCalificacion(4.5)).toEqual("VALOR INCORRECTO");
      });
  });

  // Test para ver la calificación con nota decimal
  describe('verCalificacionDecimal', () => {
      it('debería devolver la calificación correcta para notas decimales', () => {
          expect(verCalificacionDecimal(4.9)).toEqual("INSUFICIENTE");
          expect(verCalificacionDecimal(5)).toEqual("SUFICIENTE");
          expect(verCalificacionDecimal(6.5)).toEqual("BIEN");
          expect(verCalificacionDecimal(7.9)).toEqual("NOTABLE");
          expect(verCalificacionDecimal(9.9)).toEqual("SOBRESALIENTE");
      });

      it('debería devolver "VALOR INCORRECTO" para notas inválidas', () => {
          expect(verCalificacionDecimal(-0.001)).toEqual("VALOR INCORRECTO");
          expect(verCalificacionDecimal(11)).toEqual("VALOR INCORRECTO");
          expect(verCalificacionDecimal(10.00001)).toEqual("VALOR INCORRECTO");
      });
  });

  // Test para parámetros de circunferencia
  describe('parametrosCircunferencia', () => {
      it('debería devolver perímetro y área correctos para radio válido', () => {
          const resultado = parametrosCircunferencia(5);
          expect(resultado.perimetro).toEqual(31.4159, 4);
          expect(resultado.area).toEqual(78.5398, 4);
      });

      it('debería devolver "ERROR" para radios inválidos', () => {
          expect(parametrosCircunferencia(-5)).toEqual("ERROR");
          expect(parametrosCircunferencia(0)).toEqual("ERROR");
          expect(parametrosCircunferencia(5.5)).toEqual("ERROR");
      });
  });

  // Test para comprobar si un año es bisiesto
  describe('esBisiesto', () => {
      it('debería devolver true para años bisiestos', () => {
          expect(esBisiesto(2020)).toEqual(true);
      });

      it('debería devolver false para años no bisiestos', () => {
          expect(esBisiesto(2019)).toEqual(false);
      });

      it('debería devolver "ERROR" para valores no válidos', () => {
          expect(esBisiesto(-2020)).toEqual("ERROR");
          expect(esBisiesto(2020.5)).toEqual("ERROR");
      });
  });

  // Test para convertir hexadecimal a decimal
  describe('hexa2decimal', () => {
      it('debería devolver el valor decimal correcto para valores hexadecimales válidos', () => {
          expect(hexa2decimal("FA8")).toEqual(4008);
          expect(hexa2decimal("A")).toEqual(10);
          expect(hexa2decimal("B")).toEqual(11);
          expect(hexa2decimal("C")).toEqual(12);
          expect(hexa2decimal("F")).toEqual(15);
      });

      it('debería devolver "ERROR" para valores hexadecimales inválidos', () => {
          expect(hexa2decimal("G")).toEqual("ERROR");
          expect(hexa2decimal("-18")).toEqual("ERROR");
      });
  });

});
