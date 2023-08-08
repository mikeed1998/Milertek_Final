@extends('layouts.front')

@section('title', (($leng == 'eng') ? "Home" : "Inicio"))

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/owlCarousel/assets/owl.carousel.css') }}">

	{{-- <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}"> --}}
@endsection

@section('styleExtras')

<style>
    .slider-container {
        position: relative;
    }

    .slider-dots-container {
        position: absolute;
        /* left: 130px;
        bottom: 230px; */
        transform: translateX(-50%);
        z-index: 1;
    }

    .slider-dots {
        display: flex;
        justify-content: center;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .slider-dots li {
        margin: 0 5px;
    }

    .slider-dots button {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #FEFEFE;
        border: none;
        cursor: pointer;
    }

    .slider-dots button.slick-active {
        background-color: #366DB1;
    }

    .columna_productos {
        border: 1px solid white;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Sombra */
        border-radius: 16px;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 25px;
        margin-right: 25px;
    }

    .columna_productos:hover {
        border: 2px solid #46B1E5;
        border-radius: 16px;
    }

    .productos > .slick-dots {
        bottom: -70px;
    }

    .input-mensaje {
        color: white;
        border: 2px solid #44B2E3;
        background-color: #1E4A89;
    }

    .input-mensaje::placeholder {
        font-size: 13px;
        color: white;
    }

    .input-mensaje:focus {
        color: white;
        background-color: #1E4A89;
    }

    /* Para navegadores WebKit */
    .scroll-1::-webkit-scrollbar {
        width: 12px; /* Cambia el ancho de la barra de desplazamiento */
        background-color: transparent; /* Establece el fondo de la barra de desplazamiento como transparente */
    }

    .scroll-1::-webkit-scrollbar-thumb {
        background-color: transparent; /* Establece el color del pulgar de la barra de desplazamiento como transparente */
    }

    .boton-productos {
        border: 2px solid #FFFFFF;
    }

    .boton-productos:hover {
        border: 2px solid #44B2E3;
    }
    
    .circulo-productos {
        border: 2px solid #FFFFFF;
        border-radius: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .circulo-productos, .texto-productos {
        color: #FFFFFF;
    }

    .link-filtro-productos:hover .texto-productos {
        color: #44B2E3;
    }

    .link-filtro-productos:hover .circulo-productos {
        border: 2px solid #44B2E3;
    }
    

</style>

<style>
    /*  Píxeles	REM
        1px	0.06rem */
    /*  REM	Píxeles
        0.01rem	0.16px */

    .image-container {
        width: 100%;
        padding-bottom: 75%; /* Proporción de aspecto de la imagen (por ejemplo, 4:3 = 75%) */
        background-size: cover;
        background-position: center;
    }

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
    
    @media (min-width: 1800px) {
        .gran {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    }
    
    /* xxl */
    @media (min-width: 1400px) {
        .apartado {
            margin-left: 50px;
        }

        .slider-dots-container {
            left: 130px;
            bottom: 210px;
        }

        .slider_pri-img {
            height: 55rem; 
        }

        .banner {
            height: 800px;
        }

        .btn-todo {
            width: 50%;
        }

        .img_producto {
            height: 280px;
        }

    }

    /* xl */
    @media (min-width: 1200px) and (max-width: 1400px) {
        .apartado {
            margin-top: 0.3rem;
            margin-left: 20px;
        }

        .inicio {
            margin-left: 30px;
        }

        .contacto {
            margin-right: 20px;
        }

        .slider-dots-container {
            left: 120px;
            bottom: 210px;
        }

        .slider_pri-img {
            height: 55rem; 
        }

        .banner {
            height: 700px;
        }

        .btn-todo {
            width: 50%;
            margin-left: 10px;
        }

        .img_producto {
            height: 240px;
        }

    }

    /* lg */
    @media (min-width: 992px) and (max-width: 1200px) {
        .apartado {
            margin-left: 1px;
        }

        .slider-dots-container {
            left: 120px;
            bottom: 120px;
        }

        .slider_pri-img {
            height: 44rem; 
        }

        .banner {
            height: 660px;
        }

        .btn-todo {
            width: 70%;
            margin-left: 10px;
        }

        .img_producto {
            height: 210px;
        }

    }

    /* md */
    @media (min-width: 768px) and (max-width: 992px) {
        .apartado {
            margin-left: 1px;
        }

        .slider-dots-container {
            left: 120px;
            bottom: 50px;
        }

        .slider_pri-img {
            height: 34rem; 
        }

        .banner {
            height: 600px;
        }

        .btn-todo {
            width: 75%;
            margin-left: 34px;
        }

        .img_producto {
            height: 190px;
        }

    }

    /* sm */
    @media (min-width: 576px) and (max-width: 768px) {
        .slider-dots-container {
            left: 110px;
            bottom: 15px;
        }

        .slider_pri-img {
            height: 27rem; 
        }

        /* Inicio */

        .fondo-bar-sm {
            background-color: #3378C6;
        }

        .banner {
            height: 400px;
        }

        .btn-todo {
            width: 75%;
            margin-left: 34px;
        }

        .img_producto {
            height: 180px;
        }

    }

    /* xs */
    @media (min-width: 0px) and (max-width: 576px) {
        .slider-dots-container {
            left: 70px;
            bottom: 8px;
        }

        .slider_pri-img {
            height: 24rem; 
        }

        /* Inicio */

        .fondo-bar-sm {
            background-color: #3378C6;
        }

        .banner {
            height: 300px;
        }

        .cont-todo {
            margin-top: 60px;
        }

        .btn-todo {
            width: 100%;
            margin-left: 10px;
        }

        .img_producto {
            height: 160px;
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

@endsection

@section('content')

<div class="container-fluid" style="background-color: #1E4A89;">
    <div class="row px-4">
        <div class="col position-relative mx-auto mt-5">
            <div class="row">
                <div class="col">
                    <div class="row">           
                        <div class="slider-container px-0">
                            <div class="slider px-0">
                                @if ($sliderCont != 0)
                                    @foreach ($slider_principal as $sp)
                                    <div class="col position-relative">
                                        <div class="slider_pri-img" style="
                                            background-image: url('{{ asset('img2/photos/slider_principal/'.$sp->imagen) }}');
                                            background-repeat: no-repeat;
                                            background-size: cover;
                                            background-position: center center;
                                            width: 100%;
                                            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.6);
                                        "></div>
                                        <div class="col-xxl-6 col-xl-8 col-lg-9 col-md-10 col-sm-12 col-xs-12 position-absolute py-1 px-0 top-50 start-0">
                                            <div class="row">
                                                <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-11 col-xs-11 mx-2"></div>
                                                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
                                                    <div class="row">
                                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-11 col-xs-11 col-11 mx-auto display-1 scroll-1 text-white" style="overflow: auto; max-height: 90px;">
                                                            @if($leng == 'eng') 
                                                                {{ $sp->titulo_en }}
                                                            @else 
                                                                {{ $sp->titulo }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-11 col-xs-11 col-11 mx-auto text-white scroll-1" style="overflow: auto; max-height: 70px;">
                                                            @if($leng == 'eng') 
                                                                {{ $sp->descripcion_en }}
                                                            @else 
                                                                {{ $sp->descripcion }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    <h2>No hat sliders, agregalas desde el administrador</h2>
                                @endif
                            </div>
                            <div class="slider-dots-container ">
                                <ul class="slider-dots"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 position-absolute top-0 start-0 mt-5 mb-5 px-xxl-5 px-xl-5 px-lg-5 px-md-5 px-sm-5 px-xs-5" style="z-index: 999;">
            <div class="row py-3 px-xxl-0 px-xl-5 px-lg-3 px-md-0 px-sm-0 px-xs-0">
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
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('front.index', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('front.index', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid py-3" style="background-color: #3378C6;">
    <div class="row px-3">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 fs-2 fw-bolder text-white text-center">
            {{-- {{ $elements[0]->texto }} --}}
            {{-- <p class="m-0 text-center" id="texto-sectoresespeciaidad">{{ trans('sectoresespeciaidad') }}</p> --}}
            @if($leng == 'eng') 
                Speciality Sectors
            @else 
                Sectores de Especialidad
            @endif
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
            <span uk-icon="icon: arrow-down; ratio: 3;" style="color: #44B2E3;"></span>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12"></div>
    </div>
</div>

<div class="container-fluid mt-5 mb-5" style="background-color: #3378C6;">
    <div class="row py-5" style="border-bottom: 2px dashed black;">
        <div class="col-xxl-3 col-xl-3 col-lg-12 col-md-11 col-sm-11 col-xs-11 col-11 mx-auto">
            <div class="row">
                <div class="col-xxl-1 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 "></div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-11 col-xs-11 mx-auto text-white " style="line-height: 1.1;">
                    @if($leng == 'eng') 
                        {{ $elements[32]->texto }}
                    @else 
                        {{ $elements[8]->texto }}
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-xxl-19 col-xl-12 col-lg-12 col-md-9 col-sm-11 col-xs-11 mx-auto py-4 text-center">
                    
                    @if($leng == 'eng') 
                        <a href="{{ route('front.productos', ['leng' => 'eng']) }}">
                            <div class="btn btn-outline px-5 py-2 text-white boton-productos">
                                See Products
                            </div>
                        </a>
                    @else 
                        <a href="{{ route('front.productos', ['leng' => 'esp']) }}">
                            <div class="btn btn-outline px-5 py-2 text-white boton-productos">
                                Ver Productos
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="categorias_productos px-0 filter-group" data-toggle="buttons">
                    
                    @if($categoriasCont != 0)
                        @foreach ($categorias as $categoria)
                            <div class="col position-relative">
                                <a href="#/" class="link-filtro-productos filter-option" data-filter=".categoria{{ $categoria->id }}">
                                    <div class="col-xxl-11 col-xl-10 col-lg-8 col-md-9 col-sm-9 col-xs-9 col-8 mx-auto py-2 categoria-producto position-relative">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-3 col-xs-2 col-4 text-center py-3 circulo-productos">
                                                        <img src="{{ asset('img2/photos/categorias/'.$categoria->icono) }}" alt="" class="img-fluid mx-auto gran" style="width: 40px; height: 40px;">
                                                    </div>
                                                    <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-8 col-sm-9 col-xs-9 col-8 p-4 text-white">
                                                        <strong class="texto-productos">
                                                            @if($leng == 'eng') 
                                                                {{ $categoria->categoria_en }}
                                                            @else 
                                                                {{ $categoria->categoria }}
                                                            @endif
                                                        </strong>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                </a>
                               
                            </div>
                        @endforeach
                    @else
                    
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto">
                    <div class="row">
                        <div class="col text-start py-3 text-white display-5">
                            {{-- Nosotros --}}
                            {{-- <p class="m-0 text-start" id="texto-nosotros2">{{ trans('nosotros2') }}</p> --}}
                            @if($leng == 'eng') 
                                About us
                            @else 
                                Nosotros
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-xs-12" style="color: #44B2E3; line-height: 1.2;">
                            
                            @if($leng == 'eng') 
                                {{ $elements[30]->texto }}
                            @else 
                                {{ $elements[8]->texto }}
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col px-0 py-5">
                            <img src="{{ asset('img/design/inicio/imagen.png') }}" alt="" class="img-fluid shadow-lg">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                        <div class="col-xxl-9 col-xl-9 col-lg-10 col-md-12 col-sm-12 col-xs-12 position-relative px-0 text-end">
                            <a href="#/">
                            <img src="{{ asset('img/design/inicio/servicios.png') }}" alt="" class="img-fluid">
                            <div class="col-6 mt-xxl-4 mt-xl-3 mt-lg-2 mt-md-1 mt-sm-0 mt-xs-0 position-absolute top-0 start-0">
                                <div class="row">
                                    <div class="col display-5 text-white text-center">
                                        {{-- <p class="m-1 p-0" id="texto-servicios2">{{ trans('servicios2') }}</p> --}}
                                        @if($leng == 'eng') 
                                            Services
                                        @else 
                                            Servicios
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"></div>
                                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-xs-8 mx-xxl-auto mx-xl-auto mx-lg-auto mx-md-auto mx-sm-auto mx-xs-auto text-start">
                                        <img src="{{ asset('img/design/inicio/flecha.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-9 col-sm-12 col-xs-12"></div>
                        <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-9 col-sm-12 col-xs-12 py-5 text-white text-start" style="line-height: 1.2;">
                            @if($leng == 'eng') 
                                {{ $elements[29]->texto }}
                            @else 
                                {{ $elements[6]->texto }}
                            @endif
                            
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-9 col-sm-12 col-xs-12"></div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-5 px-4 fw-bolder text-white text-start">
                            <a href="{{ ($leng == 'eng') ? route('front.servicios', ['leng' => 'eng']) : route('front.servicios', ['leng' => 'esp']) }}" class="text-white" style="text-decoration: none;">
                                <p style="border-bottom: 5px solid #44B2E3;" id="texto-vermas">{{ ($leng == 'eng') ? "See More" : "Ver Más" }}</p>
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col bg-white py-5">
            <div class="row">
                <div class="col-11 px-4 py-5 mx-auto display-1" style="color: #1E4A89;">
                    {{-- Productos --}}
                    {{-- <p class="m-0" id="texto-productos2">{{ trans('productos2') }}</p> --}}
                    @if($leng == 'eng') 
                        Products
                    @else 
                        Productos
                    @endif
                </div>
            </div>
            <div class="row mb-5 py-5">
             
                <div class="col-11 mx-auto position-relative">
                    <div class="productos">
                        @if ($productosCont != 0)
                            @foreach ($productos as $p)
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-10 col-sm-10 col-xs-10 col-10 columna_productos dato-cat categoria{{ $p->categoria }}">
                                <div class="row">
                                    <div class="col-11 fw-bolder py-3 mx-auto" style="font-size: 14px;">
                                        @foreach ($categorias as $cate_prod)
                                            @if ($cate_prod->id == $p->categoria)
                                                @if($leng == 'eng') 
                                                    {{ $cate_prod->categoria_en }}
                                                @else 
                                                    {{ $cate_prod->categoria }}
                                                @endif
                                                
                                                @break
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="img_producto" style="
                                            background-color: #FFF;
                                            background-image: url('{{ asset('img2/photos/productos/galeria/'.$p->foto_principal) }}');
                                            background-size: contain;
                                            background-position: center center;
                                            background-repeat: no-repeat;
                                            width: 100%;
                                        "></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-11 py-3 mx-auto">
                                        <div class="row">
                                            <div class="col-7 fw-bolder" style="font-size: 14px;">
                                                @if($leng == 'eng') 
                                                    {{ $p->nombre_en }}
                                                @else 
                                                    {{ $p->nombre }}
                                                @endif
                                            </div>
                                            <div class="col-5 text-end">
                                                <a href="{{ route('front.productos_detalle', ['producto' => $p->id]) }}" class="text-dark text-decoration-underline" style="font-size: 14px;">
                                                    {{-- <p class="m-0 texto-verpro">{{ trans('verpro') }}</p> --}}
                                                    @if($leng == 'eng') 
                                                        See Product
                                                    @else 
                                                        Ver Producto
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            @endforeach
                        @else 
                            @if($leng == 'eng') 
                                <h2>No products avaible</h2>    
                            @else 
                                <h2>No hay productos disponibles</h2>   
                            @endif
                        @endif
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 cont-todo position-absolute top-100 start-0">
                        <div class="row">
                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 mx-auto">
                                <a href="{{ route('front.productos') }}" class="btn btn-todo py-3" style="text-decoration: none; border: 2px solid #1E4A89; color: #1E4A89;">
                                    {{-- <p class="m-0" id="texto-vertodo">{{ trans('vertodo') }}</p> --}}
                                    @if($leng == 'eng') 
                                        See All  
                                    @else 
                                        Ver Todo
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col banner" style="
            background-image: url('{{ asset('img/design/inicio/banner.png') }}');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            width: 100%;
        "></div>
    </div>
    <div class="row">
        <div class="col py-5 bg-white">
            <div class="row mt-5">
                <div class="col text-center display-2">
                    {{-- <p class="m-1 p-0" id="texto-nuestrosclientes">{{ trans('nuestrosclientes') }}</p> --}}
                    @if($leng == 'eng') 
                        Clients    
                    @else 
                        Nuestros Clientes
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <span uk-icon="icon: arrow-down; ratio: 2.6;" style="color: #44B2E3;"></span>
                </div>
            </div>
            <div class="row py-5 mb-5">
                <div class="col-11 mx-auto text-center">
                    <div class="clientes">
                        
                        @foreach ($clientes as $clie)
                        <div>
                            <div class="col" style="
                                background-image: url('{{ asset('img2/photos/clientes/'.$clie->logo) }}');
                                background-size: contain;
                                background-position: center center;
                                background-repeat: no-repeat;
                                width: 100%;
                                height: 80px;
                            "></div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" style="background-color: #1E4A89;">
            <div class="row mt-5">
                <div class="col text-center text-white display-2">
                    {{-- <p class="m-1 p-0" id="texto-enviarmensaje">{{ trans('enviarmensaje') }}</p> --}}
                    @if($leng == 'eng') 
                        Send a Message 
                    @else 
                        Envía un Mensaje
                    @endif
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 mx-auto text-center" style="color: #44B2E3;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor iure nostrum atque animi nam vel accusantium perspiciatis nesciunt saepe ex?
                </div>
            </div>
            <div class="row mb-5 mt-5">
                <div class="col-xxl-8 col-xl-10 col-lg-10 mx-auto">
                    <form action="{{ route('formularioContac') }}" method="POST">
                        @csrf
                        <input type="hidden" name="tipoForm" value="inicio">
                        <input type="hidden" name="empresa" value="">
                        <input type="hidden" name="correo" value="">
                        <div class="row">
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-9 col-sm-12 col-xs-12 py-xxl-0 py-xl-0 py-lg-0 py-md-2 py-sm-2 py-xs-2 py-2 mx-auto">
                                <input type="text" name="nombre" class="form-control input-mensaje" id="nombreform" placeholder="{{ ($leng == 'eng') ? "Name" : "Nombre" }}">   
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-9 col-sm-12 col-xs-12 py-xxl-0 py-xl-0 py-lg-0 py-md-2 py-sm-2 py-xs-2 py-2 mx-auto">
                                <input type="number" name="whatsapp" class="form-control input-mensaje" placeholder="Whatsapp">  
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 py-xxl-0 py-xl-0 py-lg-0 py-md-2 py-sm-2 py-xs-2 py-2 mx-auto">
                                <input type="text" name="mensaje" class="form-control input-mensaje" id="mensajeform" placeholder="{{ ($leng == 'eng') ? "Message" : "Mensaje" }}">
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-9 col-sm-12 col-xs-12 py-xxl-0 py-xl-0 py-lg-0 py-md-2 py-sm-2 py-xs-2 py-2 mx-auto">
                                <button class="btn w-100 btn-outline bg-white text-dark rounded" style="font-size: 13px;  font-weight: bold;">
                                    <div style="color: #1E4A89;"><p class="m-1 p-0" id="texto-enviarform">{{ ($leng == 'eng') ? "Send" : "Enviar" }}</p></div>                                                                                                                                                                                                     
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jqueryExtra')

<script>
    $(document).ready(function() {
        var slider = $('.slider');

        slider.slick({
            // Opciones del slider
            arrows: false,
        });

        var dotsContainer = $('.slider-dots');
        var slideCount = slider.slick('getSlick').slideCount;

        for (var i = 0; i < slideCount; i++) {
            dotsContainer.append('<li><button></button></li>');
        }

        var dots = dotsContainer.find('button');

        dots.click(function() {
            var index = $(this).parent().index();
            slider.slick('slickGoTo', index);
        });

        slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            dotsContainer.find('li').removeClass('slick-active');
            dotsContainer.find('li').eq(nextSlide).addClass('slick-active');
        });

        slider.on('afterChange', function(event, slick, currentSlide) {
            dots.removeClass('slick-active');
            dots.eq(currentSlide).addClass('slick-active');
        });
    });
</script>

<script>
    $(document).ready(function() {

        $('.bar1, .bar2').show();

        $('.btn-toggle').click(function() {
            $('.bar1, .bar2').toggle();
        });
    });
</script>

<script>
    $('.categorias_productos').slick({
            autoplay: false,
            dots: false,
            infinite: true,
            arrows: false,
            speed: 300,
            rows: 3,
            slidesPerRow: 3,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    rows: 3,
                    slidesPerRow: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 800,
                settings: {
                    rows: 2,
                    slidesPerRow: 2
                }
            },
            {
                breakpoint: 680,
                settings: {
                    rows: 2,
                    slidesPerRow: 1
                }
            }
        ]
        });

    $('.productos').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
    });

    $('.clientes').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
    });
    
</script>
    
@endsection
