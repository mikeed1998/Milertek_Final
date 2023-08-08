@extends('layouts.front')

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
                            <a class="text-white " href="{{ route('user.login', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('user.login', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>

<div class="container">
	<div class="row justify-content-center py-5">

		<div class="col-md-5 mb-5">
			<div class="card mb-5 py-5 px-4" style="border-radius:26px; box-shadow:1px 1px 10px rgba(0, 0, 0, 0.119); border:none;">
				<div class="row">
					<div class="col-12">
						<div class="card-body">
							<h5 class="card-title text-center">{{ ($leng == 'eng') ? __('Login') :  __('Iniciar Sesión') }}</h5>
							<form method="POST" action="{{ route('user.signin', ['leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}">
								@csrf
								<div class="form-group mb-2">
									<label for="email" class="text-md-right">{{ ($leng == 'eng') ? __('Email') :  __('Correo') }}</label>
									<div class="">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" style="box-shadow: none;" value="{{ old('email') }}" required autocomplete="email" autofocus>

										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>

								<div class="form-group">
									<label for="password" class="text-md-right">{{ ($leng == 'eng') ? __('Password') :  __('Contraseña') }}</label>
									<div class="">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" style="box-shadow: none;" name="password" required autocomplete="current-password">
										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>

								<div class="form-group row mb-0">
									<div class="d-flex justify-content-center text-center flex-column">
										<button type="submit" class="btn btn-primary col-12 my-3" style="background-color: #3378C6; border-radius: 16px; border:none;">
											{{ ($leng == 'eng') ? __('Sign In') :  __('Entrar') }}
										</button>
										{{-- @if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}" style="color: black;">
											{{ __('¿Olvidaste tu contraseña?') }}
										</a>
										@endif --}}
									</div>
								</div>
							</form>

							<p class="card-text text-center">
								@if ($leng == 'eng')
                                    <a href="{{ route('user.register', ['leng' => 'eng']) }}" class="btn btn-sm btn-primary px-4 py-1" style="background-color: #3378C6; border-radius: 16px; border:none;">
						    			{{ __('Signup here') }}
					    			</a>
                                @else 
                                    <a href="{{ route('user.register', ['leng' => 'esp']) }}" class="btn btn-sm btn-primary px-4 py-1" style="background-color: #3378C6; border-radius: 16px; border:none;">
			    						{{ __('Regístrate aquí') }}
		    						</a>
                                @endif
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection