<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car Blog</title>
        {{-- link css bootstrap  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        {{-- link custom css  --}}
        <link rel="stylesheet" href="/style.css">
        {{-- link google fonts  --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amarante&family=Metrophobic&display=swap" rel="stylesheet">
    </head>
    <body>

        {{-- navbar  --}}
        <nav class="container">
            <div class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-itemW"><a href="/" class="nav-link nav-link-on" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="/scopri" class="nav-link">Scopri</a></li>
                    <li class="nav-item"><a href="/chi-siamo" class="nav-link">Chi siamo</a></li>
                    <li class="nav-item"><a href="/contattaci" class="nav-link">Contattaci</a></li>
                </ul>
            </div>
        </nav>

        {{-- header  --}}
        <header>
            <div class="d-flex justify-content-center align-items-center flex-column m-5">
                <img class="img-Header" src="/media/header.png" alt="">
                <h1 class="titles fw-bold main-title">Car Blog</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, necessitatibus. Cumque sapiente distinctio perspiciatis labore dignissimos, eveniet veniam, a est fugit minima similique. Error, eius eveniet ratione vitae autem saepe.</p>
                    </div>
                </div>
            </div>
        </header>

        {{-- link js bootstrap  --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>
</html>