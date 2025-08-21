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
Route::resource('users', UserController::class);

Route::get('/communities', [CommunityController::class, 'index'])->name('communities.index');
Route::get('/communities/create', [CommunityController::class, 'create'])->name('communities.create');
Route::get('/communities/{id}', [CommunityController::class, 'show'])->name('communities.show');
Route::get('/communities/{id}/edit', [CommunityController::class, 'edit'])->name('communities.edit');
Route::post('/communities', [CommunityController::class, 'store'])->name('communities.store');
Route::put('/communities/{id}', [CommunityController::class, 'update'])->name('communities.update');
Route::delete('/communities/{id}', [CommunityController::class, 'destroy'])->name('communities.destroy');

Route::get('prueba', function(){


});
?>
