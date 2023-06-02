@extends('layouts.app')
@section('content')

<div class="container py-5">

    <form action="{{route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome piatto</label>
            <input type="text" pattern="[A-Za-z ]+" title="Inserisci un nome valido (solo lettere)" class="form-control @error('name') is-invalid @enderror" value="{{old('name', $product['name'])}}"  id="exampleFormControlInput1" name="name" required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ingredienti</label>
            <input type="text" pattern="[A-Za-z ]+" title="Inserisci testo valido (solo lettere separate da spazio)" class="form-control @error('ingredient') is-invalid @enderror" value="{{old('ingredient', $product['ingredient'])}}"  id="exampleFormControlInput1" name="ingredient" required>
                @error('ingredient')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
            <input type="text" pattern="^\d+(\.\d{1,2})?" title="Inserisci un prezzo valido (es. 10.99)" required class="form-control @error('price') is-invalid @enderror" value="{{old('price', $product['price'])}}" id="exampleFormControlInput1" name="price">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Immagine</label>
            <input type="file" accept="image/*" required max="1000000" title="inserisci un immagine max 1MB" class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb', $product['thumb'])}}" id="exampleFormControlInput1" name="thumb" onchange="validateImage()">
            <span id="errorText" style="color: red;"></span>
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input "value="{{old('visible')}}" id="exampleFormControlInput1" name="visible" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label mb-5" for="flexSwitchCheckChecked">Visibile</label>
            
        </div>

    <button type="submit" class="btn button">Salva</button>

    </form>
    
</div>
    @endsection

    <script>
        function validateImage() {
          let input = document.getElementById('thumb');
          let errorText = document.getElementById('errorText');
        
          if (input.files && input.files[0]) {
            let file = input.files[0];
            let fileSizeMB = file.size / (1024 * 1024); // Converti la dimensione del file in MB
        
            if (fileSizeMB > 1) {
              errorText.textContent = 'La dimensione del file supera 1 MB. Selezionare un file più piccolo.';
              input.value = ''; // Reset del campo di input
            } else {
              errorText.textContent = ''; // Pulisce il messaggio di errore
              // Carica il file o esegui altre azioni
            }
          }
        }
        </script>