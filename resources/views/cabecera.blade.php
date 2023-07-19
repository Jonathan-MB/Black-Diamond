<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Black Diamond</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/head.css" />
    </head>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #000000;">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="#">
                <img src="{{url('img/logo.png')}}" alt="Logo" height="50" width="250" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse show" id="navbarScroll">
                <div class="navbar-collapse collapse show" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOMBRE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MUJER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ZAPATOS </a>
                        </li>
                    </ul>
                    <form id="search-form" class="d-flex" role="search">
                        <input class="form-control me-1" type="search" placeholder="Buscar" />
                        <a>
                            <img width="40" height="40" src="https://img.icons8.com/ios/50/search--v1.png" alt="search--v1" />
                        </a>
                    </form>
                    <a href="">
                        <img width="32" height="32" src="{{url('img/usuario.png')}}" alt="user" />
                    </a>
                    <a href="">
                        <img width="32" height="32" src="{{url('img/icons8-shopping-cart-48.png')}}" alt="cart" />
                    </a>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </div>
    </nav>
</html>
