@extends('layouts.app')

@section('content')
<div class="container py-5 p-5 mt-2  mb-2 bg-body-tertiary rounded-5 ">


    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class=" bg-gradient  rounded-3 pb-1 ">
            <h1>Crea un fumetto</h1>
        </div>
        
    
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid  @enderror" name="title" id="title" value="{{old('title')}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid  @enderror" name="description" id="description" aria-describedby="emailHelp" >{{old('description')}}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
           
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid  @enderror" name="thumb" id="thumb" value="{{old('thumb')}}">
            @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
           
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid  @enderror" name="price" id="price" value="{{old('price')}}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid  @enderror" name="series" id="series" value="{{old('series')}}">
            @error('series')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control @error('sale_date') is-invalid  @enderror" name="sale_date" id="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid  @enderror" name="type" id="type" value="{{old('type')}}">
            @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
           
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid  @enderror" name="artists" id="artists" value="{{old('artists')}}">
            @error('artists')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid  @enderror" name="writers" id="writers" value="{{old('writers')}}">
            @error('writers')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            
        </div>
    

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
    

</div>
@endsection
