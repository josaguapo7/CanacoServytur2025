<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenosotros', function () {
    return view('sobrenosotros');
});

Route::get('/afiliarte', function () {
    return view('afiliarte');
});

Route::get('/socios', function () {
    return view('socios.index');
});

Route::get('/socios', [SocioController::class, 'index'])->name('Socios.index');
Route::post('/socios/importar', [SocioController::class, 'importar'])->name('Socios.importar');
