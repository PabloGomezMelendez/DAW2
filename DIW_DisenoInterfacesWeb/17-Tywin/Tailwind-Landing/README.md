# Diccionario de Clases Tailwind

## Índice
- [Etiqueta `div`](#etiqueta-div)
- [Etiqueta `img`](#etiqueta-img)
- [Etiqueta `h1`, `h2`, `h3`, `h4`, `h5`, `h6`](#etiqueta-h1-h2-h3-h4-h5-h6)
- [Etiqueta `p`](#etiqueta-p)
- [Etiqueta `button`](#etiqueta-button)
- [Explicación del CSS Personalizado](#explicación-del-css-personalizado)

A continuación se presenta un diccionario con la explicación y funcionamiento de cada clase Tailwind utilizada en el HTML del proyecto.

## Etiqueta `div`
- **bg-orange-200**: Establece un color de fondo naranja claro.
- **w-[90%]**: Establece el ancho del elemento al 90% del contenedor padre.
- **bg-white**: Establece un color de fondo blanco.
- **max-w-screen**: Establece el ancho máximo del elemento al ancho de la pantalla.
- **grid**: Aplica un diseño de cuadrícula al contenedor.
- **gap-8**: Aplica un espacio de 2 rem entre los elementos de la cuadrícula.
- **auto-rows-max**: Establece la altura automática de las filas al tamaño máximo del contenido.
- **justify-items-center**: Centra los elementos hijos horizontalmente dentro de la cuadrícula.
- **items-center**: Alinea los elementos hijos en el centro del eje transversal.
- **md:grid-cols-2**: Define una cuadrícula con dos columnas en pantallas medianas y superiores.
- **w-4/5**: Establece el ancho del elemento al 80% del contenedor padre.
- **max-w-sm**: Establece el ancho máximo del elemento a un tamaño pequeño.
- **px-8**: Aplica un padding (relleno) de 2 rem en los lados izquierdo y derecho del elemento.
- **py-4**: Aplica un padding (relleno) de 1 rem en los lados superior e inferior del elemento.
- **border-2**: Aplica un borde de 2 píxeles de ancho.
- **border-zinc-400**: Establece el color del borde a gris.
- **hover:scale-110**: Escala el elemento al 110% cuando es pasado por encima con el cursor.
- **transition-transform**: Aplica una transición suave a las transformaciones CSS.
- **duration-200**: Establece la duración de la transición a 200 milisegundos.

## Etiqueta `img`
- **object-cover**: Escala la imagen para cubrir completamente el contenedor.
- **rounded-full**: Aplica bordes completamente redondeados a la imagen.
- **aspect-square**: Establece una relación de aspecto cuadrada para la imagen.

## Etiqueta `h1`, `h2`, `h3`, `h4`, `h5`, `h6`
- **text-3xl**: Establece el tamaño del texto a 1.875 rem.
- **font-bold**: Aplica un estilo de fuente en negrita.
- **text-center**: Centra el texto horizontalmente.
- **md:text-left**: Alinea el texto a la izquierda en pantallas medianas y superiores.
- **md:text-5xl/normal**: Establece el tamaño del texto a 3 rem y la altura de línea a normal en pantallas medianas y superiores.
- **text-zinc-600**: Establece el color del texto a gris oscuro.

## Etiqueta `p`
- **text-lg**: Establece el tamaño del texto a 1.125 rem.
- **leading-8**: Establece la altura de línea a 2 rem.
- **text-white**: Establece el color del texto a blanco.

## Etiqueta `button`
- **bg-blue-600**: Establece un color de fondo azul oscuro.
- **px-8**: Aplica un padding (relleno) de 2 rem en los lados izquierdo y derecho del elemento.
- **py-4**: Aplica un padding (relleno) de 1 rem en los lados superior e inferior del elemento.

Este diccionario cubre las clases Tailwind más comunes utilizadas en el proyecto. Para más detalles, consulta la [documentación oficial de Tailwind CSS](https://tailwindcss.com/docs).

## Explicación del CSS Personalizado

El CSS personalizado del proyecto incluye las siguientes características:

- **Importación de Tailwind CSS**: Se importa la librería de Tailwind CSS para utilizar sus utilidades en el proyecto.
  ```css
  @import 'tailwindcss';
  ```

- **Definición de Temas de Colores**: Se definen variables CSS para los colores del tema.
  ```css
  @theme colors {
      --color-primary: #0081AF;
      --color-secondary: #00ABE7;
      --color-tertiary: #2DC7FF;
      --color-quaternary: #EAD2AC;
      --color-quinary: #EABA6B;
  }
  ```

- **Fuente Personalizada**: Se define una variable CSS para la fuente principal del proyecto.
  ```css
  --font-primary: 'Roboto';
  ```

Estas configuraciones permiten una mayor flexibilidad y personalización en el diseño de la interfaz, adaptándose a diferentes temas y estilos definidos en el CSS del proyecto.
