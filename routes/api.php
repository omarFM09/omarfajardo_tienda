<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request){
//     return $request->user();
// })




Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {


    Route::post('login',[\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    // Route::post('logout', [\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
    // Route::post('refresh', [\App\Http\Controllers\AuthController::class,'refresh'])->name('refresh');
   // Route::get('me', [\App\Http\Controllers\AuthController::class,'me'])->name('me');
});

Route::get('/categorias',[CategoriaController::class, 'index']);
Route::post('/categoria',[CategoriaController::class, 'store']);
Route::get('/categorias/{id}',[CategoriaController::class, 'show']);
Route::put('/categorias/{id}',[CategoriaController::class, 'update']);
Route::delete('/categorias/{id}',[CategoriaController::class, 'destroy']);

Route::get('/productos',[ProductoController::class, 'index']);
Route::post('/producto',[ProductoController::class, 'store']);
Route::get('/productos/{id}',[ProductoController::class, 'show']);
Route::put('/productos/{id}',[ProductoController::class, 'update']);
Route::delete('/productos/{id}',[ProductoController::class, 'destroy']);