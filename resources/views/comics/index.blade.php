@extends('layouts.app')




@section('content')




<div class="container py-5">

    <h1>FUMETTI LIST:</h1>

    {{-- @dump($comics) --}}


    <table class="table">

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

                <td><a href="" class="btn btn-primary " >Visualizza</a></td>

            </tr>

            @endforeach




        </tbody>

      </table>

</div>




@endsection