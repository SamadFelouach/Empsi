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

//ESPACE ADMIN 
Route::get('/action','ModuleController@index');
Route::get('/index', 'ModuleController@create');
Route::post('/store', 'ModuleController@store');
Route::get('/actions/{id}/edite','ModuleController@edite');
Route::put('/actions/{id}','ModuleController@update');
Route::delete('/actions/{id}/supprimer','ModuleController@delete');


//ESPACE PROFESSEURS 



//ESPACE ETUDIANTS


Route::get('/dash' , 'ModuleController@dash');

Route::get('/', function () {
    return view('auth.login');
});



Auth::routes();

