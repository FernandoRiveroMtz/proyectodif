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

Route::get('/', function () {
    return view('home');
});


//Relación role-Usuario
Route::get('/rolusuario', function(){
    return \App\Models\role::with('user')->get();
});

//Relacion usuario-role
Route::get('/usuariorol', function(){
    return \App\Models\user::with('role')->get();
});

/* Relacion persona-usuario */
Route::get('/usuperso', function(){
    return \App\Models\persona::with('user')->get(); 
});

/* Relacion usuario-persona */
Route::get('/usuperson', function(){
    return \App\Models\User::with('persona')->get(); 
});

/* Relacion imagen-publicaciones */
Route::get('/imgpublic', function(){
    return \App\Models\imagen::with('publicaciones')->get();
});

/* Relacion publicaciones-imagen */
Route::get('/imgpublic', function(){
    return \App\Models\imagen::with('publicaciones')->get();
});