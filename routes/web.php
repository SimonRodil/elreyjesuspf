<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainIndexController;

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

//-- Main Website
// 1. Index
Route::get('/', function () {
    return view('layouts.main.index');
});
Route::get('/index', function () {
    return view('layouts.main.index');
});
// 2. Sobre Nosotros
Route::get('/about-us', function () {
    return view('layouts.main.about-us');
});
// 2. Nuestra Cobertura
Route::get('/nuestra-cobertura', function () {
    return view('layouts.main.nuestra-cobertura');
});