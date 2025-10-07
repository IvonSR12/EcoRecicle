<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.landing_page');
});

Route::get('/nosotros', function() {
    return view('home.nosotros');
});

Route::get('/planes', function() {
    return view('home.planes');
});

Route::get('/contacto', function() {
    return view('home.contacto');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

use App\Http\Controllers\Auth\RegisterController;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


/* Route::get('/vistauser', function () {
    return redirect('collections.index');
}); */

// Quitamos el middleware 'auth' temporalmente
Route::get('/vistauser', [CollectionController::class, 'index'])->name('collections.index');
Route::get('/collections/create', [CollectionController::class, 'create'])->name('collections.create');
Route::post('/collections', [CollectionController::class, 'store'])->name('collections.store');
Route::get('/collections/{id}', [CollectionController::class, 'show'])->name('collections.show');

// Nueva ruta del reporte
Route::get('/reporte', [CollectionController::class, 'reporte'])->name('collections.reporte');

// Ruta para exportar el reporte a PDF
Route::get('/reporte/pdf', [CollectionController::class, 'exportarPDF'])->name('collections.reporte.pdf');



/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; */
