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

Route::view('/', 'home');
Route::view('sobre', 'sobre');

//Route::get('cursos', 'CursosController@index');
//Route::get('cursos/create', 'CursosController@create');
//Route::post('cursos', 'CursosController@store');
//Route::get('cursos/{curso}', 'CursosController@show');
//Route::get('cursos/{curso}/edit', 'CursosController@edit');
//Route::patch('cursos/{curso}', 'CursosController@update');
//Route::delete('cursos/{curso}', 'CursosController@destroy');
//
//Exemplo de rota simplificada 'RestFull' onde todas as rotas acima são envolvidas
//em apenas uma rota 'resource'
//
Route::resource('cursos', 'CursosController')->middleware(['auth', 'auth.admin']);
Route::resource('ppcs', 'PpcsController')->middleware(['auth', 'auth.professor']);
Route::resource('coordenadores', 'CoordenadoresController')->middleware(['auth', 'auth.admin']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function (){
    return 'você é administrador';
})->middleware(['auth', 'auth.admin']);



Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function (){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);

});
