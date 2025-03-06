# Comandos necesarios para trabajar con un proyecto Laravel

Laravel es un framework de PHP para el desarrollo de aplicaciones web. A continuación, se presentan los comandos más utilizados para trabajar con un proyecto Laravel.

## Instalación de Laravel

```bash
composer create-project --prefer-dist laravel/laravel nombre-del-proyecto
```

Este comando crea un nuevo proyecto Laravel en el directorio especificado.

## Servidor de desarrollo

```bash
php artisan serve
```

Este comando inicia un servidor de desarrollo en <http://localhost:8000>.

## Migraciones de base de datos

Las migraciones permiten versionar la estructura de la base de datos.

### Crear una nueva migración

```bash
php artisan make:migration nombre_de_la_migracion
```

Este comando crea una nueva migración de base de datos.

### Ejecutar migraciones

```bash
php artisan migrate
```

Este comando ejecuta todas las migraciones pendientes.

### Revertir la última migración

```bash
php artisan migrate:rollback
```

Este comando revierte la última migración ejecutada.

## Seeders

Los seeders permiten poblar la base de datos con datos de prueba.

### Crear un nuevo seeder

```bash
php artisan make:seeder NombreDelSeeder
```

Este comando crea un nuevo seeder para poblar la base de datos con datos de prueba.

### Ejecutar seeders

```bash
php artisan db:seed
```

Este comando ejecuta los seeders registrados.

## Controladores

Los controladores manejan la lógica de las solicitudes HTTP.

### Crear un nuevo controlador

```bash
php artisan make:controller NombreDelControlador
```

Este comando crea un nuevo controlador.

## Modelos

Los modelos representan las tablas de la base de datos.

### Crear un nuevo modelo

```bash
php artisan make:model NombreDelModelo
```

Este comando crea un nuevo modelo.

## Rutas

Las rutas definen los endpoints de la aplicación.

### Listar todas las rutas registradas

```bash
php artisan route:list
```

Este comando muestra una lista de todas las rutas registradas en la aplicación.

## Caché

La caché mejora el rendimiento de la aplicación almacenando datos temporalmente.

### Limpiar caché de la aplicación

```bash
php artisan cache:clear
```

Este comando limpia la caché de la aplicación.

### Limpiar caché de configuración

```bash
php artisan config:clear
```

Este comando limpia la caché de configuración.

### Limpiar caché de rutas

```bash
php artisan route:clear
```

Este comando limpia la caché de rutas.

### Limpiar caché de vistas

```bash
php artisan view:clear
```

Este comando limpia la caché de vistas.

## Otros comandos útiles

### Generar clave de aplicación

```bash
php artisan key:generate
```

Este comando genera una nueva clave de aplicación.

### Verificar la versión de Laravel

```bash
php artisan --version
```

Este comando muestra la versión actual de Laravel.
