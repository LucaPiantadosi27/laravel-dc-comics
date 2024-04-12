@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1 class="mb-5">{{$comic->title}}</h1>

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




</div>

@endsection