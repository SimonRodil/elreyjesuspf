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
// 3. Nuestra Cobertura
Route::get('/nuestra-cobertura', function () {
    return view('layouts.main.nuestra-cobertura');
});
// 4. Sembrar
Route::get('/sembrar', function () {
    return view('layouts.main.sembrar');
});
// 5. Hops
Route::get('/hops', function () {
    return view('layouts.main.hops');
});
// 6. Location
Route::get('/location', function () {
    return view('layouts.main.location');
});
// 7. Solicitiar Oración
Route::get('/solicitar-oracion', function () {
    return view('layouts.main.solicitar-oracion');
});
// 8. Live
Route::get('/live', function () {
    return view('layouts.main.live');
});
// 9. Planee Visita
Route::get('/planee-visita', function () {
    return view('layouts.main.planee-visita');
});
// 10. Crezca Aqui
Route::get('/crezca-aqui', function () {
    return view('layouts.main.crezca-aqui');
});
// 11. Comience Aqui
Route::get('/comience-aqui', function () {
    return view('layouts.main.comience-aqui');
});
// 12. Empiece Aqui
Route::get('/empiece-aqui', function () {
    return view('layouts.main.empiece-aqui');
});

Auth::routes();
// Logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

// Dashboard Routes
# 1. Inicio
Route::get('/dashboard/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# 2. Perfil
Route::get('/dashboard/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');