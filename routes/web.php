<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/dashboard', function(){
    return redirect()->route('home');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function() {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('disciplines', DisciplineController::class);
    Route::resource('users', UserController::class);
    Route::resource('communities', CommunityController::class);
});
require __DIR__.'/auth.php';
