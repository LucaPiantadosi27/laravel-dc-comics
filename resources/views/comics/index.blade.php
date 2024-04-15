@extends('layouts/app')

@section('content')
    
<div class="container p-5 mt-2  mb-2  bg-body-tertiary rounded-5  ">
    <h1>Fumetti</h1>

    {{-- @dump($comics) --}}

    <table class="table mb-5  bg-gradient">
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

            <td>
              <a class="btn btn-info" href="{{route('comics.show', $comics->id)}}">Visualizza</a>
            </td>


            @endforeach

        </tbody>
    </table>

    <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi un fumetto</a>
</div>

@endsection