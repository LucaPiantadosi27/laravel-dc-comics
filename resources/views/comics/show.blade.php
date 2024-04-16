@extends('layouts.app')

@section('content')

<div class="container py-5 p-5 mt-2  mb-2 bg-body-tertiary rounded-5 pl">
    <div class=" bg-gradient  rounded-3 pb-1 ">
        <h1 class="mb-5">{{$comic->title}}</h1>
    </div>
    {{-- @dump($comic) --}}

    <div class="row">
        <div class="col-6">
            <img class="mb-3 w-100" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>

        <div class="col-6">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Description</td>
                        <td>{{$comic->description}}</td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>{{$comic->price}}</td>
                    </tr>
                    <tr>
                        <td>Serie</td>
                        <td>{{$comic->series}}</td>
                    </tr>
                    <tr>
                        <td>pubblication's date</td>
                        <td>{{$comic->sale_date}}</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>{{$comic->type}}</td>
                    </tr>
                    <tr>
                        <td>Artists</td>
                        <td>{{$comic->artists}}</td>
                    </tr>
                    <tr>
                        <td>Writers</td>
                        <td>{{$comic->writers}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary"><i class="fa-solid fa-pencil"></i> Modifica</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
        <i class="fa-solid fa-trash"></i> Elimina
    </button>

</div>
</div>


    </div>
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header">
    <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina il fumetto</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    Vuoi veramente eliminare il fumetto selezionato: "{{$comic->title}}" ?
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-arrow-left"></i> Annulla</button>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i> Elimina</button>
        </form>
    </div>
    </div>
    </div>
    </div>

@endsection