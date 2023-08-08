@extends('layouts.front')

@section('title', (($leng == 'eng') ? "Contact" : "Contacto"))

@section('styleExtras')

<style>
    /* input::placeholder, textarea::placeholder {
        font-weight: bold;
    } */

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

    /* xxl */
    @media (min-width: 1400px) {
        .mapa {
            height: 800px;
            width: 100%;
        }

    }

    /* xl */
    @media (min-width: 1200px) and (max-width: 1400px) {
        .mapa {
            height: 700px;
            width: 100%;
        }

    }

    /* lg */
    @media (min-width: 992px) and (max-width: 1200px) {
        .mapa {
            height: 600px;
            width: 100%;
        }

    }

    /* md */
    @media (min-width: 768px) and (max-width: 992px) {
        .mapa {
            height: 500px;
            width: 100%;
        }

    }

    /* sm */
    @media (min-width: 576px) and (max-width: 768px) {
        .mapa {
            height: 400px;
            width: 100%;
        }
    }

    /* xs */
    @media (min-width: 0px) and (max-width: 576px) {
        .mapa {
            height: 300px;
            width: 100%;
        }

    }
</style>

@endsection

@section('content')


<div class="container-fluid" style="background-color: #1E4A89;">
	<div class="row px-4">
		<div class="col position-relative mx-auto mt-5" >
            <div class="row mb-5 py-3 px-xxl-0 px-xl-5 px-lg-3 px-md-0 px-sm-0 px-xs-0" style="background-color: #3378C6;">
                <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-sm-12 col-xs-12 
                     text-center
                    mx-auto mt-xxl-2 mt-xl-1 mt-lg-4 mt-md-0 mt-sm-0 mt-xs-0">
                    <img src="{{ asset('img/design/inicio/Logo.png') }}" alt="logo" class="img-fluid">
                </div>
                <div class="col-2 mx-auto text-center cont-btn">
                    <button class="btn btn-block  text-white bg-transparent btn-toggle"><span uk-icon="icon: menu;"></span></button>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-12 col-sm-12 col-xs-11 col-11 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-0 mx-sm-auto mx-xs-auto mx-auto py-xxl-4 py-xl-4 py-lg-4 py-md-0 py-sm-0 py-xs-0 px-xxl-0 px-xl-0 px-lg-0 px-md-0 px-sm-0 px-xs-3 px-3 bar1">
                    <div class="row fondo-bar-sm">
                        <div class="col-xxl-3 col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 "></div>
                        <div class="col-xxl-9 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="row">
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 text-white mx-auto py-1 text-center">
                                    @if ($leng == 'eng')
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
                                    @if ($leng == 'eng')
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
                                    @if ($leng == 'eng')
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
                                    @if ($leng == 'eng')
                                        <a href="{{ route('front.aboutus', ['leng' => 'eng']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                            ABOUT US
                                        </a>
                                    @else 
                                        <a href="{{ route('front.aboutus', ['leng' => 'esp']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
                                            NOSOTROS
                                        </a>
                                    @endif    
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 text-white mx-auto py-1 text-center">
                                    @if ($leng == 'eng')
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
                        <div class="col-xxl-5 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-xs-center text-center py-1">
                            <ul class="row" style="list-style-type: none; padding-left: 0;">
                                @if ($leng == 'eng')
                                <li class="dropdown col-8 text-end mt-2" style="list-style-type: none; padding-left: 0;">        
                                    <a href="#" class="dropdown-toggle text-white fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                        @if ($leng == 'eng')
                                            Account
                                        @else
                                            Cuenta
                                        @endif
                                    </a>
                                    @if (Auth::check())
                                        <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                            <li class="dropdown-item"><a href="{{ route('user.profile', ['leng' => 'eng']) }}" style="text-decoration: none;">Profile</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="{{ route('user.logout', ['leng' => 'eng']) }}" style="text-decoration: none;">Logout</a></li>
                                        </ul>
                                    @else
                                        <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                            <li class="dropdown-item"><a href="{{ route('user.register', ['leng' => 'eng']) }}" style="text-decoration: none;">Signup</a></li>
                                            <li class="dropdown-item"><a href="{{ route('user.login', ['leng' => 'eng']) }}" style="text-decoration: none;">Signin</a></li>
                                        </ul>
                                    @endif  
                                </li>
                                @else 
                                <li class="dropdown col-8 text-end mt-2" style="list-style-type: none; padding-left: 0;">        
                                    <a href="#" class="dropdown-toggle text-white fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">Cuenta</a>
                                    @if (Auth::check())
                                        <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                            <li class="dropdown-item"><a href="{{ route('user.profile', ['leng' => 'esp']) }}" style="text-decoration: none;">Perfil</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="{{ route('user.logout', ['leng' => 'esp']) }}" style="text-decoration: none;">Salir</a></li>
                                        </ul>
                                    @else
                                        <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                            <li class="dropdown-item"><a href="{{ route('user.register', ['leng' => 'esp']) }}" style="text-decoration: none;">Registrarse</a></li>
                                            <li class="dropdown-item"><a href="{{ route('user.login', ['leng' => 'esp']) }}" style="text-decoration: none;">Ingresar</a></li>
                                        </ul>
                                    @endif  
                                </li>
                                @endif
                                <li class="col-4 text-start" style="list-style-type: none; padding-left: 0;">
                                    <a href="{{ route('shoppingCart', ['leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" class="text-white">
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
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('front.contacto', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('front.contacto', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>

<div class="container-fluid">
    <div class="row" style="background-color: #3378C6;"> 
        <div class="col display-3 text-white text-center py-3">
            @if ($leng == 'eng')
                Contact
            @else 
                Contacto
            @endif
        </div>
    </div>
    <div class="row bg-white">
        <div class="col-10 mx-auto py-5">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto py-5">
                    <div class="row">
                        <div class="col-xxl-1 col-xl-1 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12"></div>
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-11 col-sm-11 col-xs-11 col-11 py-1" style="line-height: 1; color: #44B2E5;">
                            @if ($leng == 'eng')
                                {{ $elements[43]->text }}
                            @else 
                                {{ $elements[27]->text }}
                            @endif
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col mx-xxl-2 mx-xl-3 mx-lg-0 mx-md-0 mx-sm-0 mx-xs-0 mx-0">
                            <div class="row">
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 py-1 text-end">
                                    <img src="{{ asset('img/design/contacto/gps.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10 col-sm-10 col-xs-10 col-10 fw-bolder py-1" style="line-height: 1;">
                                    {{ $config->direccion }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col mx-xxl-2 mx-xl-3 mx-lg-0 mx-md-0 mx-sm-0 mx-xs-0 mx-0">
                            <div class="row">
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 py-1 text-end">
                                    <img src="{{ asset('img/design/contacto/mail.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10 col-sm-10 col-xs-10 col-10 fw-bolder py-1" style="line-height: 1;">
                                    {{ $config->destinatario }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-xxl-1 col-xl-1 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12"></div>
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-11 col-sm-11 col-xs-11 col-11 py-1">
                            <a href="https://wa.me/{{ $config->whatsapp }}" class="px-2" uk-icon="icon: whatsapp; ratio: 1.6;" style="color: #44B2E5;"></a>
                            <a href="{{ $config->facebook }}" class="px-2" uk-icon="icon: facebook; ratio: 1.6;" style="color: #44B2E5;"></a>
                            <a href="{{ $config->instagram }}" class="px-2" uk-icon="icon: instagram; ratio: 1.6;" style="color: #44B2E5;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10 col-sm-12 col-xs-12 col-12 mx-auto py-5">
                    <form action="{{ route('formularioContac') }}" method="POST">
                        @csrf
                        <input type="hidden" name="tipoForm" value="contacto">
                        <div class="row mt-2">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-auto py-2">
                                <input type="text" name="nombre" class="form-control" placeholder="{{ ($leng == 'eng') ? "Name" : "Nombre" }}" style="border: 2px solid #44B2E5; box-shadow: none;"> 
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-auto py-2">
                                <input type="text" name="empresa" class="form-control" placeholder="{{ ($leng == 'eng') ? "Company" : "Empresa" }}" style="border: 2px solid #44B2E5; box-shadow: none;">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-auto py-2">
                                <input type="number" name="whatsapp" class="form-control" placeholder="Whatsapp" style="border: 2px solid #44B2E5; box-shadow: none;">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-auto py-2">
                                <input type="email" name="correo" class="form-control" placeholder="{{ ($leng == 'eng') ? "Email" : "Correo" }}" style="border: 2px solid #44B2E5; box-shadow: none;">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col py-3">
                                <textarea name="mensaje" id="" cols="30" rows="4" class="form-control" placeholder="{{ ($leng == 'eng') ? "Message" : "Mensaje" }}" style="border: 2px solid #44B2E5; box-shadow: none;"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-auto mx-sm-0 mx-xs-0 mx-0 py-2">
                                <input type="submit" class="form-control bg-white" style="border: 2px dashed #44B2E5; border-radius: 16px; color: #1E4A89;" value="{{ ($leng == 'eng') ? "Send" : "Enviar" }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col px-0">
            <!--Google map  map-container-->
            <div id="map-container-google-1" >
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14934.698168984944!2d-103.3966255!3d20.6421186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0ed241a9bb%3A0xbb4c3906c38265fd!2sWozial%20Marketing%20Lovers!5e0!3m2!1ses-419!2smx!4v1685136732153!5m2!1ses-419!2smx" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--Google Maps-->
        </div>
    </div>
 </div>

@endsection


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