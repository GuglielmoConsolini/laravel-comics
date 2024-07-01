@extends('layouts.app')



@section('cardsSection')


  <h2>Fumetti disponibili</h2>

  <div class="comics-container">
    @foreach($comics as $comic)
        <div class="card">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h2>{{ $comic['title'] }}</h2>
            <p><strong>Series:</strong> {{ $comic['series'] }}</p>
            <p><strong>Price:</strong> {{ $comic['price'] }}</p>
            <p><strong>Sale Date:</strong> {{ $comic['sale_date'] }}</p>
            <p>{{ $comic['description'] }}</p>
        </div>
    @endforeach
  </div>
 
@endsection