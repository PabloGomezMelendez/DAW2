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
