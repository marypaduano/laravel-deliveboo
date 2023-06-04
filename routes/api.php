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

Route::post('/orders', function (Request $request) {
    // Ricevi i dati inviati dal client
    $data = $request->all();

    // Eseguire le operazioni necessarie con i dati ricevuti

    // Restituisci una risposta al client (ad esempio, un messaggio di successo)
    return response()->json(['message' => 'Ordine ricevuto con successo']);
    // return response()->json(['data' => $data]);
});