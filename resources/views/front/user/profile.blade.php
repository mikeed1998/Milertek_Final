@extends('layouts.front')

@section('cssExtras')
@endsection

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
                            <a class="text-white " href="{{ route('user.profile', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('user.profile', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>



<div class="container-fluid mt-5 mb-5 py-5 bg-white">
    @if (Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link fs-1 active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">
                {{ ($leng == 'eng') ? 'Personal Information' : 'Información Personal' }}
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fs-1" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">
                {{ ($leng == 'eng') ? 'My Purchase History' : 'Mi historial de compras' }}
            </a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <div class="row">
                <div class="col-12 fs-1 text-center">
                    @if ($leng == 'eng')
                        My Account
                    @else 
                        Mi perfil
                    @endif
                </div>
                <div class="col-9 mx-auto fs-2">
                    @if ($leng == 'eng')
                        User data: 
                    @else
                        Datos de usuario:
                    @endif
                </div>
                <div class="col-9 mx-auto py-5">
                    <div class="row">
                        <div class="col-3 fs-5">
                            <label for="">{{ ($leng == 'eng') ? 'Name' : 'Nombre' }}</label>
                            <input type="text" class="form-control editarajax"  data-id="{{ $user->id }}" data-table="User" data-campo="name" value="{{ $user->name }}">
                        </div>
                        <div class="col-3 fs-5">
                            <label for="">{{ ($leng == 'eng') ? 'Lastname' : 'Apellidos' }}</label>
                            <input type="text" class="form-control editarajax"  data-id="{{ $user->id }}" data-table="User" data-campo="lastname" value="{{ $user->lastname }}">
                        </div>
                        <div class="col-3 fs-5">
                            <label for="">{{ ($leng == 'eng') ? 'Phone Number' : 'Número de Telefono' }}</label>
                            <input type="text" class="form-control editarajax"  data-id="{{ $user->id }}" data-table="User" data-campo="telefono" value="{{ $user->telefono }}">
                        </div>
                        <div class="col-3 fs-5">
                            <label for="">{{ ($leng == 'eng') ? 'Username' : 'Nombre de Usuario' }}</label>
                            <input type="text" class="form-control editarajax"  data-id="{{ $user->id }}" data-table="User" data-campo="username" value="{{ $user->username }}">
                        </div>
                        <div class="col-6 py-2">
                            <label for="">{{ ($leng == 'eng') ? 'Address' : 'Dirección' }}</label>
                            <input type="text" class="form-control editarajax" data-id="{{ $user->id }}" data-table="User" data-campo="address" value="{{ $user->address }}">
                        </div>
                        <div class="col-3 py-2">
                            <label for="">{{ ($leng == 'eng') ? 'Colonia' : 'Colonia' }}</label>
                            <input type="text" class="form-control editarajax" data-id="{{ $user->id }}" data-table="User" data-campo="colonia" value="{{ $user->colonia }}">
                        </div>
                        <div class="col-3 py-2">
                            <label for="">{{ ($leng == 'eng') ? 'Code' : 'Código Postal' }}</label>
                            <input type="text" class="form-control editarajax" data-id="{{ $user->id }}" data-table="User" data-campo="codigo_postal" value="{{ $user->codigo_postal }}">
                        </div>
                        <div class="col-3">
                            <label for="">{{ ($leng == 'eng') ? 'State' : 'Estado' }}</label>
                            <input type="text" class="form-control editarajax" data-id="{{ $user->id }}" data-table="User" data-campo="estado" value="{{ $user->estado }}">
                        </div>
                        <div class="col-3">
                            <label for="">{{ ($leng == 'eng') ? 'City/Town' : 'Municipio' }}</label>
                            <input type="text" class="form-control editarajax" data-id="{{ $user->id }}" data-table="User" data-campo="municipio" value="{{ $user->municipio }}">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-bottom border-dark border-4">
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <div class="row">
                <div class="col-md-9 mx-auto col-md-offset-4">
                    <h2 class="fs-1 text-center">
                        @if ($leng == 'eng')
                            Shopping history
                        @else
                            Historial de compras
                        @endif
                    </h2>
        
                    <div class="row">
                        @foreach ($orders as $order)
                        <div class="col-12 border shadow mb-5 p-5" style="border-radius: 36px">
                            <div class="row mt-5">
                                <div class="col-8 fs-5 fw-bolder ">
                                    {{ ($leng == 'eng') ? 'Porduct' : 'Producto' }}
                                </div>
                                <div class="col-2 text-center fs-5 fw-bolder ">
                                    {{ ($leng == 'eng') ? 'Units' : 'Unidades' }}
                                </div>
                                <div class="col-2 fs-5 fw-bolder ">
                                    {{ ($leng == 'eng') ? 'Single Total' : 'Total Individual' }}
                                </div>
                            </div>
                            <div class="row">
                                <hr class="border-bottom border-dark border-4">

                            @foreach ($order->cart->items as $item)
                                <div class="col-8 fs-5 fw-normal ">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <img src="{{ asset('img2/photos/productos/galeria/'.$item['item']['foto_principal']) }}" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9 mt-4">
                                            {{ $item['item']['nombre'] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 text-center fs-5 fw-normal mt-4">
                                    {{ $item['qty'] }}
                                </div>
                                <div class="col-2 fs-5 fw-normal mt-4">
                                    ${{ $item['price'] }}
                                </div>
                            @endforeach
                            <hr class="border-bottom border-dark border-4">

                            </div>
                            <div class="col-12 text-start fs-4 fw-bolder">
                                {{-- <p class="m-0 fs-4 py-2"> Total pagado: ${{ $order->cart->totalPrice }} </p>
                                <small>Fecha de la compra: {{ $order->created_at->format('d/m/Y') }}</small> --}}
                                {{ ($leng == 'eng') ? 'Total Paid' : 'Total Pagado' }}: ${{ $order->cart->totalPrice }}
                                <p class="fs-5 fw-normal">{{ ($leng == 'eng') ? 'Purchase Date' : 'Fecha de la Compra' }}: {{ $order->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                            {{-- <div class="row mt-5">
                                <div class="col-8 fs-5 fw-bolder border">
                                    {{ ($leng == 'eng') ? 'Porduct' : 'Producto' }}
                                </div>
                                <div class="col-2 text-center fs-5 fw-bolder border">
                                    {{ ($leng == 'eng') ? 'Units' : 'Unidades' }}
                                </div>
                                <div class="col-2 fs-5 fw-bolder border">
                                    {{ ($leng == 'eng') ? 'Single Total' : 'Total Individual' }}
                                </div>
                            </div>
                            <div class="row">
                            @foreach ($order->cart->items as $item)
                                <div class="col-8 fs-5 fw-normal border">
                                    {{ $item['item']['nombre'] }}
                                </div>
                                <div class="col-2 text-center fs-5 fw-normal border">
                                    {{ $item['qty'] }}
                                </div>
                                <div class="col-2 fs-5 fw-normal border">
                                    ${{ $item['price'] }}
                                </div>
                            @endforeach
                        </div>
                            <div class="col-12 py-2 text-start fs-4 fw-bolder">
                                {{ ($leng == 'eng') ? 'Total Paid' : 'Total Pagado' }}: ${{ $order->cart->totalPrice }}
                                <p class="fs-5 fw-normal">{{ ($leng == 'eng') ? 'Purchase Date' : 'Fecha de la Compra' }}: {{ $order->created_at->format('d/m/Y') }}</p>
                            </div> --}}
                        @endforeach
                    </div>
        
                    
                 
                    
                </div>
            </div>
            <hr class="border-bottom border-dark border-4">
        </div>
    </div>

    
    
    
</div>
@endsection

@section('jsLibExtras2')
@endsection
