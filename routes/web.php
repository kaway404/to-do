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

Route::get('registro', function () {
    return view('registro');
});

Route::get('login', function () {
    return view('login');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('editprofile', function () {
    return view('editprofile');
});

Route::get('newtarefa', function () {
    return view('newtarefa');
});

Route::get('edittarefa', function () {
    return view('edittarefa');
});
