@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        
            <div class="card card-auth">
                <div>
                    <h3 class="fw-bold text-center pt-4 pb-2">Accedi</h3>
                </div>

                <div class="card-body card-body-auth">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email"  class="mb-2 fw-semibold label">{{ __('Indirizzo E-Mail') }}</label>

                            <div class="">
                                <input id="email" type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Inserisci una mail valida" required class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="mb-2 fw-semibold label">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" required class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricordami su questo computer') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 mb-0 text-center">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-auth">
                                    {{ __('Accedi') }}
                                </button>
                            </div>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link forget" href="{{ route('password.request') }}">
                                    {{ __('Hai dimenticato la tua Password?') }}
                                </a>
                                @endif
                        </div>
                        <p class="cookie">Creando un account, accetti i nostri <a href="#">Termini e condizioni d'uso.</a> Leggi la nostra informativa sulla <a href="#">Privacy</a> e sui <a href="#">Cookie.</a></p>
                    </form>
                </div>
            </div>
        
    </div>
</div>
@endsection
