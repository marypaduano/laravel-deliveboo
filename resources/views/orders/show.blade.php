

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
    <table class="table">
    <thead>
        <tr>
          <th scope="col">Prodotto</th>
          <th scope="col">Nome</th>
          <th scope="col">Quantità</th>
          <th scope="col">Prezzo</th>
      </thead>
      <tbody>
        @foreach ($order->products as $product)                 
          <tr>
            <td>
                <img src="{{ asset('storage/'.$product->thumb ) }}" width="30%" alt="preview-img">                    
             
            </td>
            <td>
                <strong>{{$product->name}}</strong>
            </td>
            <td>
                <p>x 1</p>
            </td>
            <td>
                <p>&euro; {{$product->price}}</p>
            </td>
            
          <td>
            @endforeach 
  </table>         
                    

</div>

@endsection

<style>
    img{
        width: 150px;
    }
</style>