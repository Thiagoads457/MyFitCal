<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\InformacoesController;
use App\Http\Controllers\RefeicoesController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'gerarGrafico'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('categoria', CategoriaController::class);
    Route::resource('informacoes', InformacoesController::class);
    Route::resource('refeicoes', RefeicoesController::class);
    
});

require __DIR__.'/auth.php';
