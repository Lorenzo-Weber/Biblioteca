<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Titulo dinamico --}}
    <title>@yield('title')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/styles.css">

    {{-- JS --}}
    <script src="/js/scripts.js"></script>

    {{-- Fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">

    {{-- Icones --}}
    <script src="https://kit.fontawesome.com/d54c4e3858.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">

</head>
<body>
    <nav>
        <div class="gap">
            <div class="logo">
                <a href="/"><i class="fa-solid fa-book large sweet-blue"></i></a>
            </div>
            <ul>
                <li class="navoption"><a href="/adicionar">Adicionar livro</a></li>
                <li class="navoption"><a href="/buscar">Buscar Livro</a></li>
            </ul>
        </div>
    </nav>

    <main>

        @yield('content')

    </main>

    <footer>
        <div class="medias">
            <ul>
                <li><a href="https://www.instagram.com/jetimob_/" target=”_blank”><i class="fa-brands fa-instagram"></i> Jetimob</a></li>
                <li><a href="https://www.facebook.com/jetimob" target=”_blank”><i class="fa-brands fa-facebook"></i> Jetimob</a></li>
            </ul>
        </div>
        <div class="links">
            <ul>
                <li><a href="https://www.google.com/maps/place/Jetimob/@-29.6887431,-53.8106961,15z/data=!4m2!3m1!1s0x0:0x270ebedf5e0e1715?sa=X&ved=2ahUKEwiyudP7qY-CAxU5D7kGHX1pBykQ_BJ6BAhIEAA&ved=2ahUKEwiyudP7qY-CAxU5D7kGHX1pBykQ_BJ6BAhdEAg" target=”_blank”><i class="fa-solid fa-location-dot"></i> R. Serafim Valandro, 983</a></li>
                <li><i class="fa-sharp fa-solid fa-phone"></i> (55) 3028-2887</li>
            </ul>
        </div>
    </footer>
</body>
</html>