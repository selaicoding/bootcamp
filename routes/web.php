<?php

use Facade\FlareClient\View;
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
})->name('welcome');

Route::get('login', function(){
    return view('login');
})->name('login');

Route::get('checkout', function() {
    return view('checkout');
})->name('checkout');

Route::get('succes-checkout', function(){
    return view('success');
})->name('success-checkout');
