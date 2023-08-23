@extends('layouts.front')

@section('title', 'Carrito de compras')

@section('styleExtras')

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
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-11 col-11 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-0 mx-sm-auto mx-xs-auto mx-auto py-xxl-3 py-xl-3 py-lg-3 py-md-0 py-sm-0 py-xs-0 px-xxl-0 px-xl-0 px-lg-0 px-md-0 px-sm-0 px-xs-3 px-3 bar2">
                    <div class="row fondo-bar-sm">
                        <div class="col-xxl-7 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-xs-center text-center py-1">
                            <ul class="row" style="list-style-type: none; padding-left: 0;">
                                @if ($leng == 'eng')
                                <li class="dropdown col-lg-8 col-md-12 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-xs-center text-center  mt-2" style="list-style-type: none; padding-left: 0;">        
                                    @if (Auth::check())
                                    <a href="#" class="dropdown-toggle text-white fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                        @if (Auth::user()->username != '')
											{{ Auth::user()->username}}
										@else
											{{ Auth::user()->name}}
										@endif
                                    </a>
                                    @else
                                    <a href="#" class="dropdown-toggle text-white fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                        @if ($leng == 'eng')
                                            Account
                                        @else
                                            Cuenta
                                        @endif
                                    </a>
                                    @endif
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
                                <li class="dropdown col-lg-8 col-md-12 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-xs-center text-center  mt-2" style="list-style-type: none; padding-left: 0;">        
                                    {{-- <a href="#" class="dropdown-toggle text-white fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">Cuenta</a> --}}
                                    @if (Auth::check())
                                    <a href="#" class="dropdown-toggle text-white fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                        @if (Auth::user()->username != '')
											{{ Auth::user()->username}}
										@else
											{{ Auth::user()->name}}
										@endif
                                    </a>
                                    @else
                                    <a href="#" class="dropdown-toggle text-white fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                        @if ($leng == 'eng')
                                            Account
                                        @else
                                            Cuenta
                                        @endif
                                    </a>
                                    @endif
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
                                <li class="col-lg-4 col-md-12 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center text-xs-center text-center  mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-2 mt-sm-2 mt-xs-2 mt-2" style="list-style-type: none; padding-left: 0;">
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
                            <a class="text-white " href="{{ route('shoppingCart', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('shoppingCart', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>




@if (Session::has('cart'))
{{-- <div class="row mt-5 py-5 bg-white">
    <div class="col fs-1 text-center">
        @if ($leng == 'eng')
            My shopping cart
        @else
            Mi carrrito de compras
        @endif
    </div>
</div> --}}




<div class="row bg-white">
    <section class="py-5" style="background-color: rgba(51, 120, 198, 0.22);">
        <div class="container py-0">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-10">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 fs-1 text-black">@if ($leng == 'eng')
                            My shopping cart
                        @else
                            Mi carrrito de compras
                        @endif</h3>
                    <div>
                </div>
            </div>
            @foreach ($products as $prod)
                <div class="card mb-3" style="background-color: rgba(51, 120, 198, .7); border-radius: 36px;">
                    <div class="card-body m-0">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="{{ asset('img2/photos/productos/galeria/'.$prod['item']['foto_principal']) }}" class="img-fluid rounded-3">
                            </div>
                            <div class="col-md-4 col-lg-4 col-xl-4">
                                <p class="lead fw-bolder mb-2 text-white">
                                    {{ ($leng == 'eng') ? $prod['item']['nombre_en'] : $prod['item']['nombre'] }}
                                </p>
                                <p class="text-white">
                                    {{ ($leng == 'eng') ? 'Amount: ' : 'Cantidad: ' }} {{ $prod['qty'] }}
                                </p>
                            </div> 
                            <div class="col-md-1 col-lg-1 col-xl-1 offset-lg-1">
                                <h5 class="mb-0 text-white fw-bold">${{ $prod['price'] }}</h5>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3 d-flex">
                                <div class="row">
                                <div class="col-12 py-1">
                                        <a href="{{ route('addToCart', ['id' => $prod['item']['id'], 'leng' => ($leng == 'eng') ? 'eng' : 'esp', 'pag' => 'shopping']) }}" class="btn w-100 btn-sm btn-small bg-dark text-white" style="border-radius: 16px;">{{ ($leng == 'eng') ? 'Add One' : 'Agregar uno' }}</a>
                                    </div>
                                    <div class="col-12 py-1">
                                        <a href="{{ route('reduceByOne', ['id' => $prod['item']['id'], 'leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" class="btn w-100 btn-sm btn-small bg-dark text-white" style="border-radius: 16px;">{{ ($leng == 'eng') ? 'Remove One' : 'Quitar uno' }}</a>
                                    </div>
                                    <div class="col-12 py-1">
                                        <a href="{{ route('remove', ['id' => $prod['item']['id'], 'leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" class="btn w-100 btn-sm btn-small bg-danger text-white" style="border-radius: 16px;">{{ ($leng == 'eng') ? 'Remove All' : 'Quitar Totos' }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="card mt-1 mb-1" style="background-color: rgba(51, 120, 198, .7); border-radius: 36px;">
                <div class="card-body text-white">
                    <strong>
                        @if ($leng == 'eng')
                Total of all products: {{ $totalPrice }}
            @else
                Total de todos los productos: {{ $totalPrice }}
            @endif
                    </strong>
                </div>
            </div>
            <div class="card bg-transparent border-0 mt-3">
                <div class="card-body">
                    <a href="{{ route('getcheckoutConekta', ['leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" type="button" class="btn btn-md fs-5 fw-bolder text-white fw-bolder" style="background-color: #1E4A89; text-decoration: none; border-radius: 16px;">
                        {{ ($leng == 'eng') ? 'Proceed with the payment' : 'Proceder con el pago' }}
                    </a>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>













{{--  

<div class="row bg-white">
    <div class="col-sm-9 col-md-9 mx-auto col-md-offset-3 col-sm-offset-3">

        <div class="row fs-5 fw-bolder border">
            <div class="col-1 border">
                {{ ($leng == 'eng') ? 'Amount' : 'Cantidad' }}
            </div>
            <div class="col-5 border">
                {{ ($leng == 'eng') ? 'Product' : 'Producto' }}
            </div>
            <div class="col-3 border">
                {{ ($leng == 'eng') ? 'Total by products' : 'Total por productos' }}
            </div>
            <div class="col-3 border">
                {{ ($leng == 'eng') ? 'Actions' : 'Acciones' }}
            </div>
        </div>
        <div class="row fs-5">
            @foreach ($products as $product)
                <div class="col-1 border">
                    {{ $product['qty'] }}
                </div>
                <div class="col-5 border">
                    {{ $product['item']['nombre'] }}
                </div>
                <div class="col-3 border">
                    {{ $product['price'] }}
                </div>
                <div class="col-3 border">
                    <a href="{{ route('reduceByOne', ['id' => $product['item']['id'], 'leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" class="btn btn-small bg-dark fs-5 text-white">{{ ($leng == 'eng') ? 'Remove One' : 'Quitar uno' }}</a>
                    <a href="{{ route('remove', ['id' => $product['item']['id'], 'leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" class="btn btn-small bg-danger fs-5 text-white">{{ ($leng == 'eng') ? 'Remove All' : 'Quitar Totos' }}</a>
                </div>
            @endforeach
        </div>

      
    </div>
</div>


<div class="row bg-white">
    <div class="col-sm-9 col-md-9 mx-auto col-md-offset-3 col-sm-offset-3 fs-4">
        <strong>
            @if ($leng == 'eng')
                Total of all products: {{ $totalPrice }}
            @else
                Total de todos los productos: {{ $totalPrice }}
            @endif
        </strong>
    </div>
</div>
<div class="row bg-white mb-5 pb-5">
    <div class="col-sm-9 col-md-9 mx-auto col-md-offset-3 col-sm-offset-3 text-center">
        <a href="{{ route('getcheckoutConekta', ['leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" type="button" class="btn btn-success fs-5 fw-bolder" style="text-decoration: none;">
            {{ ($leng == 'eng') ? 'Proceed with the payment' : 'Proceder con el pago' }}
        </a>
    </div>
</div> --}}
@else
<div class="row bg-white">
    <div class="col-sm-12 mt-5 mb-5 py-5 col-md-12 col-md-offset-3 col-sm-offset-3 fs-5 text-center">
        <h2>
            @if ($leng == 'eng')
                There are no products in the shopping cart
            @else
                No hay productos en el carrito de compras
            @endif
        </h2>
    </div>
</div>
@endif
@endsection

@section('jqueryExtra')

@endsection
