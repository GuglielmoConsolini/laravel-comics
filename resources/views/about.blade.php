<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Credits</title>
</head>
<body>

  @include('partials.header')

  <div class="container-img">
    @foreach ($comics as $comic)
       <div class="img-box">
        <img src="{{ $comic['thumb'] }}" alt="">
       </div>
    @endforeach
  </div>
    <p>Immagini prese dall'array fantasma di Luca</p>

    
    
</body>
</html>