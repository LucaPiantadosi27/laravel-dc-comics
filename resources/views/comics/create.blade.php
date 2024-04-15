@extends('layouts.app')

@section('content')
<div class="container py-5 p-5 mt-2  mb-2 bg-body-tertiary rounded-5 ">


    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        
    
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp"  value="{{ old('title') }}">
            
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" aria-describedby="emailHelp" required>{{ old('description') }}</textarea>
           
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="emailHelp"  value="{{ old('thumb') }}">
           
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" aria-describedby="emailHelp" value="{{ old('price') }}">
            
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" id="series" aria-describedby="emailHelp"  value="{{ old('series') }}">
            
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="emailHelp"  value="{{ old('sale_date') }}">
            
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="emailHelp"  value="{{ old('type') }}">
           
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" name="artists" id="artists" aria-describedby="emailHelp" value="{{ old('artists') }}">
            
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" name="writers" id="writers" aria-describedby="emailHelp" value="{{ old('writers') }}">
            
        </div>
    
    
    
        {{-- Error message --}}
        

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
