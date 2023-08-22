@extends('layouts.front')

@section('title', 'Pagar (Conekta)')

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
                            <a class="text-white " href="{{ route('getcheckoutConekta', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('getcheckoutConekta', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>


@if($user->name != '' and $user->lastname != '' and $user->username != '' and $user->telefono != '')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col text-center text-white display-5 fw-bolder py-3">{{ ($leng == 'eng') ? 'Checkout' : 'Finalizar compra' }}</div>
    </div>
	<div class="row">
        <div class="col-6 bg-white p-5 mx-auto" style="border: 2px solid black; border-radius: 16px;">
            <form action="{{ route('postcheckoutConekta', ['leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" method="POST" id="card-form">
                @csrf
        
                <div class="form-group row">
                    <div class="col-9">
                        
                        <img src="https://uploads-ssl.webflow.com/60ba7edb928ca1af6fd7612e/621e7b30da832e994d0200a7_Conekta_Imagotipo_Color-01.svg" alt="">
                        
                        <span class="card-errors"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col fs-5 fw-bolder">{{ ($leng == 'eng') ? 'Total Purchase' : 'Total de la compra' }} ${{ $total }}</div>
                </div>
                <div class="form-group row">
                    <div class="mt-3 col">
                        <label for="" class="fs-5">{{ ($leng == 'eng') ? 'Name' : 'Nombre' }}</label>
                        <input class="form-control fs-5 border-0 border-bottom border-dark" size="20" data-conekta="card[name]" type="text" placeholder="{{ ($leng == 'eng') ? 'Cardholder Name' : 'Nombre del tarjetahambient' }}" style="box-shadow: none;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="mt-3 col">
                        <label for="" class="fs-5">{{ ($leng == 'eng') ? 'Card Number' : 'Número de tarjeta' }}</label>
                        <input class="form-control fs-5 border-0 border-bottom border-dark" size="20" data-conekta="card[number]" type="text" placeholder="{{ ($leng == 'eng') ? 'Credit Card Number    ' : 'Número de tarjeta de crédito' }}" style="box-shadow: none;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="mt-3 col-2">
                        <label for="" class="fs-5">CVC</label>
                        <input class="form-control fs-5 border-0 border-bottom border-dark" maxlength="4" data-conekta="card[cvc]" type="text" placeholder="CVC" style="box-shadow: none;">
                    </div>
                    <div class="mt-3 col-2">
                        <label for="" class="fs-5">{{ ($leng == 'eng') ? 'Month' : 'Mes' }}</label>
                        <input maxlength="2" data-conekta="card[exp_month]" type="text" class="form-control fs-5 border-0 border-bottom border-dark" placeholder="MM" style="box-shadow: none;">
                    </div>
                    <div class="mt-3 col-2">
                        <label for="" class="fs-5">{{ ($leng == 'eng') ? 'Year' : 'Año' }}</label>
                        <input  maxlength="4" data-conekta="card[exp_year]" type="text" class="form-control fs-5 border-0 border-bottom border-dark" placeholder="AAAA" style="box-shadow: none;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="mt-4 col-5 fs-5 text-center">
                        <button class="btn w-100 btn-outline text-white fw-bolder fs-5" type="submit" style="background-color: #00AD61; box-shadow: none;">{{ ($leng == 'eng') ? 'Finish Payment' : 'Finalizar Pago' }}</button>
                    </div>
                </div>
        
                  
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
                
            </form>
        </div>
    </div>
</div>

@else 
    <div class="container bg-danger py-5" style="border-radius: 26px;">
        <div class="row py-5">
            <div class="col text-center text-white display-5 py-5">
                {{ ($leng == 'eng') ? 'You cannot complete the payment because your profile data is not complete' : 'No puedes completar el pago debido a que tus datos de perfil no estan completos' }}
            </div>
        </div>
    </div>
@endif

@endsection

@section('jqueryExtra')
    <script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
    <script type="text/javascript" >
        // Conekta.setPublicKey('key_Cf6xwVgweFHiqVvzixk5VEQ');
        Conekta.setPublicKey('key_Nd9OEqq52Cb3jDrzzGodG1Y');
        
      
        var conektaSuccessResponseHandler = function(token) {
          var $form = $("#card-form");
          //Inserta el token_id en la forma para que se envíe al servidor
           $form.append($('<input name="conektaTokenId" id="conektaTokenId" type="hidden">').val(token.id));
          $form.get(0).submit(); //Hace submit
        };
        var conektaErrorResponseHandler = function(response) {
          var $form = $("#card-form");
          $form.find(".card-errors").text(response.message_to_purchaser);
          $form.find("button").prop("disabled", false);
        };
      
        //jQuery para que genere el token después de dar click en submit
        $(function () {
          $("#card-form").submit(function(event) {
            var $form = $(this);
            // Previene hacer submit más de una vez
            $form.find("button").prop("disabled", true);
            Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
            return false;
          });
        });
      </script>
@endsection
