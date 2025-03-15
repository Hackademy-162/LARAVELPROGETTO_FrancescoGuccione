<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contattaci</title>
        {{-- link css bootstrap  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        {{-- link custom css  --}}
        <link rel="stylesheet" href="/style2.css">
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
                    <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="/scopri" class="nav-link">Scopri</a></li>
                    <li class="nav-item"><a href="/chi-siamo" class="nav-link">Chi siamo</a></li>
                    <li class="nav-item"><a href="/contattaci" class="nav-link nav-link-on">Contattaci</a></li>
                </ul>
            </div>
        </nav>

        {{-- header  --}}
        <header>
            <div class="d-flex justify-content-center align-items-center flex-column m-5">
                <h1 class="titles fw-bold main-title">Contattaci</h1>
            </div>
            <div class="container-fluid p-5">
                <div class="row">
                    <div class="col-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1200px-Instagram_logo_2022.svg.png" alt="" width="200">
                        <p>@carblog66</p>
                    </div>
                    <div class="col-4">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAb1BMVEU7V53///82U5soSpbx8/izvdlofLA5VZw/XKHd4eyrt9QzUZpec6v2+PuFlb/o6/S8xdxzhbdEYKPX3eugrM19j71ZcKv09vrl6fLHz+JVbaovTpmWpMlPaah1h7hid67O1eaRn8aWpMoPO5AjRZW/EryeAAAEb0lEQVR4nO3dC4+iSBSG4aJED1rQIDcvqNiz+/9/48DYvbOXBEvZ4pyqfG8mnXQybXiCgBRQquhRXjRtqUKpbJsi/5KpXz/jOlWaiHvB/reItErr+Lew2msdDu8Rab2vvoVFaULzjZEpi4ewKjX3wjhKl9UojG+Ge0mcZW7xIKyD2wR/R7qOVJ6G+h4d02muChXuKhxW4uBrwt0Kx0yj2pBX4bASW1UGLgznoyhCCCGEEEIIIYQQchaNV8lIf0fDb+OP8eKZ/8Nng8EQJeW57Tdf9X2ftufz9Vom43/Qxhh/r0eQ0UnbXHane3XM4/hwiMfy/HjcVtX9fiqKdV1/ftw258RDI+muS/a7e37IoqmybHAfPbxuplX7cYonbX9nfvgmNGqz3k6vO5+FZFb9X3dQhCgk1a9f4vkm1El9fBXok5C6c/Gyzych6c/XNkDfhJRcXtiBeijUqj68BfRFSOqdTdAjISW7d4F+CEm/uQ16I+w+3wd6IdTntw4T/ggpeXsv44eQqJ4D9ECoN69/FvVLuJr1HvVAqDfzgOKFMz7MeCI0e+sBGT+FM48UHgh1P29HKl/Yfc4FChdSVwUu1NcZH7m9EJqP2UDhQnUKXEjXbeBC/eLhPntcYvtnueSnRewHL7L8frn1pdLdfxN8+ZCU7UWK7aVPxsu9ROPzS//6J7nEbkeT1WdPL2bT2ep4H28kvxEno95mBCr+6LgX9O303mYgf8e9mDMyjcWu1OsnlK1OLC6Cj3ZP6y4WwrPHq1CtLAZKK2/3o2MriwtO6xX3Us5pZfGRpg5dmHl8MFR2QsknDs+zEB72oQvjjc8HCwgh9CAIIZQfhBDKD0II5QchhPKDEEL5QeiHkCayEpqpVyABT3QnE3U2wslXGOP1UXvfTmRxr8lx6u/HCt4BVZ3OeZLCqhPvsP8Cwl3wwjp0IffFKffCeM97wHQvzFPeA6J7YXUNXXhingXZvZB7snX3wh3z51LnwuwH87mHc+GB+04G58Lh7Cpw4ZH7KwGcCyvurwRwLjxxn+I7F66573B3LvzBfcuUcyH7XG3OhT33YKNrYcZ8ZuFemLN/lZpr4Zb9DmLXwlPwwl3wwgv7XeCOhdxDie6F3EOJ7oVH/u/8cyzkHkp0L+QeSnQv5B5KVOOUAvVuoufzDWTF1N837MCBuJroj+fPrsXpnxMvwH3q9LQw7sWYCkII5QchhPKDEEL5QQih/CCEUH4QQig/CCGUH4QQyg9CCOUHIYTygxBC+UEIofwghFB+EEIoPwghlB+EEMoPQgjlByGE8oMQQvlBCKH8IIRQfhBCKD8IIZQfhBC+ENPkC4sJSSU8xKWEVCqmSUAXE7aKaarapYSmUUzzvCwkpMGX88y3tJBQp7mKapaJTpcRkq4jFcUs84AuIzS3eBBGVcnwPl1EqMsqGoVRUS4/UeYCQjJlET2EUbXXS2+MzoWk9b6KvoVRXKdKL/oFUW6FRFql9WM2NfX1cnnRtEvO8eZWWLZN8T1b3E8GyF19lc9R6AAAAABJRU5ErkJggg==" alt="" width="200">
                        <p>@carblogofficial</p>
                    </div>
                    <div class="col-4">
                        <img class="mt-5" src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png" alt="" width="200">
                        <p class="mt-2">@blogcar9111</p>
                    </div>
                    <div class="col-4 mt-5">
                        <h3>La nostra email:</h3>
                        <p>carblogofficial@gmail.com</p>
                    </div>
                </div>
            </div>
        </header>

        {{-- link js bootstrap  --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>
</html>