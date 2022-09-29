@extends('layout.app')

@section('title' , 'lista film')

@section('content')
<h1>Lista Film:</h1>
    @foreach($films as $film)
        <div class="titolo film">

        </div>
        <div class="nazionalità">

        </div>
        <div class="data uscita">
            
        </div>
    @endforeach
@endsection