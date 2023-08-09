@extends('layouts.front')

@section('title', (($leng == 'eng') ? "Products" : "Productos"))

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!-- Biblioteca de Isotope -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.min.css">
@endsection

@section('styleExtras')
<style>
    input[type="radio"] {
         appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        display: none;
    }
</style>
<style>
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
        .img_producto {
            height: 280px;
        }

    }

    /* xl */
    @media (min-width: 1200px) and (max-width: 1400px) {
        .img_producto {
            height: 240px;
        }

    }

    /* lg */
    @media (min-width: 992px) and (max-width: 1200px) {
        .img_producto {
            height: 210px;
        }

    }

    /* md */
    @media (min-width: 768px) and (max-width: 992px) {
        .img_producto {
            height: 190px;
        }

    }

    /* sm */
    @media (min-width: 576px) and (max-width: 768px) {
        .img_producto {
            height: 180px;
        }

    }

    /* xs */
    @media (min-width: 0px) and (max-width: 576px) {
        .img_producto {
            height: 160px;
        }

    }
</style>
@endsection

@section('content')

<div class="container-fluid" style="background-color: #1E4A89;">
	<div class="row">
		<div class="col-12 px-5 position-relative mx-auto mt-5" >
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
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-11 col-11 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-0 mx-sm-auto mx-xs-auto mx-auto py-xxl-3 py-xl-3 py-lg-3 py-md-0 py-sm-0 py-xs-0 px-xxl-0 px-xl-0 px-lg-0 px-md-0 px-sm-0 px-xs-3 px-3 bar2">
                    <div class="row fondo-bar-sm">
                        <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-xs-center text-center py-1">
                            <ul class="row" style="list-style-type: none; padding-left: 0;">
                                @if ($leng == 'eng')
                                <li class="dropdown col-lg-8 col-md-12 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-xs-center text-center mt-2" style="list-style-type: none; padding-left: 0;">        
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
                                <li class="dropdown col-lg-8 col-md-12 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-xs-center text-center mt-2" style="list-style-type: none; padding-left: 0;">        
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
                                            <li class="dropdown-item"><a href="{{ route('user.register', ['leng' => 'esp']) }}" style="text-decoration: none;">Ingresar</a></li>
                                        </ul>
                                    @endif  
                                </li>
                                @endif
                                <li class="col-lg-4 col-md-12 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-xs-center text-center mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-2 mt-sm-2 mt-xs-2 mt-2" style="list-style-type: none; padding-left: 0;">
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
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('front.productos', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('front.productos', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="col-12 px-5 mx-auto">
    <div class="row px-xxl-5 px-xl-4 px-lg-1 px-md-1 px-sm-0 px-xs-1 px-1 py-4" style="background-color: #3378C6;">
    
        <div class="col-xxl-3 col-xl-3 col-lg-12 col-md-11 col-sm-11 col-xs-11 col-11 mx-auto mt-3">
            <div class="row">
                <div class="col-xxl-1 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 "></div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-11 col-xs-11 mx-auto text-white" >
                    
                    @if ($leng == 'eng')
                        {{ $elements[30]->texto }}
                    @else 
                        {{ $elements[8]->texto }}
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-9 col-sm-11 col-xs-11 mx-auto py-4 text-center ">
                    @if ($leng == 'eng')
                        <a href="#" onclick="location.reload()" style="text-decoration: none; color: #FFF;">
                            <div class="btn btn-outline px-5 py-2 text-white boton-productos">
                                See All
                            </div>
                        </a>
                    @else 
                        <a href="#" onclick="location.reload()" style="text-decoration: none; color: #FFF;">
                            <div class="btn btn-outline px-5 py-2 text-white boton-productos">
                                Ver Productos
                            </div>
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-12 col-md-11 col-sm-12 col-xs-12 col-12 mx-auto">
           
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
                                                        @if ($leng == 'eng')
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

<div class="container-fluid px-0">
    <div class="row">
        <div class="col bg-white py-5">
            <div class="row">
                <div class="col-10 px-4 py-2 mx-auto display-2" style="color: #1E4A89;">
                    @if ($leng == 'eng')
                        Products
                    @else 
                        Productos
                    @endif
                </div>
            </div>
            <div class="row mb-5 py-5 ">
                <div class="col-1"></div>
                <div class="col-11 position-relative mx-auto">
                    <div class="js-filter">

                        @if ($productosCont != 0)
                            @foreach ($productos as $p)
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-10 col-sm-10 col-xs-10 col-10 columna_productos dato-cat categoria{{ $p->categoria }}">
                                <div class="row">
                                    <div class="col-11 fw-bolder py-3 mx-auto" style="font-size: 14px;">
                                        @foreach ($categorias as $cate_prod)
                                            @if ($cate_prod->id == $p->categoria)
                                                @if ($leng == 'eng')
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
                                                @if ($leng == 'eng')
                                                    {{ $p->nombre_en }} | ${{ $p->precio_mxn }}
                                                @else
                                                    {{ $p->nombre }} | ${{ $p->precio_mxn }}
                                                @endif
                                            </div>
                                            <div class="col-5 text-end">
                                                @if ($leng == 'eng')    
                                                    <a href="{{ route('front.productos_detalle', ['producto' => $p->id, 'leng' => 'eng']) }}" class="text-dark text-decoration-underline" style="font-size: 14px;">
                                                        See Product
                                                    </a>
                                                @else
                                                    <a href="{{ route('front.productos_detalle', ['producto' => $p->id, 'leng' => 'esp']) }}" class="text-dark text-decoration-underline" style="font-size: 14px;">
                                                        Ver Producto
                                                    </a>
                                                @endif
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            @endforeach
                        @else 
                            @if ($leng == 'eng')
                                <h2>There are not products avaible</h2>
                            @else
                                <h2>No hay productos disponibles</h2>
                            @endif
                        @endif
                        
                        
                             
                            
                              
                    
                  
                    </div>
                    <div class="row js-filter oculta" style="display: none;">
                        <div class="col-md-12">
                            <!-- Contenido de la columna oculta -->
                            <div class="row">
                                <div class="col-9 mx-auto text-center display-5">
                                    @if ($leng == 'eng')
                                        There are not products avaible
                                    @else
                                        No hay productos disponibles dentro de esta categoría.
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


@endsection

@section('jqueryExtra')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script>
        
            window.addEventListener('load', function() {
                var button = document.getElementById('cate1');
                button.click();
            });

    </script>
    <script>
        $('.categorias_productos').slick({
            autoplay: false,
            dots: true,
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
                    dots: true
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });
    </script>
    <script>
         $('.productos').slick({
            autoplay: false,
            dots: true,
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
                    slidesPerRow: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 500,
                settings: {
                    rows: 2,
                    slidesPerRow: 1
                }
            },
            
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
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
    $(document).ready(function() {
        var $grid = $('.js-filter').isotope({
            itemSelector: '.dato-cat',
            layoutMode: 'fitRows'
        });

        $('.filter-group').on('click', '.filter-option', function(e) {
            e.preventDefault();
            var filterValue = $(this).data('filter');
            var $filteredItems = $grid.find(filterValue);

                if ($filteredItems.length === 0) {
                    $('.oculta').show();
                } else {
                    $('.oculta').hide();
                }
            $grid.isotope({ filter: filterValue });
        });
    });
</script>
@endsection



