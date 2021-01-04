<?php

use Illuminate\Support\Facades\Route;

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

/*  Ruta del tipo request get  */
/*  hay tipos get, post, put, patch*/
/* la diagonal indica la raíz o el servidor */
Route::get('/', function () {
    $name = 'Danilo Gabino';
    return view('welcome', ['name' => $name]);
});

/* el CategoriesController@index es un método que irá en nuestro controlador */
Route::get('/prueba00', 'CategoriesController@index');
