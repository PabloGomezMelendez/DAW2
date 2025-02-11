# TEMA 2

## Objeto predefinido: String

El objeto String nos permite manipular cadena de caracteres: extraer una subcadena, pasar a mayúsculas o minúsculas, extraer un carácter, buscar la posición de un carácter, etc.

En el siguiente enlace de w3schools tienes documentados los distintos métodos y propiedades que proporciona la clase String. En los exámenes debes tener dichos materiales offline, ya que podrías necesitar usar cualquiera de ellos  (debes saber interpretar la sintaxis que aparece en la documentación).

- charAt() : carácter en una determinada posición del texto
- concat() : concatenar cadenas de texto
- endsWith() : comprobar si un texto termina con una determinada subcadena
- includes() : comprobar si un texto contiene una subcadena
- indexOf() : buscar la posición de una subcadena dentro de un texto. Se puede indicar el índice para empezar a buscar
- lastIndexOf() : buscar la última posición de una subcadena dentro de un texto
- padEnd() : rellenar con una subcadena al final del texto
- padStart() : rellenar con una subcadena al principio
- repeat() : repetir una subcadena un número de veces
- replace() : reemplazar una subcadena dentro de un texto(una sola vez)
- replaceAll() : reemplazar una subcadena dentro de un texto (varias veces)
- search() : buscar una subcadena dentro de un texto. Se pueden usar expr. regulares
- slice() : extraer una subcadena de un texto. Acepta índices negativos
- split() : dividir un texto usando algún carácter (p.e. una coma)
- startsWith() : comprobar si un texto comienza por una subcadena
- substr() : extraer una subcadena de un texto
- substring() : extraer una subcadena de un texto
- toLowerCase() : convertir texto a minúsculas
- toUpperCase() : convertir texto a mayúscular
- trim() : quitar de un texto los espacios del principio y final
- trimEnd() : quitar de un texto los espacios del final
- trimStart() : quitar de un texto los espacios del principio

## Clase predefinida: Math

La clase Math contiene funciones (métodos estáticos) para realizar operaciones matemáticas: redondeo, raíz cuadrada, seno, coseno, potencia, etc.

En el siguiente enlace de w3schools tienes documentados las distintos métodos y propiedades que proporciona la clase Math. En los exámenes debes tener dichos materiales offline, ya que podrías necesitar usar cualquiera de ellos  (debes saber interpretar la sintaxis que aparece en la documentación).

- abs() : valor absoluto
- ceil() : función techo (redondeo hacia arriba el entero más cercano)
- cos() : función trigonométrica coseno
- E : constante de Euler
- exp() : función exponencial
- floor() : función suelo (redondeo hacia abajo el entero más cercano)
- log() : logaritmo natural (también llamado neperiano)
- log10() : logaritmo en base 10
- max() : función máximo
- min() : función mínimo
- PI : constante PI
- pow() : función potencia
- random() : número pseudoaleatorio entre 0 y menor estricto que 1
- round() : redondear al entero
- sign() : signo de un número
- sin() : función trigonométrica seno
- sqrt() : raiz cuadrada
- tan() : función trigonométrica tangente
- trunc() : truncado (no confundir con el redondeo)

Observación : las funciones trigonométricas trabajan en radianes

### Función para redondear un número con un determinado número de decimales

```javascript
function redondearDecimales(numero,decimales){

       return  Math.round(numero * Math.pow(10,decimales)) / Math.pow(10,decimales);

}
```

Donde el argumento numero indica el número a redondear y decimales el número de decimales que deseamos.

Por ejemplo, si queremos redondear el número 166.386 a dos decimales usaríamos redondearDecimales(166.386, 2)

### Función para convertir grados a radianes

```javascript
function grados2radianes(grados){

       return  grados/180*Math.PI;

}
```

Donde el parámetro grados indica los grados que queremos convertir a radianes. La función devuelve los radianes correspondientes a dichos grados

Por ejemplo, si a la función le pasamo 45 (grados) devolverá 0.785398 (radianes).

## Objeto predefinido: Date

El objeto Date nos permite manipular fechas: obtener el mes de una fecha, el día de la semana, el año, intervalo de tiempo entre dos fechas, etc.

Conceptos relacionados con el objeto Date:

UTC: es la hora universal, también llamada GMT (hora en el meridiano 0, que pasa por la ciudad de Greenwich)

Epoch (o Unix Time): es el tiempo transcurrido desde el 1/1/1970

En el siguiente enlace de w3schools tienes documentados los distintos métodos y propiedades que proporciona la clase Date. En los exámenes debes tener dichos materiales offline, ya que podrías necesitar usar cualquiera de ellos  (debes saber interpretar la sintaxis que aparece en la documentación).

- new Date() : valor absoluto
- getDate() : obtener el día del mes de una fecha (1 a 31)
- getDay() : obtener el día de la semana de una fecha(0 a 6)
- getFullYear() : obtener el año de una fecha
- getHours() : obtener las horas de una fecha (0 a 23)
- getMinutes() : obtener los minutos de una fecha (0 a 59)
- getMoth() : obtener el mes de una fecha (0 a 11)
- getTime() : devuelve el nº msg transcurridos desde el 1/1/1970 hasta la fecha indicada
- getTimezoneOffset() : devuelve la diferencia horaria (en minutos) con la hora UTC
- now() : devuelve nº msg transcurridos desde el 1/1/1970 hasta el momento actual
- setDate() : establecer en una fecha el dia del mes (1 a 31)
- setFullYear() : establecer en una fecha el año
- toLocaleDateString() : muestra en formato texto la parte del día,mes, año de una fecha (sin la hora)
- toLocaleTimeString() : muestra en formato texto una hora
- toLocaleString() : muestra en formato texto la parte del día, mes, año y hora de una fecha

Cómo calcular el día siguiente a una fecha determinada

```javascript
let fecha=new Date(2020,1,28); // 28 de febrero de 2020 (año bisiesto)
fecha.setDate(fecha.getDate()+1); //29 de febrero de 2020
```

## Objeto predefinido: Array

El objeto Array nos permite agrupar en una estructura distintos tipos de items. Podemos recorrer los eletos del Array, añadir y extraer elementos, ordenarlos, buscar la posición de un elemento, etc.

- concat : concatenar arrays
- copyWithin() : copiar eltos dentro de un array
- fill() : rellenar array con un valor
- forEach() : para recorrer arrays
- includes() : comprueba si un array contiene un determinado elto
- indexOf() : devuelve el primer índice de un elto buscado
- Array.isArray() : comprueba si un objeto es de tipo Array
- Array.from() : crea un array a partir de una estructura como un string
- join() : devuelve el array como texto usando el separador indicado
- lastIndexOf() : devuelve el últmo índice de un elto buscado
- length : devuelve la longitud del array
- pop() : extraer un elto del final del array
- push() : añadir un elto al final del array
- reverse() : invierte el orden de un array (modifica el array original)
- shift() : extrae el primer elto de un array
- slice() : devuelve un subarray (sin modificar el original)
- sort() : ordenar array (modifica el array original). Solo funciona con texto, para otro tipo de datos (number, objetos, etc) hay que suministrar una función comparadora
- splice() : añade/elimina eltos de un array (el array original se ve modificado)
- unshift() : añadir un elto al principio de un array

Métodos para filtar, mapear, realizar comprobaciones y realizar búsquedas:

- every() : comprobar que todos los eltos del array cumplen un determinado criterio
- some() : comprobar que al menos un elto del array cumple un determinado criterio
- filter() : filtrar eltos de un array que cumplan un cierto criterio
- map() : realizar un mapeo (transformación) de todos los eltos de un array
- find(): busca un elto en el array que cumpla un determinado criterio
- findIndex() : busca el índice de un elto en el array que cumpla un determinado criterio

```javascript
let fecha=new Date(2020,1,28); // 28 de febrero de 2020 (año bisiesto)
fecha.setDate(fecha.getDate()+1); //29 de febrero de 2020
// Para ordenador números hay que usar una función comparadora

let numeros=[2, 5, 0, 3.5, -2, 12];

numeros.sort(function(num1,num2){ return num1-num2; })

// Función que comprueba duplicidades en un array

function hasDuplicates(arr) {

    return arr.some(x => arr.indexOf(x) !== arr.lastIndexOf(x));

}

// Función que comprueba que todos los elementos de un array de número están comprendidos entre un valor mínimo y máximo

function compruebaEltosArrayEnRango(array,min,max) {

  return  !(array.some(elto => elto > max || elto < min) );

}
```
