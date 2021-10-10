<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Models\Contatos;



Route::get('/cadastroCliente',function(){return view('viewCliente.cadastroCliente');});
Route::get('/',[ClienteController::class,'index']);
Route::post('/cadastroCliente',[ClienteController::class,'cadastrar']);
Route::get('/visualizarcliente/{id}',[clienteController::class,'visualizar']);
Route::delete('/deletarcliente/{id}',[clienteController::class,'destroy']);
Route::put('/atualizarcliente/{id}',[clienteController::class,'update']);


