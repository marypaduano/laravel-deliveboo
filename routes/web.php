<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    // Mostra tutti i ristoranti
    Route::get('/', [RestaurantController::class, 'index'])->name('dashboard');
    // Crea un nuovo ristorante (form)
    Route::get('/restaurants/create', [RestaurantController::class, 'create'])->name('restaurants.create');
    // Salva il nuovo ristorante nel database
    Route::post('/restaurants', [RestaurantController::class, 'store'])->name('restaurants.store');
    // Mostra i dettagli del ristorante
    Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show'])->name('restaurants.show');
    // Modifica il ristorante (form)
    Route::get('/restaurants/{restaurant}/edit', [RestaurantController::class, 'edit'])->name('restaurants.edit');
    // Aggiorna il ristorante nel database
    Route::put('/restaurants/{restaurant}', [RestaurantController::class, 'update'])->name('restaurants.update');
    // Elimina il ristorante
    Route::delete('/restaurants/{restaurant}', [RestaurantController::class, 'destroy'])->name('restaurants.destroy');

    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
});

require __DIR__.'/auth.php';
