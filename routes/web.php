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
    return view('Home');
});
Route::get('/cursos', 'CursosController@list');
Route::post('/cursos', 'CursosController@store');


Route::get('/ppc', function () {
    return view('interno.ppc');
});
Route::get('/professor', function () {
    return view('interno.professor');
});
Route::get('/form/professor', function () {
    return view('interno.formprofessor');
});
Route::get('/disciplina', function () {
    return view('interno.disciplina');
});
Route::get('/plano', function () {
    return view('interno.plano');
});
Route::get('/cronograma', function () {
    return view('interno.cronograma');
});
Route::get('/bibliografia', function () {
    return view('interno.bibliografia');
});
Route::get('/reuniao', function () {
    return view('interno.bibliografia');
});
Route::get('/mec', function () {
    return view('interno.bibliografia');
});
Route::view('sobre', 'sobre');