@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h3 class="py-5">{{$restaurant->restaurant_name}}</h3>
    <p>Indirizzo: {{$restaurant->address}}</p>
    <p>Partita IVA: {{$restaurant->vat}}</p>
    <p>Tipologia ristorante: 
    @forelse ($restaurant->types as $type)
    {{$type->name}}
    @empty
    @endforelse
    </p>
</div>

<div class="container py-4">
    <a class="btn button btn-sm" href="{{route('products.create')}}">Aggiungi piatti</a>
</div>
<div class="container d-flex flex-wrap gap-3 p-4">
    @foreach ($products as $product)  
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
                    <a class="btn button btn-sm" href="{{route('products.edit',$product)}}">Modifica</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn button btn-sm" type="submit" value="Elimina">
                    </form>
                </div>
            </div>
        </div>
    @endforeach  
</div>

@endsection

