<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//ruta para las notas
Route::get('/dashboard', [NotaController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/notas/create', [NotaController::class, 'create'])->name('notas.create');
    Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');
    Route::get('/notas', [NotaController::class, 'index'])->name('notas.index');

});

require __DIR__.'/auth.php';

