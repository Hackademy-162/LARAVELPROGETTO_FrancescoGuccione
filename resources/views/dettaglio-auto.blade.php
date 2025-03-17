<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio Auto</title>
</head>
<body>
    <h1>{{ $car['marca'] }} - {{ $car['modello'] }}</h1>
    <img src="{{ $car['img'] }}" alt="{{ $car['marca'] }}" width="300">
    <br>
    <a href="{{ route('homepage') }}">Torna alla home</a>
</body>
</html>
