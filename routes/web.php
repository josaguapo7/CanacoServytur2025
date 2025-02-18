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


