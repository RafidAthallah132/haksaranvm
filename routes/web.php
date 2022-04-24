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
    return view('/haksara/halamanisilevel');
});

Route::get('materi', function () {
    return view('/haksara/materi');
});

Route::get('latihansoal', function () {
    return view('/haksara/latihansoal');
});

Route::get('kuis', function () {
    return view('/haksara/kuis');
});

Route::get('jawabankuis', function () {
    return view('/haksara/jawabankuis');
});

Route::get('halamanadmin', function () {
    return view('/haksara/halamanadmin');
});
