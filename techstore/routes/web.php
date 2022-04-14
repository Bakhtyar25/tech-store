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
    return view('pages/homepage');
});

Route::get('/homepage', function () {
    return view('pages/homepage');
});

Route::get('/Laptops', function () {
    return view('pages/Gaming Laptops');
});

Route::get('/headsets', function () {
    return view('pages/headsets');
});

Route::get('/kayboards', function () {
    return view('pages/kayboards');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/mouse', function () {
    return view('pages/mouse');
});

Route::get('/rest', function () {
    return view('pages/rest');
});

Route::get('/signup', function () {
    return view('pages/signup');
});

Route::get('/SmartPhone', function () {
    return view('pages/SmartPhone');
});

Route::get('/TABLET', function () {
    return view('pages/TABLET');
});