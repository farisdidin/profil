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

Route::get('ini dari master', function(){
    return view('halo dari master');
});
Route::get('ini dari cobaBranch', function(){
    return view('halo dari cobaBranch');
});
Route::get('ini dari master2', function(){
    return view('halo dari master2');
});
