<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Credits</title>
</head>
<body>
    @foreach ($comics as $comic)
        <img src="{{ $comic['thumb'] }}" alt="">
    @endforeach

    <p>Immagini prese dall'array fantasma di Luca</p>
    
</body>
</html>