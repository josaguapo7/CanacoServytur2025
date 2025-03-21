<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SocioController;


// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/socios', [SocioController::class, 'index'])->name('admin.socios');
//     Route::post('/admin/socios/import', [SocioController::class, 'import'])->name('admin.socios.import');
//     Route::get('/admin/socios/{id}', [SocioController::class, 'show'])->name('admin.socios.show');
// });


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/upload', [DocumentController::class, 'create'])->name('upload.form');
    Route::post('/upload', [DocumentController::class, 'store'])->name('upload.store');

    Route::middleware('can:admin')->group(function () {
        Route::get('/admin/documents', [AdminController::class, 'index'])->name('admin.documents');
    });
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/documents', [DocumentController::class, 'index'])->name('documents.index');
});

Route::delete('/documents/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy');


Route::post('/upload', [DocumentController::class, 'store'])->name('upload.store');

Route::post('/formulario/enviar', [DocumentController::class, 'store'])->name('enviar.formulario');

Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store');

Route::middleware(['auth', 'verified', 'can:admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/{user}/documents', [AdminController::class, 'showDocuments'])->name('admin.user.documents');
});

Route::middleware(['auth', 'verified', 'can:admin'])->group(function () {
    Route::get('/admin/documents', [AdminController::class, 'index'])->name('admin.documents');

});


// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/socios', [SocioController::class, 'index'])->name('admin.socios');
//     Route::post('/admin/socios/import', [SocioController::class, 'import'])->name('admin.socios.import');
//     Route::get('/admin/socios/{id}', [SocioController::class, 'show'])->name('admin.socios.show');
// });

//admin//
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/socios', [SocioController::class, 'index'])->name('admin.socios');
    // Route::post('/admin/socios/import', [SocioController::class, 'import'])->name('admin.socios.import');
    // Route::get('/admin/socios/{id}', [SocioController::class, 'show'])->name('admin.socios.show');
});



//nuevos//

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenosotros', function () {
    return view('sobrenosotros');
});

Route::get('/usuario', function () {
    return view('usuario');
});

Route::get('/qr', function () {
    return view('qr');
});

Route::get('/afiliarte', function () {
    return view('afiliarte');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route:: middleware([
//     'auth: sanctum',
//     config( 'jetstream.auth_session'),
//     'verified'
//     ])-›group (function (){
//     Route:: get('/dashboard', function () {
//     return view( 'dashboard');
//     }) -›name ('dashboard');
// });
