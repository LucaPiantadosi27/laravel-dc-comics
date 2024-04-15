@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h1 class="mb-5 ">Modifica un fumetto</h1>

    {{-- @dump($comic) --}}

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
    
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="emailHelp" required value="{{ old('title', $comic->title) }}">
           
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="emailHelp" required>{{ old('description', $comic->description) }}</textarea>
            
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" aria-describedby="emailHelp" required value="{{ old('thumb', $comic->thumb) }}">
            
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="emailHelp" required value="{{ old('price', $comic->price) }}">
            
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" aria-describedby="emailHelp" required value="{{ old('series', $comic->series) }}">
           
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" aria-describedby="emailHelp" required value="{{ old('sale_date', $comic->sale_date) }}">
          
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" aria-describedby="emailHelp" required value="{{ old('type', $comic->type) }}">
           
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" id="artists" aria-describedby="emailHelp" value="{{ old('artists', $comic->artists) }}">
           
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" id="writers" aria-describedby="emailHelp" value="{{ old('writers', $comic->writers) }}">
           
        </div>
    

        {{-- Error --}}
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif



        <button type="submit" class="btn btn-primary">Invia</button>
    </form>



</div>
@endsection