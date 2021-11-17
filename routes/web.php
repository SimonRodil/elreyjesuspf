<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainIndexController;
use App\Http\Controllers\NetworkController;

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
    return view('main.index');
});
Route::get('/index', function () {
    return view('main.index');
});
// 2. Sobre Nosotros
Route::get('/about-us', function () {
    return view('main.about-us');
});
// 3. Nuestra Cobertura
Route::get('/nuestra-cobertura', function () {
    return view('main.nuestra-cobertura');
});
// 4. Sembrar
Route::get('/sembrar', function () {
    return view('main.sembrar');
});
// 5. Hops
Route::get('/hops', function () {
    return view('main.hops');
});
// 6. Location
Route::get('/location', function () {
    return view('main.location');
});
// 7. Solicitiar Oración
Route::get('/solicitar-oracion', function () {
    return view('main.solicitar-oracion');
});
// 8. Live
Route::get('/live', function () {
    return view('main.live');
});
// 9. Planee Visita
Route::get('/planee-visita', function () {
    return view('main.planee-visita');
});
// 10. Crezca Aqui
Route::get('/crezca-aqui', function () {
    return view('main.crezca-aqui');
});
// 11. Comience Aqui
Route::get('/comience-aqui', function () {
    return view('main.comience-aqui');
});
// 12. Empiece Aqui
Route::get('/empiece-aqui', function () {
    return view('main.empiece-aqui');
});

Auth::routes();
// Logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

// Dashboard Routes
# 1. Inicio
Route::get('/dashboard/index', [HomeController::class, 'index'])->name('index');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

# 2. Perfil
Route::get('/dashboard/profile', [HomeController::class, 'profile'])->name('profile');

# 3. Networks
Route::get('/dashboard/networks', [NetworkController::class, 'index'])->name('network.index');