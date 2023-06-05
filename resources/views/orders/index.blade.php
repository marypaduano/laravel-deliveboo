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
                <th scope="col">Dettaglio ordine:</th>
                <th scope="col">Ordine processato:</th>
            </thead>
            <tbody>

              @foreach ($orders as $order)                      
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
                      <a class="btn button btn-sm"href="{{ route('orders.show', $order) }}">
                        <p  style="margin-bottom:0;">codice: {{ $order->code }}</p>    
                      </a>                    
                  </td>
                  <td>
                    <div class="form-check form-switch">
                      <input class="form-check-input done" type="checkbox" id="flexSwitchCheckChecked" checked>
                    </div>
                  </td> 
                  <td>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input class="btn btn-sm btn-danger" type="submit" value="Elimina">
                  </form>
                  </td>           
                </tr>
                    
              @endforeach 
            </tbody>
          </table>
    </div>

@endsection

<style>
  .done{
    background-color: #6fff6f36;
    opacity: 0.5;
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
      $('.done').on('change', function() {
          let row = $(this).closest('tr');
          
          if ($(this).is(':checked')) {
            row.removeClass('done');
          } else {
            row.addClass('done');
          }
      });
  });
  </script>