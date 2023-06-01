@extends('layouts.app')
@section('content')
<!-- <section class="section-homeRestaurant">
    <div class="section_home_ristaurant text-center">
        @if ($restaurants->isEmpty())
            <div class=" container py-3">
                <a class="btn btn-primary" href="{{route('restaurants.create')}}">Aggiungi ristorante</a>
            </div>
        @else






        


        <h3 class="py-4">Nome Ristorante</h3>
        <div class=" container d-flex justify-content-end py-5">
            <a class="btn btn-primary btn-sm" href="{{route('products.create')}}">Aggiungi piatti</a>
        </div>
        <div class="container d-flex justify-content-center flex-wrap gap-5">
            <div class="card" style="width: 18rem;">
                <div class="box-image">
                    <img src="https://www.focus.it/images/2020/06/23/sushi-di-salmone_1020x680.jpg" class="card-img-top"
                        alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: accusamus sequi minima! text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2 button-edit-delete">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="box-image">
                    <img src="https://wips.plug.it/cips/paginegialle.it/magazine/cms/2022/03/carne-pregiata.jpg?w=744&h=418&a=c"
                        class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2 button-edit-delete">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="box-image">
                    <img src="https://www.bofrost.it/on/demandware.static/-/Sites-IT-master-catalog/default/dwa1565c42/images/5683_PATATINE_JULIENNE__R.jpg"
                        class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="box-image">
                    <img src="https://www.focus.it/images/2020/06/23/sushi-di-salmone_1020x680.jpg" class="card-img-top"
                        alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://www.focus.it/images/2020/06/23/sushi-di-salmone_1020x680.jpg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://www.focus.it/images/2020/06/23/sushi-di-salmone_1020x680.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://www.bofrost.it/on/demandware.static/-/Sites-IT-master-catalog/default/dwa1565c42/images/5683_PATATINE_JULIENNE__R.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://www.my-personaltrainer.it/2020/09/07/hamburger_900x760.jpeg" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://wips.plug.it/cips/paginegialle.it/magazine/cms/2022/03/carne-pregiata.jpg?w=744&h=418&a=c"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://www.giallozafferano.it/images/249-24919/Pizza-napoletana_650x433_wm.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text text-overflow">Ingredienti: quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a style="color:white" href="#">
                            <router-link class="btn btn-primary" to="/singlePlate">Modifica</router-link>
                        </a>
                        <a href="#" class="btn btn-primary">Elimina</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div> -->



    <div class="container text-center">
        @if ($restaurants->isEmpty())
            <div class=" container py-3">
                <a class="btn btn-primary" href="{{route('restaurants.create')}}">Aggiungi ristorante</a>
            </div>
        @else

        
        @foreach ($restaurants as $restaurant)
            <h3 class="py-5">{{ $restaurant->restaurant_name }}</h3>
            <div class="d-flex gap-3">
                <a class="btn btn-primary btn-sm" href="{{route('restaurants.edit',$restaurant)}}">Modifica ristorante</a>
                <form action="{{ route('restaurants.destroy', $restaurant) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-primary btn-sm" type="submit" value="Elimina ristorante">
                </form>
            </div>
        <div class="d-flex justify-content-end pt-5 pb-4">
            <a class="btn btn-primary btn-sm" href="{{route('products.create')}}">Aggiungi piatti</a>
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
    <div class="d-flex gap-3">
        <p>Indirizzo: {{ $restaurant->address }}</p>
        <p>partita IVA: {{ $restaurant->vat }}</p>
    </div>
    @endforeach
    @endif
</section>
<!-- <section class="wave-section">
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
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
                        <img src="/images/hamburger-logo.png" alt="">
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
        </div>
    </section>
 -->
    <section class="copy">
        <div class="container text-center">
            <span>
                <i>DeliveBoo 2023&copy; created by <strong>Team 6</strong> of Boolean #Class86</i>
            </span>
        </div>
    </section>



@endsection 

