@extends('cabecera')

@section('contenido')
    <div class="promociones">

        <div class="slider">
            <div class="slides">
                <!-- botones  radio star -->
                <input type="radio" name="radio-btn" id="radio1" class="bt" />
                <input type="radio" name="radio-btn" id="radio2" class="bt" />
                <input type="radio" name="radio-btn" id="radio3" class="bt" />
                <input type="radio" name="radio-btn" id="radio4" class="bt" />

                <!-- slide imajenes inicio -->
                <div class="slide first ">
                    <img class="promImg" src="{{ asset('img/promociones/promocion1.jpg') }}" alt="Imagen de promociones">
                </div>
                <div class="slide first">
                    <img class="promImg" src="{{ asset('img/promociones/promocion2.jpg') }}" alt="Imagen de promociones">
                </div>
                <div class="slide first">
                    <img class="promImg" src="{{ asset('img/promociones/promocion3.jpg') }}" alt="Imagen de promociones">
                </div>
                <div class="slide first">
                    <img class="promImg" src="{{ asset('img/promociones/promocion4.jpg') }}" alt="Imagen de promociones">
                </div>
                <!-- slide imagenes final -->
            </div>
        </div>
        <!-- termina callusel de imagenes -->

        <!-- fin autonavegacion -->
        <!-- manual de navegacion nicio -->
        <div class="navegacion-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>

    <div class="divisor">
        <div class="divi"></div>
    </div>
    <div class="contenido">
        <aside>
            <div class="filtros">
                <div class="divisorfiltro">
                    <div class="divifiltro"></div>
                </div>
                <div class="encabezadoFiltro" id="tipoFiltro">
                    <div>Tipo</div>
                    <img class="filtroImagen" src="{{ asset('img/fAbajo.png') }}" alt="">
                </div>
                <div class="listacolor oculto" id="tipoFiltroLista">
                    <div class="tipoFiltro">
                        <p>nombre</p>
                        <p>(num)</p>
                    </div>
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                </div>
                <div class="divisorfiltro">
                    <div class="divifiltro""></div>
                </div>
                <div class="encabezadoFiltro" id="tallaFiltro">
                    <div class="nombreFiltro">Talla</div>
                    <img class="filtroImagen" src="{{ asset('img/fAbajo.png') }}" alt="">
                </div>
                <div class="listacolor oculto" id="tallaFiltroLista">
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                </div>
                <div class="divisorfiltro">
                    <div class="divifiltro"></div>
                </div>
                <div class="encabezadoFiltro" id="colorFiltro">
                    <div class="nombreFiltro">Color</div>
                    <img class="filtroImagen" src="{{ asset('img/fAbajo.png') }}" alt="">
                </div>
                <div class="listacolor oculto" id="colorFiltroLista">
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                </div>
                <div class="divisorfiltro">
                    <div class="divifiltro"></div>
                </div>
                <div class="encabezadoFiltro" id="marcaFiltro">
                    <div class="nombreFiltro">Marca</div>
                    <img class="filtroImagen" src="{{ asset('img/fAbajo.png') }}" alt="">
                </div>
                <div class="listacolor oculto" id="marcaFiltroLista">
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                    <div class="tipoFiltro">
                        <p>nombre filtro</p>
                        <p>(num)</p>
                    </div>
                </div>
                <div class="divisorfiltro">
                    <div class="divifiltro"></div>
                </div>
            </div>
        </aside>

        <main>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            {{-- esto es para borrar luego  solo ejemplos de  como quedaria  --}}
            
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            <div class="productos">
                <a class="producto" href="">
                    <img class="imgProd" src="{{asset('img/D_NQ_NP_838659-MCO49349433904_032022-O.webp')}}" alt="imagen del producto">
                    <p class="nombreProd"> chaqueta para hombre de cuero  de marca ttt </p>
                    <p class="precioProd"> $ 10.000 cop</p>
                </a>
            </div>
            {{-- hasta aqui se borra --}}
            <div class="paginacion">
                <div class="paginaproduc"> < </div>
                <div class="paginaproduc">1</div>
                <div class="paginaproduc">></div>
                <div class="paginaproduc">99</div>
            </div>
        </main>
    </div>
    <h1>
        Index
    </h1>
@endsection
