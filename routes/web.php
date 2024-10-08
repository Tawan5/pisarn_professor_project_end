<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('display', function () {
    return view('display');
});

Route::get('history', function () {
    return view('history');
});

Route::get('userpage', function(){
    return view('userpage');
});

Route::get('setting', function () {
    return view('setting');
});

Route::get('login', function () {
    return view('login');
});

Route::get('linesetting', function () {
    return view('linesetting');
});

Route::fallback(function(){
    return"ไม่พบหน้าเว็บ";
});
