<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route naar de homepage (zonder inloggen)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Beveiligde route naar de 'welcome' pagina (alleen ingelogd + geverifieerd)
Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

// Beveiligde routes
Route::middleware('auth')->group(function () {
    // Gebruikersprofielroutes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Add Data page (vroeger 'dashboard')
    Route::get('/add-data', function () {
        return view('add-data');
    })->name('add-data');
    
});

// Auth routes
require __DIR__.'/auth.php';
