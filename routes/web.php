<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\CommunityController;
use App\Models\User;
use App\Models\Discipline;
use App\Models\Community;

Route::get('/', function () { return view('home'); })->name('home');

Route::get('/disciplines', [DisciplineController::class, 'index'])->name('disciplines.index');
Route::get('/disciplines/create', [DisciplineController::class, 'create'])->name('disciplines.create');
Route::get('/disciplines/{id}', [DisciplineController::class, 'show'])->name('disciplines.show');
Route::get('/disciplines/{id}/edit', [DisciplineController::class, 'edit'])->name('disciplines.edit');

Route::post('/disciplines', [DisciplineController::class, 'store'])->name('disciplines.store');

Route::put('/disciplines/{id}', [DisciplineController::class, 'update'])->name('disciplines.update');

Route::delete('/disciplines/{id}', [DisciplineController::class, 'destroy'])->name('disciplines.destroy');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/communities', [CommunityController::class, 'index'])->name('communities.index');
Route::get('/communities/create', [CommunityController::class, 'create']);
Route::get('/communities/{id}', [CommunityController::class, 'show']);

//Get: Obtener un registro
//Post: Crear un nuevo registro
//Put: Actualizar un registro
//Patch: Actualizar parcialmente un registro
//Delete: Eliminar un registro

Route::get('prueba', function(){

    /*
        Para ver los valores almacenados en la base de datos:
        dd($variable->getAttributes())
    */
    
    //CREAR NUEVO REGISTRO
        //Usuarios
        /* $user = new User;
                
        if(!User::where('email', 'freni@frenillo.com')->exists()) {
            User::create([
                'name' => 'Johnny',
                'lastname' => 'Frenillo',
                'date_of_birth' => '1988-10-01',
                'email' => 'freni@frenillo.com',
            'password' => bcrypt('123456'),
            'bank_acc' => '123456789',
            'discipline_id' => 2
            ]);
        return $user;
        } else {
            return response('El email ya está en uso.', 409);
        } */


        //Disciplinas
        /* $discipline = Discipline::create([
            'name' => 'BoDYBuIldeR',
            'description' => 'Levanta peso y gana músculo'
        ]);

        // Mostrar el nombre con la primera letra en mayúscula (gracias al accessor)
        return $discipline; */


        //Comunidades
       /*  $community = Community::create([
            'name' => 'Pega Pega',
            'description' => 'Grupo de boxeo',
            'user_id' => 1,
            'discipline_id' => 2
        ]);

        return $community; */


/* 
        $discipline = Discipline::find(3);

        return $discipline;
 */

    //ACTUALIZAR REGISTRO DISCIPLINA
    
    /*
        $discipline = Discipline::where('name', 'Tai-Chi')->first();
        $discipline->description = 'Combina movimientos del kung-fu con técnicas de respiración y meditación.';
        $discipline->save();

        return $discipline;
    */

    //TRAER VARIOS REGISTROS

    /*
        all() - Trae todos los registros
        where() - Filtra los registros según la condición
        En where(), se le puede pasar tres parámetros: nombre de la columna, un operador y el valor a comparar.
        get() - Trae los registros que cumplen con una condición
        find() - Trae un registro por su clave primaria.
        first() - Trae el primer registro que cumple con una condición.
        select() - Permite seleccionar columnas específicas.
        take() - Limita la cantidad de registros a obtener.
        orderBy() - Ordena los resultados según una columna. Ej: 
            Discipline::orderBy('name', 'desc')->get();
    */

    //LISTAR TODAS LAS DISCIPLINAS

    /*
        $discipline = Discipline::orderBy('discipline', 'asc')
                                        ->select('id', 'name', 'description')
                                        ->take(2)
                                        ->get();

        return $discipline;
    */

    //ELIMINAR REGISTRO DISCIPLINA

    /*
        $discipline = Discipline::find(1);
        $discipline->delete();

        return "Eliminado ";
    */  


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
});
?>
