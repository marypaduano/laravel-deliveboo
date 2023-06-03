

@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-center py-5">Ordine {{ $order->code }}</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Ordine ricevuto da:</th>
            <th scope="col">Data ordine:</th>
            <th scope="col">Indirizzo consegna:</th>
            <th scope="col">Totale ordine:</th>
        </thead>
        <tbody>                 
            <tr>
              <td>
                  <strong>{{ $order->client_name }}</strong>
              </td>
              <td>
                  <p>{{ $order->date }}</p>
              </td>
              <td>
                  <p>{{ $order->address }}</p>
              </td>
              <td>
                  <p>&euro; {{ $order->total_price}} </p>
              </td>
              
            <td>
    </table>
</div>

<div class="container">
    <h1 class="text-center py-5">Prodotti da consegnare</h1>
    @foreach ($order->products as $product)                      
                <tr>
                  <td>
                      <strong>{{$product->name}}</strong>
                  </td>
                  <td>
                      <p>{{$product->price}}</p>
                  </td>
                  <td>
                      <p>{{$product->amount}}</p>
                  </td>
                           
                </tr>
                    
              @endforeach 
</div>

@endsection