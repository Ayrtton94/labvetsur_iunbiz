<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('user', UserController::class)->only(['index','edit','update'])->names('user');

    Route::resource('linea', LineasController::class)->names('linea');
    Route::resource('categoria',CategoriasController::class)->names('categoria');
    Route::resource('producto', ProductosController::class)->names('producto');


});