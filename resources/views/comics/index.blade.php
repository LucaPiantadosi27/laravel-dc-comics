@extends('layouts/app')

@section('content')
    
<div class="container py-5 p-5 mt-2  mb-2 bg-body-tertiary rounded-5 ">
   <div class=" bg-gradient  rounded-3 ">
    <h1>Lista Fumetti</h1>
  </div> 
    {{-- @dump($comics) --}}

    <table class="table mb-5  ">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Artisti</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

            @foreach($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->artists }}</td>
                <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary " >Visualizza</a></td>
            </tr>

            

            @endforeach

        </tbody>
    </table>

    <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi un fumetto</a>
</div>

@endsection