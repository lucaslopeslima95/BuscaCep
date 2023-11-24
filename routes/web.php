<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;

Route::get('/', [EnderecoController::class,'index'])->name('home');
Route::get('/adicionar', [EnderecoController::class,'adicionar'])->name('adicionar');
Route::get('/buscar', [EnderecoController::class,'buscar'])->name('buscar');
Route::post('/salvar', [EnderecoController::class,'salvar'])->name('salvar');
