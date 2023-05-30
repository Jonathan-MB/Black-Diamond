<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/iconoBD.ico') }}">
    <script src="js/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Black Diamond</title>
</head>

<body>

    <header class="cabecera simple">
        {{-- logo de la empresa --}}
        <a class="logo" href="{{ asset('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo de Black Diamond">
        </a>

        {{-- logo para celular --}}
        <a class="logo2" href="{{ asset('/') }}">
            <img src="{{ asset('img/logo2.png') }}" alt="Logo de Black Diamond">
        </a>

        </div>
    </header>
    @yield('contenido')
    <footer>
        @yield('footer')
    </footer>
</body>

</html>
