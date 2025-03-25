# Tailwind CSS

Tailwind CSS es un framework de CSS utilitario que permite a los desarrolladores construir interfaces de usuario personalizadas de manera rápida y eficiente. A diferencia de otros frameworks CSS, Tailwind no proporciona componentes predefinidos, sino que ofrece una serie de clases utilitarias que se pueden combinar para crear diseños únicos.

## Características

- **Clases utilitarias**: Tailwind proporciona una amplia gama de clases utilitarias para controlar el diseño, el espaciado, los colores, las tipografías y más.
- **Personalización**: Es altamente configurable y permite personalizar el diseño mediante un archivo de configuración.
- **Responsive**: Facilita la creación de diseños responsivos con clases específicas para diferentes tamaños de pantalla.
- **Modo JIT (Just-In-Time)**: Genera solo las clases CSS que se utilizan en el proyecto, lo que reduce el tamaño del archivo CSS final.

## Instalación

Para instalar Tailwind CSS en tu proyecto, puedes usar npm o yarn:

```bash
npm install tailwindcss
```

o

```bash
yarn add tailwindcss
```

o

```bash
 npm install tailwindcss @tailwindcss/cli
```

## Configuración

Después de instalar Tailwind CSS, crea un archivo de configuración ejecutando el siguiente comando:

```bash
npx tailwindcss init
```

Esto generará un archivo `tailwind.config.js` donde podrás personalizar tu configuración de Tailwind.

## Uso

Para empezar a usar Tailwind CSS, importa el archivo CSS en tu proyecto:

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

Luego, puedes utilizar las clases utilitarias de Tailwind en tu HTML:

```html
<div class="bg-blue-500 text-white p-4">
  ¡Hola, Tailwind CSS!
</div>
```

## Comandos de Vigilancia

Para que Tailwind CSS compile automáticamente los cambios en tu CSS, puedes usar el siguiente comando:

```bash
npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
```

Este comando le dice a Tailwind que observe el archivo `input.css` en la carpeta `src` y genere el archivo `output.css` en la carpeta `dist` cada vez que haya cambios.

Para más información, visita la [documentación oficial de Tailwind CSS](https://tailwindcss.com/docs).
