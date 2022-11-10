<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vinilo;
use App\Http\Controllers\cdcasete;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('viniloIndex', [vinilo::class, 'index'])->name('vinilo.index');
    Route::get('viniloNuevo', [vinilo::class, 'nuevoVinilo'])->name('vinilo.nuevo');
    Route::post('viniloGuardar', [vinilo::class, 'guardarVinilo'])->name('vinilo.guardarVinilo');
    Route::get('viniloModificar/{id}', [vinilo::class, 'viniloModificar'])->name('vinilo.modificarVinilo');
    Route::put('viniloActualizar/{id}', [vinilo::class, 'viniloActualizar'])->name('vinilo.viniloActualizar');
    Route::delete('viniloEliminar/{id}', [vinilo::class, 'viniloEliminar'])->name('vinilo.viniloEliminar');

    Route::get('cdCaseteIndex', [cdcasete::class, 'index'])->name('cdcasete.index');
    Route::get('cdCaseteNuevo', [cdcasete::class, 'nuevoCasete'])->name('cdcasete.nuevoCasete');
    Route::post('cdCaseteGuardar', [cdcasete::class, 'guardarCasete'])->name('cdcasete.guardarCasete');
    Route::get('cdCaseteModificar/{id}', [cdcasete::class, 'cdCaseteModificar'])->name('cdcasete.cdCaseteModificar');
    Route::put('cdCaseteActualizar/{id}', [cdcasete::class, 'cdCaseteActualizar'])->name('cdcasete.cdCaseteActualizar');
    Route::delete('cdCaseteEliminar/{id}', [cdcasete::class, 'cdCaseteEliminar'])->name('cdcasete.cdCaseteEliminar');
    
    
});
