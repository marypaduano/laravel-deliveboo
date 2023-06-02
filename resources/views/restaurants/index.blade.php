@extends('layouts.app')
@section('content')
    <div class="container text-center">
        @if ($restaurants->isEmpty())
            <div class=" container py-3">
                <a class="btn btn-primary" href="{{route('restaurants.create')}}">Aggiungi ristorante</a>
            </div>
        @else
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Bentornato nella tua Dashboard!') }}
                </div>
            </div>
        </div>
       
    </div>

        
        @foreach ($restaurants as $restaurant)
            <h3 class="py-5" style="text-transform: uppercase;">{{ $restaurant->restaurant_name }}</h3>
            <div class="d-flex gap-3 justify-content-center">
                <p>Indirizzo: {{ $restaurant->address }}</p>
                <p>partita IVA: {{ $restaurant->vat }}</p>
            </div>
            <div class="d-flex gap-3 justify-content-center">
                <a class="btn btn-primary btn-sm" href="{{route('restaurants.edit',$restaurant)}}">Modifica ristorante</a>
                <form action="{{ route('restaurants.destroy', $restaurant) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger btn-sm" type="submit" value="Elimina ristorante">
                </form>
                <a class="btn btn-success btn-sm" href="{{route('products.create')}}">Aggiungi piatti</a>
            </div>            
        <div class="d-flex justify-content-end pt-5 pb-4">
            
        </div>
        <div class="container-fluid d-flex justify-content-center flex-wrap gap-5 py-4">


        @foreach ($restaurant->products as $product)  
            <div class="card" style="width: 18rem;">
                <div class="box-image">
                    <img src="{{ asset('storage/'.$product->thumb ) }}" width="100%" alt="">
                </div>
                
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                    </h5>
                    <p class="card-text text-overflow">Ingredienti: {{ $product->ingredient }}</p>
                    <p class="card-text text-overflow">Prezzo: {{ $product->price }}</p>
                    <div class="d-flex justify-content-center gap-2 button-edit-delete">
                        <a class="btn btn-primary btn-sm" href="{{route('products.edit',$product)}}">Modifica</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-primary btn-sm" type="submit" value="Elimina">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach  
    </div>
    
    @endforeach
    @endif

@endsection 

