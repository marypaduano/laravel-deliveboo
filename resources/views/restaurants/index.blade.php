@extends('layouts.app')
@section('content')

<section class="restaurant">
    <div class="container text-center d-flex flex-column align-items-center">
        @if ($restaurants->isEmpty())
            <div class=" container py-3">
                <a class="btn btn-primary" href="{{route('restaurants.create')}}">Aggiungi ristorante</a>
            </div>
        @else
        
        @foreach ($restaurants as $restaurant)
        <div class="restaurant-top pt-5">
            <h3 style="text-transform: uppercase;">{{ $restaurant->restaurant_name }}</h3>
            <p>Indirizzo: {{ $restaurant->address }}</p>
            <p>partita IVA: {{ $restaurant->vat }}</p>
        </div>
        <div class="d-flex gap-2 py-5">            
            <a class="btn button btn-sm" href="{{route('products.create')}}">Aggiungi piatti</a>
            <a class="btn button btn-sm" href="{{ route('restaurants.show', $restaurant) }}">Visualizza piatti</a>
            <a class="btn button btn-sm" href="{{ route('orders.index', $restaurant) }}">Visualizza gli ordini</a>
        </div>
        <div class="d-flex justify-content-center gap-2 button-edit-delete">
            <a class="btn btn-sm btn-warning" href="{{route('restaurants.edit',$restaurant)}}">Modifica ristorante</a>
                <form action="{{ route('restaurants.destroy', $restaurant) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-sm btn-danger" type="submit" value="Elimina ristorante">
                </form>
        </div>
        <div class="box-image">
            <img src="{{ asset('storage/'.$restaurant->restaurant_image ) }}" width="100%" alt="">
        </div>
        
    </div>
        @endforeach
        @endif
    
</section>
  
@endsection 

