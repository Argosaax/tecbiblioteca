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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('categorias', function(){
    return view('admins.categorias');
});
*/

Route::resource('libro', 'LibroController');
Route::resource('categoria', 'CategoriaComtroller');
Route::resource('departamentos', 'DepartamentoController');

Route::resource('editorial', 'EditorialController');

Route::resource('autores', 'AutorController');


Route::resource('categoria', 'CategoriaController');