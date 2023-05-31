@extends('cabeceraSimple')

@section('contenido')

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Inicio de sesión</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
   </head>
   <body>
      <div class="container ">
         <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-dm-12">
               @if(session('type'))
               <div class="alert alert-{{(session('type'))}} alert-dimissible" >
                  <strong>Mensaje</strong>{{ session('message')}}.
                  <button type="button" class="btn-close" data-bs-dismiss="alert"
                     aria-label="close"></button>
               </div>
               @endif
               <form class="formulario" action="check" method="post">
                  @csrf
                  <div class="text-center mt-5 mb-5">
                     <h1>Bienvenidos</h1>
                  </div>
                  <div>
                     <img class="avatar" src="{{url('img/perfil.png')}}" alt="">
                  </div>
                  <div class="col-md-4 mx-auto mb-4">
                     <strong><label for="email">Correo</label></strong>                   
                     <input class="form-control" type="email" name="email">
                  </div>
                  <div class="col-md-4 mx-auto mb-4">
                     <strong><label for="password">Contraseña</label></strong>
                     <input class="form-control" type="password" name="password" >
                     <div class="label1">
                        <a href="{{url('/')}}">Olvide mi contraseña</a>
                     </div>
                  </div>
                  <div class="col-md-4 mx-auto mb-4 text-center">
                     <input type="submit"  value="Iniciar Sesión" >
                  </div>
                  <div class="col-md-4 mx-auto mb-4 text-center">
                     <a href="{{url('/')}}">Registrame</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
         crossorigin="anonymous"></script>
   </body>
</html>
@endsection