<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{ asset('img/iconoBD.ico') }}">
        <script src="js/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
        <title>Black Diamond</title>
    </head>
    <body>

        <header class="cabecera simple">
{{-- logo de la empresa --}}
            <a  class="logo" href="{{ asset('/') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo de Black Diamond">
            </a>

{{-- logo para celular --}}
            <a  class="logo2" href="{{ asset('/') }}">
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
