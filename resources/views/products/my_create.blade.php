@extends('layouts.main')

@section('content')

<section class="mb-4 mt-5 text-center container">
    <h1 class="mb-4">Aggiungere un nuovo capo</h1>
    
    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        {{-- poster 1 --}}
        <div class="mb-3">
            <label for="posterOne" class="form-label">Prima Immagine</label>
            <input type="text" id="posterOne" name="posterOne" placeholder="Inserire la prima immagine" class="form-control">
        </div>

        {{-- poster 2 --}}
        <div class="mb-3">
            <label for="posterTwo" class="form-label">Seconda Immagine</label>
            <input type="text" id="posterTwo" name="posterTwo" placeholder="Inserire la seconda immagine" class="form-control">
        </div>

        {{-- brand --}}
        <div class="mb-3">
            <label for="brand" class="form-label">Brand prodotto</label>
            <input type="text" id="brand" name="brand" placeholder="Inserire il brand del prodotto" class="form-control">
        </div>

        {{-- description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione prodotto</label>
            <input type="text" id="description" name="description" placeholder="Inserire la descrizione del prodotto" class="form-control">
        </div>

        {{-- price --}}
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" id="price" name="price" placeholder="Inserire il prezzo del prodotto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Invia dati</button>

    </form>
</section>

@endsection