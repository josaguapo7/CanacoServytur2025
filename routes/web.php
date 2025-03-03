<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenosotros', function () {
    return view('sobrenosotros');
});

Route::get('/afiliarte', function () {
    return view('afiliarte');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/socios', function () {
    return view('socios');
});

Route::get('/usuario', function () {
    return view('usuario');
})->middleware(['auth'])->name('usuario');

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

Route::get('/admin', function () {
    // Lógica para el área de administración
})->middleware('admin');


Route::middleware(['auth', 'checkRole:usuario'])->group(function () {
    Route::get('/usuario', function () {
        return view('usuario');
    })->name('usuario');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');




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

// Muestra el formulario de registro
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

// Procesa el formulario de registro
Route::post('/register', [RegisteredUserController::class, 'store']);


// Rutas para recuperación de contraseña


// Muestra el formulario para solicitar restablecimiento de contraseña
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

// Procesa la solicitud y envía el correo con el enlace de recuperación
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

// Muestra el formulario para restablecer la contraseña con el token recibido
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

// Procesa el restablecimiento de la contraseña
Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');
