# Proyecto Fitbit - Documentación

## Descripción General
FitBit es un proyecto de aplicación web desarrollada con Laravel que permite la gestión de usuarios, disciplinas y comunidades, integrando autenticación, verificación de correo y funcionalidades CRUD completas. El diseño utiliza Blade, TailwindCSS y componentes personalizados para una experiencia moderna y adaptable.

---

## Estructura Principal del Proyecto

```
fitbit/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── Auth/                # Controladores de autenticación (Breeze)
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
│       └── auth/                    # Vistas de login, registro, etc.
│
├── routes/
│   ├── web.php                      # Rutas principales y CRUD
│   └── auth.php                     # Rutas Breeze
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

### 1. Autenticación y Seguridad
- **Breeze:** Paquete que gestiona login, registro, recuperación y verificación de email.
- **Middleware:** Protege rutas y controladores (`auth`, `verified`).
- **Logout:** Implementado en el nav personalizado y en Breeze.

### 2. Layouts y Componentes
- **app.blade.php:** Layout principal, incluye nav y estilos globales.
- **navigation.blade.php:** Nav de Breeze (puedes usar el tuyo en `components/nav.blade.php`).
- **Componentes Blade:** Reutilizables para menús, tarjetas, formularios, etc.

### 3. CRUD de Usuarios, Disciplinas y Comunidades
- **Controladores:** Heredan de `CrudController` para lógica común.
- **Vistas:** Carpeta específica para cada entidad (`users/`, `disciplines/`, `communities/`).
- **Validaciones:** En controladores y vistas, usando reglas de Laravel.

### 4. Migraciones, Seeders y Factories
- **Migraciones:** Definen la estructura de la base de datos.
- **Seeders:** Generan datos de prueba.
- **Factories:** Crean datos fake para testing y desarrollo.

### 5. Envío de Correos
- **Mailtrap:** Configurado en `.env` para pruebas de email.
- **Verificación de email:** Breeze lo gestiona automáticamente.

### 6. Rutas
- **web.php:** Define rutas principales, CRUD y protección por middleware.
- **auth.php:** Rutas de autenticación Breeze.

---

## Personalización y Buenas Prácticas
- Usa tu propio nav en el layout principal para mantener coherencia visual.
- Extiende siempre el layout principal en las vistas (`@extends('layouts.app')`).
- Protege las rutas CRUD con middleware `auth` y `verified` si usas verificación de email.
- Mantén las migraciones, seeders y factories alineados con los campos obligatorios de cada modelo.
- Configura correctamente el envío de correos en `.env` para evitar errores.

---

## Cómo ejecutar el proyecto
1. clona el repositorio: https://github.com/Saikurukaizen/S4.01_LaravelMVC
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

6. Loggeate para probar el CRUD:
    - Mail: admin@admin.com
    - Password: 1234

---

## Contacto y soporte
Para dudas o soporte, contacta con el desarrollador del proyecto o revisa la documentación oficial de Laravel y Breeze.
