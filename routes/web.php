<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Http\Controllers\purchaseController;

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

Route::get('/product/', [productController::class, 'displayEmpty']);

Route::get('/product/{id}', [productController::class, 'display']);

Route::post('/product/', [productController::class, 'displayEmpty']);

Route::patch('/product/{id}', [productController::class, 'edit']);

Route::delete('/product/{id}', [productController::class, 'delete']);

Route::get('/user/', [productController::class, 'displayEmpty']);

Route::get('/user/{id}', [userController::class, 'display']);

Route::post('/user/', [userController::class, 'displayEmpty']);

Route::patch('/user/{id}', [userController::class, 'edit']);

Route::delete('/user/{id}', [userController::class, 'delete']);

Route::get('/purchase/', [purchaseController::class, 'displayEmpty']);

Route::get('/purchase/{id}', [purchaseController::class, 'display']);

Route::get('/user/{userId}/purchase/{buyId}', [purchaseController::class, 'buyStatus']);

Route::post('/purchase/', [purchaseController::class, 'displayEmpty']);

Route::patch('/purchase/', [purchaseController::class, 'edit']);

Route::delete('/purchase/', [purchaseController::class, 'delete']);
