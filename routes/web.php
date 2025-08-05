<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\CommunityController;

Route::get('/', HomeController::class);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/disciplines', [DisciplineController::class, 'index']);
Route::get('/disciplines/{id}', [DisciplineController::class, 'show']);

Route::get('/communities', [CommunityController::class, 'index']);
Route::get('/communities/{id}', [CommunityController::class, 'show']);

//Get: Obtener un registro
//Post: Crear un nuevo registro
//Put: Actualizar un registro
//Patch: Actualizar parcialmente un registro
//Delete: Eliminar un registro

/*
Conclusiones sobre rutas y métodos HTTP en Laravel:

- Las rutas se definen con una URI y un callback, permitiendo acceder fácilmente a listados y fichas de entidades.
- Para acceder a la ficha de un registro específico, se usa un parámetro en la URI (por ejemplo, /users/{id}).
- Los métodos HTTP definen las operaciones CRUD:
    - GET: Obtener datos (listado o ficha)
    - POST: Crear un nuevo registro
    - PUT: Actualizar todo el registro
    - PATCH: Actualizar parcialmente el registro (solo algunos campos)
    - DELETE: Eliminar un registro
- PUT reemplaza el recurso completo, PATCH solo modifica los campos indicados.
- No es necesario implementar autenticación si la navegación es tipo admin.
*/

?>
