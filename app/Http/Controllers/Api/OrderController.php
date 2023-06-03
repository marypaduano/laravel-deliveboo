<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Restaurant;
use Braintree\Configuration;
use Braintree\Transaction;

class OrderController extends Controller
{
    // public function store(Request $request)
    // {
    //     // Prendo tutti parametri della richiesta del form
    //     $data = $request->all();        
    
    //     // Messaggi di errore personalizzati
    //     $messages = [
    //         'client_name.required' => 'Il campo nome è obbligatorio.',
    //         'address.required' => 'Il campo indirizzo è obbligatorio.',
    //     ];
    
    //     // Regole di validazione
    //     $rules = [
    //         'client_name' => 'required',
    //         'address' => 'required',
    //     ];
    
    //     // Esegui la validazione dei dati
    //     $validator = Validator::make($data, $rules, $messages);
    
    //     // Controlla se la validazione ha avuto successo
    //     if ($validator->fails()) {
    //         // Se la validazione non è passata, restituisci gli errori
    //         return response()->json([
    //             'success' => false,
    //             'errors' => $validator->errors(),
    //         ], 422);
    //     }
    
    //     // Configura le chiavi di autenticazione di Braintree
    //     Configuration::environment('sandbox'); // Imposta l'ambiente a "sandbox" per i test, usa "production" per l'ambiente di produzione
    //     Configuration::merchantId('7dzbnc5wqqzwztpw');
    //     Configuration::publicKey('tbtgjpj9v8tftcz9');
    //     Configuration::privateKey('bedea09f0f47c18d542b4ff3fe8681f7');
    
    //     // Effettua la convalida del payload.nonce utilizzando Braintree
    //     $result = Transaction::sale([
    //         'amount' => '0.01', // Importo dell'operazione
    //         'paymentMethodNonce' => $data['nonce'], // Modifica il campo per accedere direttamente a 'nonce'
    //         'options' => [
    //             'submitForSettlement' => true // Invia la transazione per l'elaborazione immediata
    //         ]
    //     ]);
    
    //     if ($result->success) {
                
    //         // Creo un nuovo ordine
    //         $order = new Order;
    
    //         // Riempio i dati dell'ordine
    //         $order->fill($data);
            // $order->status = 0;
    
    //         $products = str_replace(['[', ']'], '', $data['products_id']);
    //         $productsArray = explode(',', $products);
    
    //         // Trasformo la quantità della richiesta in un'array, togliendo però i caratteri '[' e ']'
    //         $amount = str_replace(['[', ']'], '', $data['amount']);
    //         $amountArray = explode(',', $amount);
    
    //         // Recupera i prezzi dei piatti corrispondenti agli 'product_id' forniti come parametro
    //         $productPrices = Product::whereIn('id', $productsArray)->pluck('price', 'id')->toArray();
    
    //         // Calcola la somma totale dei prezzi dei piatti
    //         $totalAmount = 0;
    
    //         for ($i = 0; $i < count($productsArray); $i++) {
    //             $productId = $productsArray[$i];
    //             $amount = $amountArray[$i];
    
    //             $productPrice = $productPrices[$productId];
    //             $totalAmount += $productPrice * $amount;
    //         }
    
    //         // Assegna la somma totale dei prezzi a $order->total_amount
    //         $order->total_price = $totalPrice;
    
    //         // Salvo l'ordine
    //         $order->save();
    
    //         // Per ogni piatto attacco la quantità
    //         for ($i = 0; $i < count($productsArray); $i++) {
    //             // Attacco l'id del piatto nella tabella ponte
    //             $order->products()->attach($productsArray[$i], ['amount' => $amountArray[$i]]);
    //         }
    
    //         $restaurant = Restaurant::where('id', $data['restaurant_id'])->first();
    //         $products_list = Product::whereIn('id', $productsArray)->get();
    
    //         return response()->json([
    //             'success' => true,
    //         ]);
    
    //     } else {
    //         // La transazione non è stata completata
    //         $errors = $result->errors->deepAll();
    
    //         return response()->json([
    //             'success' => false,
    //             'payload.nonce' => false,
    //             'errors' => $errors,
    //         ], 422);
    //     }
    // }
}
