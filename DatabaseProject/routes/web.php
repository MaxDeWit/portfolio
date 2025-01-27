<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuItemsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/menu-items', [MenuItemsController::class, 'show'])->name('menu-items');
Route::get('/menu-items/create', [MenuItemsController::class, 'create'])->name('menu-items-create');
Route::post('/menu-items', [MenuItemsController::class, 'store'])->name('menu-items.store');
Route::delete('/menu-items/{id}', [MenuItemsController::class, 'destroy'])->name('menu-items.destroy');

require __DIR__ . '/auth.php';
