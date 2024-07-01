<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Laravel Comics</title>
</head>
<body>
    @include('partials.header')

    <p>{{$descrizione}}</p>

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

    @include('partials.footer')
    
</body>
</html>