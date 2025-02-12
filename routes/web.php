<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenosotros', function () {
    return view('sobrenosotros');
});

Route::get('/afiliarte', function () {
    return view('afiliarte');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/socios', [SocioController::class, 'index'])->name('Socios.index');
Route::post('/socios/importar', [SocioController::class, 'importar'])->name('socios.importar');
