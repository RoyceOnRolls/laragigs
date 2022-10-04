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
    return view('welcome');
});


Route::get('/hello', function () {
    return response('<h1>Hello King 👑</h1>');
});

Route::get('/number/{num}', function ($num) {
    dd($num);
    return response('The number is: '.$num);
})->where('num', '[0-9]+');