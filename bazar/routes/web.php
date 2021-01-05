<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\usuarioController;

//rotas publicas
Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/usuario/{acao}', [usuarioController::class, 'usuario'])->name('usuario');
Route::get('/sair', [usuarioController::class, 'logout'])->name('logout');
Route::post('/logar', [usuarioController::class, 'logar'])->name('logar');

//rotas privadas
Route::group(['middleware' => ['usuario']], function () {
    Route::get('/carrinho', [usuarioController::class, 'carrinho'])->name('carrinho');
});