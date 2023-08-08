@extends('layouts.front')

@section('title', (($leng == 'eng') ? "About us" : "Nosotros"))

@section('styleExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('css/nosotros.css')}}"> --}}

<style>
    .dot {
        width: 10px;
        height: 10px;
        background-color: #4CB5E6;
        border-radius: 50%;
    }

</style>
<style>
   .slider-for .img-producto {
        position: relative;
        overflow: hidden;
    }

    .slider-for .img-producto::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        transition: transform 0.3s ease;
        transform: scale(1);
        opacity: 0;
        pointer-events: none;
    }

    .slider-for .img-producto:hover::after {
        opacity: 1;
        transform: scale(1.5); /* Ajusta el nivel de zoom */
    }
</style>

<style>
    .slide-imagen {
        border: 2px solid #44B2E5;
        margin-left: 15px; 
        margin-right: 5px; 
        margin-top: 5px;
        margin-bottom: 5px;
        border-radius: 16px;
    }

    .slide-imagen:hover {
        border: 2px solid red;
    }

    .link-nav {
        color: #FFF;
    }

    .link-nav:hover {
        color: #44B2E5;
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
        .cuadro-texto-primero {
            max-height: 130px; 
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -50px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }       

        .img-nosotros {
            height: 900px;
        }

       

    }

    /* xl */
    @media (min-width: 1200px) and (max-width: 1400px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -30px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -60px;
        }       

        .img-nosotros {
            height: 800px;
        }

        

    }

    /* lg */
    @media (min-width: 992px) and (max-width: 1200px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -50px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }     
        
        .img-nosotros {
            height: 700px;
        }

        

    }

    /* md */
    @media (min-width: 768px) and (max-width: 992px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -50px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }     
        
        .img-nosotros {
            height: 600px;
        }

    }

    /* sm */
    @media (min-width: 576px) and (max-width: 768px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            margin-left: -160px;
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -140px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }  
        
        .img-nosotros {
            height: 500px;
        }

    }

    /* xs */
    @media (min-width: 0px) and (max-width: 576px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            margin-left: -120px;
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -60px;
        }      

        .img-nosotros {
            height: 400px;
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
                                            <li class="dropdown-item"><a href="{{ route('user.profile') }}" style="text-decoration: none;">Profile</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="{{ route('user.logout') }}" style="text-decoration: none;">Logout</a></li>
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
                                            <li class="dropdown-item"><a href="{{ route('user.profile') }}" style="text-decoration: none;">Perfil</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="{{ route('user.logout') }}" style="text-decoration: none;">Salir</a></li>
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
                            <a class="text-white " href="{{ route('front.aboutus', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('front.aboutus', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>

<div class="container-fluid">
    <div class="row">
        <div class="col bg-white py-5">
            <div class="row">
                <div class="col-11 py-5 mx-auto">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-9 col-sm-12 col-xs-12 col-12 fs-2 mx-auto fw-bolder py-5">
                            <div class="row">
                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-11 col-sm-11 col-xs-11 col-11 mt-5 mx-auto text-start" style="color: #3378C6;">
                                    @if ($leng == 'eng')
                                        {{ $elements[33]->texto }}
                                    @else
                                        {{ $elements[13]->texto }}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto">
                            <div class="row">
                                <div class="col-11 mx-auto">
                                    <div class="row">
                                        <div class="col display-3" style="color: #1E4A89;">
                                            @if ($leng == 'eng')
                                                {{ $elements[34]->texto }}
                                            @else
                                                {{ $elements[14]->texto }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col py-4">
                                            @if ($leng == 'eng')
                                                {{ $elements[35]->texto }}
                                            @else
                                                {{ $elements[15]->texto }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col img-nosotros" style="
                    background-image: url('{{ asset('img/design/inicio/banner.png') }}');
                    background-size: contain;
                    background-position: center center;
                    background-repeat: no-repeat;
                    width: 100%;
                "></div>
            </div>
            <div class="row">
                <div class="col py-3 text-center display-3" style="color: #1E4A89;">
                    @if ($leng == 'eng')
                        {{ $elements[36]->texto }}
                    @else
                        {{ $elements[17]->texto }}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tiempo">    

                        @if ($contFecha != 0)
                            <div class="col mt-5 mb-5 py-4 position-relative border-1" style="margin-left: 30px;">
                            @for ($i = 0; $i < $contFecha; $i++)
                                @if ($i == $primero)
                                    {{-- pri {{ $i }} --}}
                                    <div class="col position-absolute top-50 start-50 translate-middle">
                                        <div class="dot"></div>
                                    </div>
                                    <div class="col-12 position-absolute top-50 start-100 translate-middle" style="border: 1px solid #4CB5E6;"></div>
                                        <div class="col-6 fs-5 fw-bolder text-center position-absolute top-0 start-50 translate-middle" style="color: #4CB5E6;">
                                            {{ $fechas[$i]->anio }}
                                        </div>
                                        <div class="col-12 py-5 text-dark text-center position-absolute top-100 start-100 translate-middle cuadro-texto-primero">
                                            <div class="row">
                                                <div class="col-8 text-start" style="font-size: 13px; font-weight: bold; text-justify: inter-word;">
                                                    @if ($leng == 'eng')
                                                        {{ $fechas[$i]->texto_en }}
                                                    @else
                                                        {{ $fechas[$i]->texto }}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif ($i == $primero && $primero == $ultimo) 
                                    {{-- pri ult {{ $i }}  --}}
                                @elseif ($i > $primero && $i < $ultimo) 
                               
                                <div class="col mt-5 mb-5 py-4 position-relative border-1">
                                    {{-- med {{ $i }} --}}
                                    <div class="col position-absolute top-50 start-50 translate-middle">
                                        <div class="dot"></div>
                                    </div>
                                    <div class="col-12 position-absolute top-50 start-100 translate-middle" style="border: 1px solid #4CB5E6;"></div>
                                        <div class="col-6 fs-5 fw-bolder text-center position-absolute top-0 start-50 translate-middle" style="color: #4CB5E6;">
                                            {{ $fechas[$i]->anio }}
                                        </div>
                                        <div class="col-12 py-5 text-dark text-center position-absolute top-100 start-100 translate-middle cuadro-texto-medio">
                                            <div class="row">
                                                <div class="col-8 text-start" style="font-size: 13px; font-weight: bold; text-justify: inter-word;">
                                                    @if ($leng == 'eng')
                                                        {{ $fechas[$i]->texto_en }}
                                                    @else
                                                        {{ $fechas[$i]->texto }}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif ($i == $ultimo)
                                    <div class="col mt-5 mb-5 py-4 position-relative border-1">
                                        {{-- ult {{ $i }} --}}
                                        <div class="col position-absolute top-50 start-50 translate-middle">
                                            <div class="dot"></div>
                                        </div>
                                        <div class="col-12 position-absolute top-50 start-100 translate-middle"></div>
                                        <div class="col-6 fs-5 fw-bolder text-center position-absolute top-0 start-50 translate-middle" style="color: #4CB5E6;">
                                            {{ $fechas[$i]->anio }}
                                        </div>
                                        <div class="col-12 py-5 text-dark text-center position-absolute top-100 start-100 translate-middle cuadro-texto-medio">
                                            <div class="row">
                                                <div class="col-8 text-start" style="font-size: 13px; font-weight: bold;">
                                                    @if ($leng == 'eng')
                                                        {{ $fechas[$i]->texto_en }}
                                                    @else
                                                        {{ $fechas[$i]->texto }}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                @endif
                            @endfor
                            </div>
                        @else
                            <h1>No hay fechas en la linea del tiempo</h1>
                        @endif

                    {{-- <div class="col mt-5 mb-5 py-4 position-relative border-1" style="margin-left: 30px;">
                            <div class="col position-absolute top-50 start-50 translate-middle">
                                <div class="dot"></div>
                            </div>
                            <div class="col-12 position-absolute top-50 start-100 translate-middle" style="border: 1px solid #4CB5E6;"></div>
                                <div class="col-6 fs-5 fw-bolder text-center position-absolute top-0 start-50 translate-middle" style="color: #4CB5E6;">
                                    2010
                                </div>
                                <div class="col-12 py-5 text-dark text-center position-absolute top-100 start-100 translate-middle cuadro-texto-primero">
                                    <div class="row">
                                        <div class="col-8 text-start" style="font-size: 13px; font-weight: bold; text-justify: inter-word;">
                                            Born the first OEMS Electronics for Manufacturing Services
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-5 mb-5 py-4 position-relative border-1">
                                <div class="col position-absolute top-50 start-50 translate-middle">
                                    <div class="dot"></div>
                                </div>
                                <div class="col-12 position-absolute top-50 start-100 translate-middle" style="border: 1px solid #4CB5E6;"></div>
                                    <div class="col-6 fs-5 fw-bolder text-center position-absolute top-0 start-50 translate-middle" style="color: #4CB5E6;">
                                        2013
                                    </div>
                                    <div class="col-12 py-5 text-dark text-center position-absolute top-100 start-100 translate-middle cuadro-texto-medio">
                                        <div class="row">
                                            <div class="col-8 text-start" style="font-size: 13px; font-weight: bold; text-justify: inter-word;">
                                                New facility start-up for Manufacturing Services (SMT+PTH)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-5 mb-5 py-4 position-relative border-1">
                                    <div class="col position-absolute top-50 start-50 translate-middle">
                                        <div class="dot"></div>
                                    </div>
                                    <div class="col-12 position-absolute top-50 start-100 translate-middle" style="border: 1px solid #4CB5E6;"></div>
                                    <div class="col-6 fs-5 fw-bolder text-center position-absolute top-0 start-50 translate-middle" style="color: #4CB5E6;">
                                        2015
                                    </div>
                                    <div class="col-12 py-5 text-dark text-center position-absolute top-100 start-100 translate-middle cuadro-texto-medio">
                                        <div class="row">
                                            <div class="col-8 text-start" style="font-size: 13px; font-weight: bold; text-justify: inter-word;">
                                                Team increased based in customer necessity for Product Design and Development, adding capacity
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-5 mb-5 py-4 position-relative border-1">
                                    <div class="col position-absolute top-50 start-50 translate-middle">
                                        <div class="dot"></div>
                                    </div>
                                    <div class="col-12 position-absolute top-50 start-100 translate-middle" style="border: 1px solid #4CB5E6;"></div>
                                    <div class="col-6 fs-5 fw-bolder text-center position-absolute top-0 start-50 translate-middle" style="color: #4CB5E6;">
                                        2021
                                    </div>
                                    <div class="col-12 py-5 text-dark text-center position-absolute top-100 start-100 translate-middle cuadro-texto-medio">
                                        <div class="row">
                                            <div class="col-8 text-start" style="font-size: 13px; font-weight: bold;">
                                                Company rebranded to Milertek in a joint venture between OEMS Electronics and HENGI
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-5 mb-5 py-4 position-relative border-1">
                                    <div class="col position-absolute top-50 start-50 translate-middle">
                                        <div class="dot"></div>
                                    </div>
                                    <div class="col-12 position-absolute top-50 start-100 translate-middle"></div>
                                    <div class="col-6 fs-5 fw-bolder text-center position-absolute top-0 start-50 translate-middle" style="color: #4CB5E6;">
                                        2021
                                    </div>
                                    <div class="col-12 py-5 text-dark text-center position-absolute top-100 start-100 translate-middle cuadro-texto-medio">
                                        <div class="row">
                                            <div class="col-8 text-start" style="font-size: 13px; font-weight: bold;">
                                                Company rebranded to Milertek in a joint venture between OEMS Electronics and HENGI
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
 
<div class="container-fluid" style="background-color: #3378C6;">
    <div class="row">
        <div class="col py-5">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto mt-5 bg-white py-0">
                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12 ">
                                    <div class="row">
                                        <div class="col text-center py-5">
                                            <img src="{{ asset('img/design/nosotros/mision.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col-11 mx-auto fs-3 mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 mt-xs-5 mt-0 mb-1" style="color: #1E4A89;">
                                            @if ($leng == 'eng')
                                                {{ $elements[37]->texto }}
                                            @else
                                                {{ $elements[19]->texto }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-xs-5 mb-5">
                                        <div class="col-11 mx-auto" style="line-height: 1;">
                                            @if ($leng == 'eng')
                                                {{ $elements[38]->texto }}
                                            @else
                                                {{ $elements[20]->texto }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto mt-5 bg-white">
                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col text-center py-5">
                                            <img src="{{ asset('img/design/nosotros/vision.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col-11 mx-auto fs-3 mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 mt-xs-5 mt-0  mb-1" style="color: #1E4A89;">
                                            @if ($leng == 'eng')
                                                {{ $elements[39]->texto }}
                                            @else
                                                {{ $elements[22]->texto }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-xs-5 mb-5">
                                        <div class="col-11 mx-auto" style="line-height: 1;">
                                            @if ($leng == 'eng')
                                                {{ $elements[40]->texto }}
                                            @else
                                                {{ $elements[23]->texto }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto mt-5 bg-white py-0">
                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col text-center py-5">
                                            <img src="{{ asset('img/design/nosotros/values.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col-11 mx-auto fs-2 mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 mt-xs-5 mt-0 mb-1" style="color: #1E4A89;">
                                            @if ($leng == 'eng')
                                                {{ $elements[41]->texto }}
                                            @else
                                                {{ $elements[25]->texto }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-xs-5 mb-5">
                                        <div class="col-11 mx-auto" style="line-height: 1;">
                                            @if ($leng == 'eng')
                                                {{ $elements[42]->texto }}
                                            @else
                                                {{ $elements[26]->texto }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-11 mx-auto py-5">
            <div class="row">
                <div class="certificaciones">

                    @foreach ($certificaciones as $cer)
                    <div>
                        <div class="card border-0">
                            <div class="col-6 mx-auto">
                                <img src="{{ asset('img/design/nosotros/certificado.png') }}" alt="" class="img-fluid certifi">
                            </div>
                            <div class="card-body">
                                <div class="col-12 text-center fw-bolder">
                                    {{ $cer->titulo }}
                                </div>
                                <div class="col-12 text-center px-0"  style="line-height: 1; font-weight: 500;">
                                    @if ($leng == 'eng')
                                        {{ $cer->descripcion_en }}
                                    @else 
                                        {{ $cer->descripcion }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jsLibExtras2')
<script>
    $(document).ready(function() {

        $('.bar1, .bar2').show();

        $('.btn-toggle').click(function() {
            $('.bar1, .bar2').toggle();
        });
    });
</script>

<script>
    $('.tiempo').slick({
        dots: false,
        arrows: false, 
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1224,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false
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
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
    });
</script>
<script>
    $('.certificaciones').slick({
        dots: false,
        arrows: false, 
        infinite: false,
        speed: 300,
        slidesToShow: 7,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
    });
</script>
@endsection
