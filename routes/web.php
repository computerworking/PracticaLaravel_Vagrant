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

Route::get('/home',function(){
    return  "estamos en laravel, el problema como lo subo a github";
});

Route::get('/post/{id}/{nom}',function($id,$nom){
     return "el numero de post:".$id ." user :". $nom;
 })->where('nom','[a-z A-Z]*');
Route::get('/casa','PaginaController@inicio');
Route::get('/index/{id}','ejemplo3Controller@index');
                     