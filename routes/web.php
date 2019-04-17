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
    return view('Pages.main');
});
Route::get('/product/detail', function () {
    return view('Pages.product/detail');
});
Route::get('/contactUs', function () {
    return view('Pages.contact');
});
