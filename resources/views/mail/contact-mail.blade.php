<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Successo!!</title>
    {{-- link custom css  --}}
    <link rel="stylesheet" href="/style.css">
    {{-- link google fonts  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amarante&family=Metrophobic&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Il tuo messaggio è stato inviato con successo</h1>
    <p>Grazie per averci contattato!</p>
    <p>Riepilogo: </p>
    <ul>
        <li>Nome: {{ $contact['userName'] }}</li>
        <li>Email: {{ $contact['mail'] }}</li>
        <li>Messaggio: {{ $contact['message'] }}</li>
    </ul>
</body>
</html>