<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="{{ asset('img/iconoBD.ico') }}">
        <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
        <script src="{{ asset('js/general.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
        <title>Black Diamond</title>
    </head>
    <body>

        <header class="cabecera">
{{-- logo de la empresa --}}
            <a  class="logo" href="{{ asset("/") }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo de Black Diamond">
            </a>

{{-- logo para celular --}}
            <a  class="logo2" href="{{ asset("/") }}">
                <img src="{{ asset('img/logo2.png') }}" alt="Logo de Black Diamond">
            </a>

{{-- buscador --}}
            <div class="buscador">
                <input type="text" class="textBuscar" placeholder="Buscar...">
                <div class="buscar">
                    <img src="{{ asset('img/lupa.png') }}" alt="luoa">
                </div>
            </div>

{{-- carrito y login --}}
            <div class="carritoylogin">
                <a class="contenedorIcono"  href="{{ asset("/carrito") }}">
                    <img class="icono" src="{{ asset('img/carrito.png') }}" alt="carrito">
                </a>

                <a class="contenedorIcono"  href="{{ asset("/login") }}">
                    <img class="icono" src="{{ asset('img/usuario.png') }}" alt="carrito">
                </a>
            
{{-- menu burger para cel --}}
                <a  class="menuPlegable" href="{{ asset("/") }}">
                    <img src="{{ asset('img/menuBurger.png') }}" alt="Logo de Black Diamond">    
                </a>
            </div>
            
        </header>
    
    <nav class="categorias">
        <div class="seleccionComun">
            <img src="{{ asset('img/hombres.png') }}" alt="hombres"> <br>
            <p>Hombres</p>
        </div>
        <div class="seleccionComun">
            <img src="{{ asset('img/mujeres.png') }}" alt="mujeres"> <br>
            <p>Mujeres</p>
        </div>
        
        <div class="seleccionComun">
            <img src="{{ asset('img/ninos.png') }}" alt="niños"> <br>
            <p>Niños</p>
        </div>
        <div class="seleccionComun">
            <img src="{{ asset('img/zapatos.png') }}" alt="zapatos"> <br>
            <p>Calzado</p>
        </div>
    </nav>
            @yield('contenido')
        <footer class="piePagina">
            <div>terminos y condiciones</div>
            <div>referencias</div>       
        </footer>
    </body>
</html>
