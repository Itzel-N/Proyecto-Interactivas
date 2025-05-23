<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CorreoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bienvenida');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/guardarLugar',[AdminController::class, 'guardarLugar'])->name('guardar.lugar');
    Route::get('/eliminarLugar/{id}',[AdminController::class, 'eliminarLugar'])->name('eliminar.lugar');
    Route::post('/editarLugar/{id}', [AdminController::class, 'actualizarLugar'])->name('actualizar.lugar');

    Route::post('/guardarEvento',[AdminController::class, 'guardarEvento'])->name('guardar.evento');
    Route::get('/eliminarEvento/{id}',[AdminController::class, 'eliminarEvento'])->name('eliminar.evento');
    Route::post('/editarEvento/{id}', [AdminController::class, 'actualizarEvento'])->name('actualizar.evento');

    Route::get('/lugares',[AdminController::class, 'crudLugares'])->name('lugares.index');
    Route::get('/eventos',[AdminController::class, 'crudEventos'])->name('eventos.index');
    Route::get('/eventosp',[AdminController::class, 'crudEventosp'])->name('eventosp.index');
    Route::get('/usuarios',[AdminController::class, 'crudUsuarios'])->name('usuarios.index');
    //Route::post('/enviar-reporte', [CorreoController::class, 'enviar'])->name('enviar.reporte');
});

require __DIR__.'/auth.php';
