<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\NewLead;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        // validazione
        $validator = Validator::make($data, [
            'client_name' => 'required|max:255',
            'code' => 'required|max:255',
            'address' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $lead = Lead::create($data);

        // $mail = new NewLead($lead);
        Mail::to('info@deliveboo.com')->send(new NewLead($lead));

        return response()->json([
            'success' => true
        ]);
    }
}
