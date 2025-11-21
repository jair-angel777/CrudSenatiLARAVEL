<?php

use App\Http\Controllers\CursosControler;
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('mi_vista', function () {
    return view('mi_vista');
});

Route::get('suma', function () {
    return view('Vista1');
});

Route::get('resta', function () {
    return view('Vista2');
});

Route::get('multi', function () {
    return view('Vista3');
});

Route::get('/curso', [CursosControler::class,'index']);


Route::get('/user', action: [UserControler::class,'index']);

#ACTUALISAR USUARIO
Route::get('/user/edit', [UserControler::class,'edit']);
Route::post('/user/update', [UserControler::class,'update']);

# CREAR USUARIO
Route::get('/user/create', action: [UserControler::class,'create']);
Route::post('/user/store', [UserControler::class,'store']);

#ELIMINAR USUARIO
Route::get('/user/delete', action: [UserControler::class,'delete']);

#pokemon

Route::get('/pokemon', function () {
    return view('pokemon');
});
