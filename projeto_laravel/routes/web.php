<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\GatoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

Route::resources([
    'gatos' => GatoController::class,
    #produtos => ProdutosController::class
]);

Route::get('/gatos/delete/{id}', [GatoController::class,'delete']);