<?php

use App\Http\Controllers\Api\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Restaurant;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/restaurants/{id}', [RestaurantController::class, 'show']);

Route::get('/restaurants', [RestaurantController::class,'index']);

Route::post('/payment', function (Request $request) {
    $order = $request->input('order');

    // Esegui il resto della logica di backend utilizzando l'oggetto order

    return response()->json(['message' => 'Pagamento elaborato con successo']);
});