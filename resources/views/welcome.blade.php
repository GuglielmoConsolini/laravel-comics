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
    
    @foreach($comics as $comic)

      <li>{{ $comic['title'] }}</li>
    
    @endforeach

    
    @include('partials.footer')
    
</body>
</html>