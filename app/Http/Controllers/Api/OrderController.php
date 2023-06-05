<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\NewLead;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request['order'];

        // validazione
        $validator = Validator::make($data, [
            'client_name' => 'required|max:255',
            'date' => 'required',
            'code' => 'required|max:255',
            'address' => 'required',
            'restaurantId' => 'exists:restaurants,id',
            'products_id' => 'exists:products,id',
            'total_price' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $new_order = new Order($data);
        $new_order->restaurant()->associate($data['restaurantId']);
        $new_order->save();

        if (isset($data['products_id'])) {
            $new_order->products()->attach($data['products_id']);
        }

        return response()->json([
            'success' => true,
            'response' => 'il pagamento è andato a buon fine'
        ]); 
    }

}
