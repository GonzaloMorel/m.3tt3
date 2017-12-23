<?php

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

//ruta estatica
// /hola => 'hola !' GET
Route::get('/hola/mundo',function(){
	return	'Hola !';
});


//ruta dinamica
// /hola/<nombre> => 'hola <nombre>' GET
Route::get('/hola/{nombre}',function($nombre){
	return	"Hola {$nombre}!";
});


//ruta a controller
Route::get('/chao/{nombre}', 'HolaController@chao');