@extends('layouts.app')
@section('content')

<div class="container p-4">
    @foreach ($products as $product)
        <a href="{{route('products.show', $product)}}">{{$product->name}}</a>
    @endforeach
</div>

@endsection