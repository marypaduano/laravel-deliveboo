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
            <h3>{{ $restaurant->restaurant_name }}</h3>
            <p>Indirizzo: {{ $restaurant->address }}</p>
            <p>partita IVA: {{ $restaurant->vat }}</p>
        </div>
        <div class="d-flex gap-2 py-5">
            <a class="btn btn-outline-primary btn-sm" href="{{route('restaurants.edit',$restaurant)}}">Modifica ristorante</a>
            <form action="{{ route('restaurants.destroy', $restaurant) }}" method="POST">
                @csrf
                @method('DELETE')
                <input class="btn btn-outline-primary btn-sm" type="submit" value="Elimina ristorante">
            </form>
            <a class="btn btn-outline-primary btn-sm" href="{{route('products.create')}}">Aggiungi piatti</a>
            <a class="btn btn-outline-primary btn-sm" href="{{ route('restaurants.show', $restaurant) }}">Visualizza piatti</a>
        </div>
        <div class="box-image">
            <img src="{{ asset('storage/'.$restaurant->restaurant_image ) }}" width="100%" alt="">
        </div>
    </div>
        @endforeach
        @endif
</section>
<section class="wave-section">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1300 250">
            <path fill="#FF5B00" fill-opacity="1"
                d="M0,192L48,181.3C96,171,192,149,288,133.3C384,117,480,107,576,90.7C672,75,768,53,864,64C960,75,1056,117,1152,138.7C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section> 

    <section class="nav-footer">
        <div class="container">
            <div class="row d-flex">
                <div class="col d-flex justify-content-center align-item-center">
                    <figure class="thumb img-fluid flex-shrink-0">
                        <img src="../.././img/logo-navbar-small.png" alt="">
                    </figure>
                </div>
                <div class="col flex-wrap">
                    <ul class="menu">
                        <li>
                            <h4>scopri deliveboo</h4>
                        </li>
                        <li class="menu_item">
                            <span>Chi siamo</span>
                        </li>
                        <li class="menu_item">
                            <span>Lavora con noi</span>
                        </li>
                        <li class="menu_item">
                            <span>Diventa nostro partner</span>
                        </li>
                    </ul>
                </div>
                <div class="col flex-wrap">
                    <ul class="menu">
                        <li>
                            <h4>note legali</h4>
                        </li>
                        <li class="menu_item">
                            <span>Termini & condizioni</span>
                        </li>
                        <li class="menu_item">
                            <span>Informativa sulla privacy</span>
                        </li>
                    </ul>
                </div>
                <div class="col flex-wrap">
                    <ul class="menu">
                        <li>
                            <h4>follow us</h4>
                        </li>
                        <li class="menu_item social_icon">
                            <a href="https://www.facebook.com/" target="_blank" class="icon fb">
                                <font-awesome-icon :icon="['fab', 'facebook']" />
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="icon tw">
                                <font-awesome-icon :icon="['fab', 'twitter']" />
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="icon insta">
                                <font-awesome-icon :icon="['fab', 'instagram']" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <span>
                <i>DeliveBoo 2023&copy; created by <strong>Team 6</strong> of Boolean #Class86</i>
            </span>
        </div>
    </section>
@endsection 

