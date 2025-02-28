<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/socios', function () {
    return view('socios');
});


Route::get('/dashboard', [SocioController::class, 'index'])->name('dashboard');
Route::post('/importar', [SocioController::class, 'importarExcel'])->name('importar.excel');

Route::post('/enviar-formulario', [ContactoController::class, 'enviarFormulario'])->name('enviar.formulario');
Route::get('/dashboard', [SocioController::class, 'index'])->name('dashboard');

Route::get('/socios/importar', function () {
    return view('socios.import');
})->name('socios.importar');

Route::post('/socios/importar', [SocioController::class, 'importarExcel'])->name('socios.import');

// Rutas para las nuevas vistas
Route::get('/administrador', function () {
    return view('administrador');
})->name('vista.administrador');

Route::get('/usuario', function () {
    return view('usuario');
})->name('vista.usuario');

// Login y logout
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/socios', [SocioController::class, 'index'])->name('socios.index');
Route::get('/socios/create', [SocioController::class, 'create'])->name('socios.create');
Route::post('/socios', [SocioController::class, 'store'])->name('socios.store');
Route::get('/socios/{id}/edit', [SocioController::class, 'edit'])->name('socios.edit');
Route::put('/socios/{id}', [SocioController::class, 'update'])->name('socios.update');
Route::delete('/socios/{id}', [SocioController::class, 'destroy'])->name('socios.destroy');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});

require __DIR__.'/auth.php';

Route::resource('socios', SocioController::class);
Route::get('socios/{id}/qr', [SocioController::class, 'generarQR'])->name('socios.generarQR');
Route::post('/importar-excel', [SocioController::class, 'importarExcel'])->name('importar.excel');
