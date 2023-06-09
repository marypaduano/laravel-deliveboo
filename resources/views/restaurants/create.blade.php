@extends('layouts.app')
@section('content')

<div class="master container-sm d-flex gap-3 p-5 justify-content-center align-items-center">
<div class="col-6">
<form action="{{route('restaurants.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome ristorante</label>
            <input type="text" pattern="[A-Za-z ]+" title="Inserisci un nome valido (solo lettere)" required class="form-control @error('restaurant_name') is-invalid @enderror" value="{{old('restaurant_name')}}"  id="exampleFormControlInput1" name="restaurant_name">
                @error('restaurant_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="restaurant_image" class="form-label">Immagine ristorante</label>
            <input type="file" accept="image/*" required max="1000000" title="inserisci un immagine max 1MB" class="form-control @error('restaurant_image') is-invalid @enderror" value="{{old('restaurant_image')}}"  id="restaurant_image" name="restaurant_image" onchange="validateImage()">
                @error('restaurant_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Indirizzo</label>
            <input type="text" pattern="[a-zA-Z0-9 ,]+"minlength="5" title="L'indirizzo deve contenere solo lettere e numeri e avere almeno 5 caratteri" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}"  id="exampleFormControlInput1" name="address" required>
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Partita IVA</label>
            <input type="text" pattern="[0-9]{11}" title="Inserisci una partita IVA valida (11 numeri)" required class="form-control @error('vat') is-invalid @enderror" value="{{old('vat')}}" id="exampleFormControlInput1" name="vat">
                @error('vat')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        
        @foreach($types as $key => $type)
        <div class="form-check">
            <input name="types[]" @checked(in_array($type->id, old('types',[]))) class="form-check-input @error('types[]') is-invalid @enderror" type="checkbox" value="{{ $type->id }}" id="flexCheckDefault" onclick="updateSelectedCount()">
            <label class="form-check-label" for="flexCheckDefault">
            {{ $type->name }}
            </label>
            @error('types[]')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        @endforeach
     
    <button type="submit" class=" create_btn btn button">Crea</button>
        

  </form>
</div>

</div>
    @endsection

    <script>
        let selectedCount = 0;

function updateSelectedCount() {
  selectedCount = 0;
  let checkboxes = document.getElementsByName('types[]');
  for (let i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      selectedCount++;
    }
  }
  if (selectedCount === 0) {
    alert("Seleziona almeno una checkbox.");
    return false;
  }
  return true;

}


</script>