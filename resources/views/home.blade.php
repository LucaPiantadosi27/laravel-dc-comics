@extends('Layouts/app')

@section ('content')

<div class="jumbotron">
    <img class="logo" src="{{ Vite::asset('public/img/itsa.jpg') }}" alt="itachi"> 
    <div class="links">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
</div>



@endsection