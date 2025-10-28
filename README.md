# Fitbit

## 👤 Alumno
Desarrollado por Marc Sanchez

## 📄 Descripción
Fitbit es el nombre de proyecto que contiene un CRUD en Patrón MVC, usando el framework Laravel para su desarrollo. Permite la gestión de usuarios, disciplinas y comunidades.

## Estructura Principal del Proyecto

```
fitbit/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── CrudController.php   # Controlador base para CRUD
│           ├── UserController.php   # CRUD de usuarios
│           ├── DisciplineController.php # CRUD de disciplinas
│           ├── CommunityController.php  # CRUD de comunidades
│           └── ...
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   ├── app.blade.php        # Layout principal
│       │   ├── navigation.blade.php # Nav predeterminado Breeze
│       ├── components/
│       │   └── nav.blade.php        # Nav personalizado
│       ├── home.blade.php           # Vista principal
│       ├── dashboard.blade.php      # Vista dashboard (opcional)
│       ├── users/                   # Vistas CRUD usuarios
│       ├── disciplines/             # Vistas CRUD disciplinas
│       ├── communities/             # Vistas CRUD comunidades
│
├── routes/
│   ├── web.php                      # Rutas principales y CRUD
│
├── database/
│   ├── migrations/                  # Migraciones de tablas
│   ├── seeders/                     # Seeders para datos de prueba
│   └── factories/                   # Factories para datos fake
│
├── public/                          # Archivos públicos y assets
├── config/                          # Configuración de Laravel
├── .env                             # Variables de entorno
├── composer.json                    # Dependencias PHP
├── package.json                     # Dependencias JS
└── ...
```

---

## Partes Clave del Proyecto

### 1. Layouts y Componentes
- **app.blade.php:** Layout principal, incluye nav y estilos globales.
- **navigation.blade.php:** Nav de Breeze (puedes usar el tuyo en `components/nav.blade.php`).
- **Componentes Blade:** Reutilizables para menús, tarjetas, formularios, etc.

### 2. CRUD de Usuarios, Disciplinas y Comunidades
- **Controladores:** Heredan de `CrudController` para lógica común.
- **Vistas:** Carpeta específica para cada entidad (`users/`, `disciplines/`, `communities/`).
- **Validaciones:** En controladores y vistas, usando reglas de Laravel.

### 3. Migraciones, Seeders y Factories
- **Migraciones:** Definen la estructura de la base de datos.
- **Seeders:** Generan datos de prueba.
- **Factories:** Crean datos fake para testing y desarrollo.

### 4. Rutas
- **web.php:** Define rutas principales, CRUD y protección por middleware.

---

## Personalización y Buenas Prácticas
- Usa tu propio nav en el layout principal para mantener coherencia visual.
- Extiende siempre el layout principal en las vistas (`@extends('layouts.app')`).
- Mantén las migraciones, seeders y factories alineados con los campos obligatorios de cada modelo.
- Configura correctamente el envío de correos en `.env` para evitar errores.

---

## 🎯 Palabras Clave
- Laravel
- Composer
- Artisan
- Migrations
- ORM Eloquent
- Componentes
- Blade


## 🛠️ Tecnologías utilizadas
- XAMPP v.3.3.0 para el servidor local
- Laravel v.12.0, PHP 8.3, Composer 2.8.10 para el entorno de desarrollo
- IDE: Visual Studio Code
- Git & GitHub

## Cómo ejecutar el proyecto
1. clona el repositorio: https://github.com/Saikurukaizen/S4.01_LaravelMVC

Instala composer:
```bash

composer install

```

2. Configura `.env` (base de datos y correo).
3. Ejecuta migraciones y seeders:

   ```bash

   php artisan migrate --seed

   ```
4. Inicia el servidor:

   ```bash

   php artisan serve
   
   ```
5. Accede a la app en `http://localhost:8000` o según tu configuración local.

