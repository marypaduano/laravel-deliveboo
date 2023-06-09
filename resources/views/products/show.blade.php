@extends('layouts.app')
@section('content')
<div class="container py-5">
  <a class="btn button btn-sm mb-3" href="{{route('dashboard')}}">Torna alla tua Dashboard</a>
  <div class="card m-auto text-center" style="width: 18rem;">
    <div class="container py-5">
        <img src="{{ asset('storage/'.$product->thumb ) }}" width="100%" alt="">
    </div>
    <div class="card-body">
      <h5 class="card-title" style="text-transform:uppercase;">{{$product->name}}</h5>
      <p class="card-text">Prezzo: &euro;{{$product->price}}</p>
      <p>Ingredienti: {{$product->ingredient}}</p>
      <div class="d-flex gap-2 justify-content-center">
        <a class="btn button btn-sm" href="{{ route('products.edit', $product) }}">Modifica</a>
          <form action="{{ route('products.destroy', $product) }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="btn button btn-sm" type="submit" value="Elimina">
          </form>
      </div>
    </div>
  </div>  
</div>


@endsection