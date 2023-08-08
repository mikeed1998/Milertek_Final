

@extends('layouts.front')

@section('content')
<style>
		.error_p{
		border-color:red;
	}
	.success_p{
		border-color:green;
	}
	.form-control:focus{
		border-color:none !important;
		box-shadow:none;
	}
</style>

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
                            <a class="text-white " href="{{ route('user.register', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('user.register', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>


	<div class="container my-5">
		<div class="col-12 mt-5 d-flex justify-content-center align-items-center">
			<div class="container">
		
				<div class="col-12 bg-white d-flex flex-column flex-md-row my-5 my-md-0" style=" min-height:700px; box-shadow:1px 1px 10px rgba(0, 0, 0, 0.237); border-radius:26px;">
					<form method="POST" action="{{ route('user.signup', ['leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" class="col-12 col-md-7  d-flex justify-content-center align-items-center" style="background:;">
						@csrf
						<div class="col-12 p-4 bg-white d-flex justify-content-center align-items-center flex-column text-center">
							<h4 class="mb-5">
                                @if ($leng == 'eng')
                                    Sign Up
                                @else
                                    Registrate
                                @endif
                            </h4>
							<div class="input_b col-12 col-md-10 col-lg-7 mb-3">
							<input type="text" class="form-control @error('name') is-invalid @enderror" id="registrodeusuarios" name="name" placeholder="{{ ($leng == 'eng') ? 'Name' : 'Nombre' }}" style="border-radius:10px; box-shadow: none;" required autocomplete="name" autofocus required>
							</div>
							<div class="input_b col-12 col-md-10 col-lg-7 mb-3">
								<input type="text" class="form-control @error('lastname') is-invalid @enderror" id="registrodeusuarios" name="lastname" placeholder="{{ ($leng == 'eng') ? 'Apellido' : 'Lastname' }}" style="border-radius:10px;" required autocomplete="lastname" autofocus required>
								</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3">
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Example@email.com" style="border-radius:10px;" required>
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
							</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3 ">
							<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="{{ ($leng == 'eng') ? 'Password' : 'Contraseña' }}" style="border-radius:10px;" required autocomplete="email">
							<p id="msj_error" class="mb-0 mt-1" style="color:red; display:none;">Contraseña bastante corta</p>
							</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3">
							<input type="password" class="form-control" id="password_verify" placeholder="{{ ($leng == 'eng') ? 'Confirm Passwrod' : 'Confirma Contraseña' }}" name="password_confirmation" style="border-radius:10px;" required autocomplete="new-password" disabled>
							<p id="msj_error2" class="mb-0 mt-1" style="color:red; display:none;">La contraseña no coincide</p>
							</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3 d-flex justify-content-center align-items-center flex-column">
								<button type="submit" id="register_btn" class="col-12 btn btn-primary" style="border-radius:10px; background-color: #3378C6; border:none;" >{{ ($leng == 'eng') ? 'Sign Up' : 'Registrarse' }}</button>
							</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3">
								<p>{{ ($leng == 'eng') ? 'I have an account' : 'Ya tengo una cuenta' }} <a href="{{ route('user.login', ['leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" class="" uk-toggle>{{ ($leng == 'eng') ? 'Sign In' : 'Ingresar' }}</a></p>
							</div>
						</div>
					</form>
					<div class="col-12 col-md-5 d-flex justify-content-center align-items-center" style="background-color: #3378C6; border-top-right-radius: 26px; border-bottom-right-radius:26px;">
						<div class="col-12 p-4 d-flex justify-content-center align-items-center flex-column text-center">
						<img src="{{asset('img/front/design/LogoBlanco.png')}}" class="mb-3" style="width:250px" alt="">	
						<h6 class="mb-3" style="color:white;">
                            @if ($leng == 'eng')
                                Nice to see you
                            @else
                                Encantado de verte
                            @endif
                        </h6>
						<p class="mb-3 px-5" style="color:white; font-size: 12px;">
                            @if ($leng == 'eng')
                                Complete the form to register and have access to our selection of articles.
                            @else
                                Completa el formulario para registrarte y tener acceso a nuestra selección de artículos.
                            @endif
                        </p>
						</div>
					</div>
				</div>
		
		
			</div>
		</div>

		<script>	$("#password").change(function() {
			var pass  = $("#password").val();
			var len   = (pass).length;
	
			if(len>6){
				$('#password').addClass("success_p");
				$('#password').removeClass("error_p");
				document.getElementById('msj_error').style.display = 'none';
			}else{
				if(len>0){
				$('#password').addClass("error_p");
				$('#password').removeClass("success_p");
				document.getElementById('msj_error').style.display = 'block';
				}else{
					$('#password').removeClass("success_p");
					$('#password').removeClass("error_p");
					document.getElementById('msj_error').style.display = 'none';
				}
				
				
			}
		});
	
		$("#password_verify").change(function() {
			var pass1  = $("#password").val();
			var pass  = $("#password_verify").val();
			var len   = (pass).length;
	
			if(len>6 && pass1 == pass){
				$('#password_verify').addClass("success_p");
				$('#password_verify').removeClass("error_p");
				document.getElementById('msj_error2').style.display = 'none';
				$('#register_btn').removeAttr('disabled');
			}else{
				if(len>0){
				$('#password_verify').addClass("error_p");
				$('#password_verify').removeClass("success_p");
				document.getElementById('msj_error2').style.display = 'block';
				}else{
					$('#password_verify').removeClass("success_p");
					$('#password_verify').removeClass("error_p");
					document.getElementById('msj_error2').style.display = 'none';
				}
				$('#register_btn').prop('disabled', true);
	
				
			}
		});
        </script>
	</div>
@endsection