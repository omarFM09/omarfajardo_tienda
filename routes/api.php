<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TransaccionesController;
use App\Http\Controllers\CategoriaProductoController;
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

Route::get('/usuarios',[UsuariosController::class, 'index']);
Route::post('/usuario',[UsuariosController::class, 'store']);
Route::get('/usuarios/{id}',[UsuariosController::class, 'show']);
Route::put('/usuarios/{id}',[UsuariosController::class, 'update']);
Route::delete('/usuarios/{id}',[UsuariosController::class, 'destroy']);

Route::get('/transacciones',[TransaccionesController::class, 'index']);
Route::post('/transaccion',[TransaccionesController::class, 'store']);
Route::get('/transacciones/{id}',[TransaccionesController::class, 'show']);
Route::put('/transacciones/{id}',[TransaccionesController::class, 'update']);
Route::delete('/transacciones/{id}',[TransaccionesController::class, 'destroy']);

Route::get('/categoriaproductos',[CategoriaProductoController::class, 'index']);
Route::post('/categoriaproducto',[CategoriaProductoController::class, 'store']);
Route::get('/categoriaproductos/{id}',[CategoriaProductoController::class, 'show']);
Route::put('/categoriaproductos/{id}',[CategoriaProductoController::class, 'update']);
Route::delete('/categoriaproductos/{id}',[CategoriaProductoController::class, 'destroy']);