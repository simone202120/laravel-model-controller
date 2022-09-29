@extends('layout.app')

@section('title' , 'lista film')

@section('content')
<h1>Lista Film:</h1>
    @foreach($films as $film)
    <div class="container">
        <div class="filmCard">
            <h3 class="titolo">titolo: {{$film->title}}</h3>
            <p class="nazionalità">nazionalità: {{$film->nationality}}</p>
            <p class="data">data di uscita:{{$film->date}}</p>
            <p class="voto">voto:{{$film->vote}}</p>
        </div>
    </div>
    @endforeach
@endsection