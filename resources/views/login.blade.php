@extends('cabeceraSimple')

@section('contenido')

    <div class="contenidoLogin">
        <div class="cardLogin">
            <form class="formLogin" action="" method="post">
                <h2 id="tituloLogin">Bienvenido</h2><br>
                <div class="imgBienvLogin">
                    <img src="{{asset ('img/imgBienvLogin.png')}}" alt="">
                </div>
                <div class="labLogin">
                    <label for="correo">Correo</label> 
                </div>
                <input type="email" class="inpLogin" name="correo" id="correo">
                <div class="labLogin">                
                    <label for="contrasena">Contraseña</label>
                </div>
                <input type="password" class="inpLogin" name="contrasena" id="contrasena">
                <div class="contLinkRecContr">
                    <a href=""  class="linkLogin" >Olvide mi contraseña</a>
                </div>
                <button type="submit" class="btnInicioLogin">Iniciar Sesion</button>
                <a href="" class="linkLogin" >Registrarme</a>

            </form>

        </div>
    </div>
@endsection