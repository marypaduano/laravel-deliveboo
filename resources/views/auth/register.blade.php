@extends('layouts.app')

@section('content')

    <div class="container mt-5">
                <div class="card card-auth">
                    <div>
                        <h3 class="fw-bold text-center pt-4 pb-2">Crea un account</h3>
                    </div>
    
                    <div class="card-body card-body-auth">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="mb-4">
                                <label for="name" class="col-form-label text-md-right fw-semibold label">{{ __('Nome') }}</label>
    
                                <div>
                                    <input id="name" type="text" pattern="[A-Za-z ]+" title="Inserisci un nome valido (solo lettere)" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="mb-4">
                                <label for="email" class=" col-form-label text-md-right fw-semibold label">{{ __('Indirizzo E-Mail') }}</label>
    
                                <div>
                                    <input id="email" type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Inserisci una mail valida" required class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="mb-4">
                                <label for="password" class=" col-form-label text-md-right fw-semibold label">{{ __('Password') }}</label>
    
                                <div>
                                    <input id="password" type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" required class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="mb-4">
                                <label for="password-confirm" class=" col-form-label text-md-right fw-semibold label">{{ __('Conferma Password') }}</label>
    
                                <div>
                                    <input id="password-confirm" type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" oninput="checkPasswordMatch();" required class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="mb-4 mb-0 d-flex justify-content-center">
                                <button type="submit" class="btn btn-auth">
                                    {{ __('Crea un account') }}
                                </button>  
                            </div>
    
                            <p class="cookie">Creando un account, accetti i nostri <a href="#">Termini e condizioni d'uso.</a> Leggi la nostra informativa sulla <a href="#">Privacy</a> e sui <a href="#">Cookie.</a></p>
                        </form>
                    </div>
                </div>
</div>
@endsection

<script>
    function checkPasswordMatch() {
  let password = document.getElementById("password").value;
  let passwordConfirm = document.getElementById("password-confirm").value;

  if (password !== passwordConfirm) {
    document.getElementById("password-confirm").setCustomValidity("Le password non corrispondono");
  } else {
    document.getElementById("password-confirm").setCustomValidity("");
  }
}
</script>
