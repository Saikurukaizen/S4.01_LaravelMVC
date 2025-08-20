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

Route::resource('disciplines', DisciplineController::class);

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/communities', [CommunityController::class, 'index'])->name('communities.index');
Route::get('/communities/create', [CommunityController::class, 'create']);
Route::get('/communities/{id}', [CommunityController::class, 'show']);


Route::get('prueba', function(){


});
?>
