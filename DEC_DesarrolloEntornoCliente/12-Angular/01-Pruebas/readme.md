# Guía del Proyecto Angular

## Introducción

Esta guía proporciona información básica sobre cómo crear y gestionar proyectos Angular.

## Prerrequisitos

- Node.js y npm instalados
- Angular CLI instalado globalmente (`npm install -g @angular/cli`)

## Creación de un Nuevo Proyecto Angular

1. Abre tu terminal.
2. Navega al directorio donde deseas crear el proyecto.
3. Ejecuta el siguiente comando:

    ```bash
    ng new my-angular-app --no-standalone
    ```

4. Sigue las indicaciones para configurar tu proyecto.

## Ejecutando el Servidor de Desarrollo

1. Navega a tu directorio de proyecto:

    ```bash
    cd my-angular-app
    ```

2. Inicia el servidor de desarrollo:

    ```bash
    ng serve -o
    ```

3. Abre tu navegador y ve a `http://localhost:4200`.

## Generación de Componentes

Para generar un nuevo componente en tu proyecto Angular, sigue estos pasos:

1. Abre tu terminal.
2. Navega al directorio de tu proyecto.
3. Ejecuta el siguiente comando:

    ```bash
    ng generate component nombre-del-componente
    ```

   Reemplaza `nombre-del-componente` con el nombre que desees para tu componente.

Este comando creará un nuevo directorio con los archivos necesarios para tu componente dentro del directorio `src/app/.pro`

## Generación de Servicios

Para generar un nuevo servicio en tu proyecto Angular, sigue estos pasos:

1. Abre tu terminal.
2. Navega al directorio de tu proyecto.
3. Ejecuta el siguiente comando:

    ```bash
    ng generate service nombre-del-servicio
    ```

   Reemplaza `nombre-del-servicio` con el nombre que desees para tu servicio.

Este comando creará un nuevo archivo de servicio dentro del directorio `src/app/`.

## Generación de Interfaces

Para generar una nueva interfaz en tu proyecto Angular, sigue estos pasos:

1. Abre tu terminal.
2. Navega al directorio de tu proyecto.
3. Ejecuta el siguiente comando:

    ```bash
    ng generate interface nombre-de-la-interfaz
    ```

   Reemplaza `nombre-de-la-interfaz` con el nombre que desees para tu interfaz.

Este comando creará un nuevo archivo de interfaz dentro del directorio `src/app/`.

## Generación de Tuberías

Para generar una nueva tubería en tu proyecto Angular, sigue estos pasos:

1. Abre tu terminal.
2. Navega al directorio de tu proyecto.
3. Ejecuta el siguiente comando:

    ```bash
    ng generate pipe nombre-de-la-tuberia
    ```

   Reemplaza `nombre-de-la-tuberia` con el nombre que desees para tu tubería.

Este comando creará un nuevo archivo de tubería dentro del directorio `src/app/`.

## Uso de Tuberías Predefinidas

Angular proporciona varias tuberías predefinidas que puedes usar en tus plantillas. Aquí hay algunos ejemplos:

1. **DatePipe**: Formatea una fecha.

    ```html
    {{ fecha | date:'dd/MM/yyyy' }}
    ```

2. **UpperCasePipe**: Convierte una cadena a mayúsculas.

    ```html
    {{ texto | uppercase }}
    ```

3. **LowerCasePipe**: Convierte una cadena a minúsculas.

    ```html
    {{ texto | lowercase }}
    ```

4. **CurrencyPipe**: Formatea un número como una moneda.

    ```html
    {{ cantidad | currency:'USD':true }}
    ```

5. **DecimalPipe**: Formatea un número decimal.

    ```html
    {{ numero | number:'1.2-2' }}
    ```

Estas tuberías pueden ser muy útiles para formatear datos en tus plantillas de Angular.

## Construyendo el Proyecto

Para construir tu proyecto para producción, ejecuta:

```bash
ng build --prod
```

La salida estará en el directorio `dist/`.

Se debe tener en cuenta al momento de construir el proyecto para producción que se deben configurar los archivos de configuración de Angular que se ignoran por Git

## Recursos Adicionales

- [Documentación de Angular](https://angular.io/docs)
- [Documentación de Angular CLI](https://angular.io/cli)

## Conclusión

Esta guía proporciona los pasos básicos para crear y gestionar un proyecto Angular. Para información más detallada, consulta la documentación oficial de Angular.
