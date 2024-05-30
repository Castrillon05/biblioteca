<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LibroController;
use App\Http\Controllers\Api\PrestamoController;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\EventoController;
use App\Http\Controllers\Api\MultaController;

Route::group(['prefix' => 'v1'], function () {
    Route::resource('libros', LibroController::class);
    Route::resource('prestamos', PrestamoController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('eventos', EventoController::class);
    Route::resource('multas', MultaController::class);
});

