<nav class="navbar nav-main navbar-expand-md navbar-light bg-white shadow-sm" style="font-size: 18px;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('dashboard') }}">
            <div class="logo_laravel">
                <img src="/logo-deliveboo1.png" alt="logo" style="width: 100px;">
            </div>
            <a class="dropdown-item" href="http://localhost:5174/"> Home </a>
            {{-- config('app.name', 'Laravel') --}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                </li> -->
                @auth
                <li>
                    <a class="nav-link" href="{{route('dashboard')}}">{{__('Dashboard')}}</a>
                </li>
                @endauth

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a>
                        <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                        {{-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a> --}}
                        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> --}}
                        <a class="dropdown-item" href="http://localhost:5174/"> Logout </a>
                        
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>