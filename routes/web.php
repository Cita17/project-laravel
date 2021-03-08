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
    return view('index');
});


Route::get('/about', function () {
    $nama = 'Cita Aji Pangesti';
    return view('about',['nama' => $nama]);
});

//Route::resource('post', 'PostController');


//Route::get('/', 'PagesController@tampil');
