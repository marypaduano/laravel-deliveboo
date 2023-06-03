@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center py-5">Riepilogo Ordini</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Ordine ricevuto da:</th>
                <th scope="col">Data ordine:</th>
                <th scope="col">Indirizzo consegna:</th>
                <th scope="col">Totale ordine:</th>
                <th scope="col">DONE</th>
            </thead>
            <tbody>
              @foreach ($orders as $order)          
                <tr>
                  <td>
                    <a href="{{ route('orders.show', $order) }}">
                      <strong>{{ $order->client_name }}</strong>
                    </a>
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
                    <form action="{{ route('orders.destroy',$order) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" class="btn btn-danger btn-sm" value="DELETE">
                    </form>
                  </td>            
                </tr>
                    
              @endforeach 
            </tbody>
          </table>
    </div>

@endsection