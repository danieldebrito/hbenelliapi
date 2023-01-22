<?php
/// juntasmeyro.com.ar
/// https://www.apiphp.juntasmeyro.wnpower.host/public/api/articulos

/// local
/// http://127.0.0.1:8000/api/pedidoitems

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
////////////////////////////////////////////////   controlers /-////////////////////////////////////////
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\IntegralDetalleController;
use App\Http\Controllers\RecetaItemController;

Route::group(['middleware' => ['cors']], function () {
    Route::get('/articulos',[ ArticuloController::class, 'index']);
    Route::post('/articulos',[ ArticuloController::class, 'store']);
    Route::delete('/articulos/{id}',[ ArticuloController::class, 'destroy']);
    Route::get('/articulos/{id}',[ ArticuloController::class, 'show']);
    Route::post('/articulos/{id}',[ ArticuloController::class, 'update']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/categorias',[ CategoriaController::class, 'index']);
    Route::post('/categorias',[ CategoriaController::class, 'store']);
    Route::delete('/categorias/{id}',[ CategoriaController::class, 'destroy']);
    Route::get('/categorias/{id}',[ CategoriaController::class, 'show']);
    Route::post('/categorias/{id}',[ CategoriaController::class, 'update']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/ingredientes',[ IngredienteController::class, 'index']);
    Route::post('/ingredientes',[ IngredienteController::class, 'store']);
    Route::delete('/ingredientes/{id}',[ IngredienteController::class, 'destroy']);
    Route::get('/ingredientes/{id}',[ IngredienteController::class, 'show']);
    Route::post('/ingredientes/{id}',[ IngredienteController::class, 'update']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/integralesdetalle',[ IntegralDetalleController::class, 'index']);
    Route::post('/integralesdetalle',[ IntegralDetalleController::class, 'store']);
    Route::delete('/integralesdetalle/{id}',[ IntegralDetalleController::class, 'destroy']);
    Route::get('/integralesdetalle/{id}',[ IntegralDetalleController::class, 'show']);
    Route::post('/integralesdetalle/{id}',[ IntegralDetalleController::class, 'update']);
});

Route::group(['middleware' => ['cors']], function () {
    Route::get('/recetaitems',[ RecetaItemController::class, 'index']);
    Route::post('/recetaitems',[ RecetaItemController::class, 'store']);
    Route::delete('/recetaitems/{id}',[ RecetaItemController::class, 'destroy']);
    Route::get('/recetaitems/{id}',[ RecetaItemController::class, 'show']);
    Route::post('/recetaitems/{id}',[ RecetaItemController::class, 'update']);
});

