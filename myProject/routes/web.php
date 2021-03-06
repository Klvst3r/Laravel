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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function (){
	return 'Home';
});

Route::get('/usuarios', 'UserController@index');

//usuarios/nuevo != usuarios/[0-9]+
// Forma 1: ->where('id','[0-9]+');
// Forma 2: ->where('id','\d+');
// Forma 3, Letras y numeros: ->where('id','\w+');
/*Route::get('/usuarios/{id}', function($id){
	return "Mostrando detalle del usuario: {$id}";
})->where('id','[0-9]+');*/

Route::get('/usuarios/{id}', 'UserController@show')
->where('id','[0-9]+');


//Creating Users
////usuarios/nuevo
/*Route::get('/usuarios/nuevo', function(){
	return 'Crear nuevo usuario';
});*/
Route::get('/usuarios/nuevo', 'UserController@create');


Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

