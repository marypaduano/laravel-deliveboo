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

@endsection

