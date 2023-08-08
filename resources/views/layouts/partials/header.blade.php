<style>
    .link-nav {
        color: #FFF;
    }

    .link-nav:hover {
        color: #44B2E5;
    }

    @media (min-width: 893px) {
        .bar1, .bar2 {
            display: block !important;
        }

        .btn-toggle, .cont-btn {
            display: none;
        }
    }

    @media (min-width: 0px) and (max-width: 892px) {
        .bar1, .bar2 {
            display: none;
        }

        .btn-toggle, .cont-btn {
            display: block;
        }
    }
</style>

<style>
    .boton-imagen {
        position: relative;
        display: inline-block;
        overflow: hidden;
        border: none;
        padding: 0;
        margin: 0;
    }

    .boton-imagen img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Puedes usar otras opciones como "contain" o "fill" según tu preferencia */
    }
</style>

@if ($pagina == 'inicio' || $pagina == 'servicios')
@endif


@if ($pagina == 'xyz')
    <div class="container-fluid px-5" style="background-color: #1E4A89;">
        <div class="row">
            <div class="col-12 position-relative top-0 start-0 mt-4 mb-5 px-xxl-4 px-xl-5 px-lg-5 px-md-5 px-sm-5 px-xs-5" style="background-color: #3378C6;">
                <div class="row py-0 px-xxl-0 px-xl-0 px-lg-3 px-md-0 px-sm-0 px-xs-0">
                    <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-sm-12 col-xs-12 text-center mx-auto mt-xxl-2 mt-xl-1 mt-lg-4 mt-md-0 mt-sm-0 mt-xs-0">
                        <img src="{{ asset('img/design/inicio/Logo.png') }}" alt="logo" class="img-fluid">
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3 py-xxl-0 py-xl-0 py-lg-0 py-md-3 py-sm-0 py-xs-0 py-0 mx-auto text-center cont-btn">
                        <button class="btn btn-block text-white bg-transparent btn-toggle"><span uk-icon="icon: menu;"></span></button>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-12 col-sm-12 col-xs-12 py-xxl- py-xl-4 py-lg-4 py-md-0 py-sm-0 py-xs-0 bar1">
                        <div class="row fondo-bar-sm">
                            <div class="col-xxl-3 col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                            </div>
                            <div class="col-xxl-9 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 text-white mx-auto py-1 text-center">
                                        @if ($leng = 'eng')
                                            <a href="{{ route('front.index', ['leng' => 'eng']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                HOME
                                            </a>
                                        @else 
                                            <a href="{{ route('front.index', ['leng' => 'esp']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                INICIO
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 text-white mx-auto py-1 text-center">
                                        @if ($leng = 'eng')
                                            <a href="{{ route('front.productos', ['leng' => 'eng']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                PRODUCTS
                                            </a>
                                        @else 
                                            <a href="{{ route('front.productos', ['leng' => 'esp']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                PRODUCTOS
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 text-white mx-auto py-1 text-center">
                                        @if ($leng = 'eng')
                                            <a href="{{ route('front.servicios', ['leng' => 'eng']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                SERVICES
                                            </a>
                                        @else 
                                            <a href="{{ route('front.servicios', ['leng' => 'esp']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                SERVICIOS
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 text-white mx-auto py-1 text-center">
                                        @if ($leng = 'eng')
                                            <a href="{{ route('front.aboutus', ['leng' => 'eng']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                ABBOUT US
                                            </a>
                                        @else 
                                            <a href="{{ route('front.aboutus', ['leng' => 'esp']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                NOSOTROS
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 text-white mx-auto py-1 text-center">
                                        @if ($leng = 'eng')
                                            <a href="{{ route('front.contacto', ['leng' => 'eng']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                CONTACT
                                            </a>
                                        @else 
                                            <a href="{{ route('front.contacto', ['leng' => 'esp']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                                CONTACTO
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-11 col-11 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-0 mx-sm-auto mx-xs-auto mx-auto py-xxl-3 py-xl-4 py-lg-4 py-md-0 py-sm-0 py-xs-0 px-xxl-0 px-xl-0 px-lg-0 px-md-0 px-sm-0 px-xs-3 px-3 bar2">
                        <div class="row fondo-bar-sm">
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12  py-1">
                                {{-- <div class="row">
                                    <div class="col-8 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-xs-center text-center">
                                        <a href="{{ route('user.signup', ['leng' => 'esp']) }}" class='btn btn-outline text-white'>
                                            <span uk-icon='icon: user;'></span>
                                            <small>
                                                Entrar
                                            </small>
                                        </a>
                                    </div>
                                    <div class="col-4 mt-1">
                                        <a class="text-white" href="#">
                                            <span class="position-relative" uk-icon="icon: cart; ratio: 1;">
                                                <span class="position-absolute top-0 start-100 translate-middle badge"><small>1</small></span>
                                            </span>
                                        </a>
                                    </div>
                                </div> --}}
                                
                                <ul class="row" style="list-style-type: none; padding-left: 0;">
                                    @if ($leng == 'eng')
                                    <li class="dropdown col-8 text-end mt-2" style="list-style-type: none; padding-left: 0;">        
                                        <a href="#" class="dropdown-toggle text-white fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">Cuenta</a>
                                        @if (Auth::check())
                                            <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                                <li class="dropdown-item"><a href="{{ route('user.profile') }}" style="text-decoration: none;">Perfil</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="{{ route('user.logout') }}" style="text-decoration: none;">Salir</a></li>
                                            </ul>
                                        @else
                                            <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                                <li class="dropdown-item"><a href="{{ route('user.signup') }}" style="text-decoration: none;">Registrarse2</a></li>
                                                <li class="dropdown-item"><a href="{{ route('user.signin') }}" style="text-decoration: none;">Ingresar2</a></li>
                                            </ul>
                                        @endif  
                                    </li>
                                    @else 
                                    <li class="dropdown col-8 text-end mt-2" style="list-style-type: none; padding-left: 0;">        
                                        <a href="#" class="dropdown-toggle text-white fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">Cuenta</a>
                                        @if (Auth::check())
                                            <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                                <li class="dropdown-item"><a href="{{ route('user.profile') }}" style="text-decoration: none;">Perfil</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li class="dropdown-item"><a href="{{ route('user.logout') }}" style="text-decoration: none;">Salir</a></li>
                                            </ul>
                                        @else
                                            <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                                <li class="dropdown-item"><a href="{{ route('user.signup') }}" style="text-decoration: none;">Registrarse</a></li>
                                                <li class="dropdown-item"><a href="{{ route('user.signin') }}" style="text-decoration: none;">Ingresar</a></li>
                                            </ul>
                                        @endif  
                                    </li>
                                    @endif
                                    <li class="col-4 text-start" style="list-style-type: none; padding-left: 0;">
                                        <a href="{{ route('shoppingCart') }}" class="text-white">
                                            <button type="button" class="btn btn-outline position-relative">
                                                <div uk-icon="icon: cart; ratio: 1;" class="text-white"></div>
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white">
                                                        {{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}
                                                    </span>
                                            </button>
                                        </a>
                                    </li>
                                </ul>
                                
                            </div>
                            @if ($pagina == "productos_detalle")
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">        
                                    <a class="text-white " href="{{ route('front.'.$pagina, ['producto' => ($producto) ? $producto : '', 'leng' => 'esp']) }}">
                                        <img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                                    <a class="text-white " href="{{ route('front.'.$pagina, ['producto' => ($producto) ? $producto : '', 'leng' => 'eng']) }}">
                                        <img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            @elseif ($pagina == "signup")
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">        
                                    <a class="text-white " href="{{ route('user.'.$pagina, ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                                    <a class="text-white " href="{{ route('user.'.$pagina, ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            @else
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">        
                                    <a class="text-white " href="{{ route('front.'.$pagina, ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                                    <a class="text-white " href="{{ route('front.'.$pagina, ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif


<script>
    document.querySelectorAll('.btn-idioma').forEach(button => {
        button.addEventListener('click', function() {
            cambiarIdioma(this.getAttribute('data-idioma'));
        });
    });

    function cambiarIdioma(idioma) {
        fetch(`/cambiarIdioma/${idioma}`)
            .then(response => response.json())
            .then(data => actualizarContenido(data));
    }

    function actualizarContenido(data) {
        // Actualizar el contenido de los elementos con las nuevas traducciones
        document.getElementById('texto-headerinicio').textContent = data.headerinicio;
        document.getElementById('texto-headerproductos').textContent = data.headerproductos;
        document.getElementById('texto-headerservicios').textContent = data.headerservicios;
        document.getElementById('texto-headernosotros').textContent = data.headernosotros;
        document.getElementById('texto-headercontacto').textContent = data.headercontacto;

    }
</script>