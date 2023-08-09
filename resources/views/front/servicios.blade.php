@extends('layouts.front')

@section('title', (($leng == 'eng') ? "Services" : "Servicios"))

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('styleExtras')
<style>
	/*  Píxeles	REM
		1px	0.06rem */
	/*  REM	Píxeles
		0.01rem	0.16px */

	.scale-up {
		transition: transform 0.3s ease-in-out;
	}

	.scale-up:hover {
		transform: scale(1.05);
	}

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

	/* Para navegadores WebKit */
	.scroll-1::-webkit-scrollbar {
		width: 12px; /* Cambia el ancho de la barra de desplazamiento */
		background-color: transparent; /* Establece el fondo de la barra de desplazamiento como transparente */
	}

	.scroll-1::-webkit-scrollbar-thumb {
		background-color: transparent; /* Establece el color del pulgar de la barra de desplazamiento como transparente */
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
		.slider_pri-img {
			height: 55rem; 
		}

		.img-servicio {
			border-top-left-radius: 6px;
			border-bottom-left-radius: 6px;
			height: 264px;
		}

		.card-text-servicio {
			line-height: 1;
			max-height: 100px;
			overflow: auto;
		}

	}

	/* xl */
	@media (min-width: 1200px) and (max-width: 1400px) {
		.slider_pri-img {
			height: 55rem; 
		}

		.img-servicio {
			border-top-left-radius: 6px;
			border-bottom-left-radius: 6px;
			height: 274px;
		}

		.card-text-servicio {
			line-height: 1;
			max-height: 110px;
			overflow: auto;
		}

	}

	/* lg */
	@media (min-width: 992px) and (max-width: 1200px) {
		.slider_pri-img {
			height: 44rem; 
		}

		.img-servicio {
			border-top-left-radius: 6px;
			border-bottom-left-radius: 6px;
			height: 264px;
		}

		.card-text-servicio {
			line-height: 1;
			max-height: 100px;
			overflow: auto;
		}

	}

	/* md */
	@media (min-width: 768px) and (max-width: 992px) {
		.slider_pri-img {
			height: 34rem; 
		}
		
		.img-servicio {
			border-top-left-radius: 6px;
			border-bottom-left-radius: 6px;
			height: 260px;
		}

		.card-text-servicio {
			line-height: 1;
			max-height: 100px;
			overflow: auto;
		}
	}

	/* sm */
	@media (min-width: 576px) and (max-width: 768px) {
		.slider_pri-img {
			height: 27rem; 
		}

		.img-servicio {
			border-top-left-radius: 6px;
			border-top-right-radius: 6px;
			height: 212px;
		}

		.card-text-servicio {
			line-height: 1;
			max-height: 58px;
			overflow: auto;
		}

		.fondo-bar-sm {
			background-color: #1E4A89;
		}

	}

	/* xs */
	@media (min-width: 0px) and (max-width: 576px) {
		.slider_pri-img {
			height: 24rem; 
		}

		.img-servicio {
			border-top-left-radius: 6px;
			border-top-right-radius: 6px;
			height: 260px;
		}

		.card-text-servicio {
			line-height: 1;
			max-height: 110px;
			overflow: auto;
		}

		.fondo-bar-sm {
			background-color: #1E4A89;
		}

	}
</style>

@endsection

@section('content')
<div class="container-fluid" style="background-color: #1E4A89;">
	<div class="row">
		<div class="col position-relative mx-auto mt-5">
			<div class="row">
				<div class="col-12 px-5">
					<div class="row">
						<div class="col px-0 position-relative">
							<div class="slider_pri-img" style="
								background-image: url('{{ asset('img/design/servicios/slider.png') }}');
								background-repeat: no-repeat;
								background-size: cover;
								background-position: center center;
								width: 100%;
								box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.6);
							"></div>
							<div class="col-xxl-6 col-xl-8 col-lg-9 col-md-10 col-sm-12 col-xs-12 position-absolute py-1 px-0 top-50 start-0">
								<div class="row">
									<div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-11 col-xs-11 mx-2"></div>
										<div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
											<div class="row">
												<div class="col display-1 scroll-1 text-white" style="overflow: auto; max-height: 90px;">
													@if ($leng == 'eng')
														{{ $elements['31']->texto }}
													@else 
														{{ $elements['9']->texto }}
													@endif
												</div>
											</div>
											<div class="row mt-3">
												<div class="col text-white scroll-1" style="overflow: auto; max-height: 70px;">
													@if ($leng == 'eng')
														{{ $elements['32']->texto }}
													@else 
														{{ $elements['10']->texto }}
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
			<div class="col-12 position-absolute top-0 start-0 mt-5 mb-5 px-xxl-5 px-xl-5 px-lg-5 px-md-5 px-sm-5 px-xs-5" style="z-index: 999;">
				<div class="row py-3 px-xxl-0 px-xl-0 px-lg-3 px-md-0 px-sm-0 px-xs-0">
					<div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-sm-12 col-xs-12 
					 text-center
						mx-auto mt-xxl-2 mt-xl-1 mt-lg-4 mt-md-0 mt-sm-0 mt-xs-0">
						<img src="{{ asset('img/design/inicio/Logo.png') }}" alt="logo" class="img-fluid">
					</div>
					<div class="col-2 mx-auto text-center cont-btn">
						<button class="btn btn-block text-white bg-transparent btn-toggle"><span uk-icon="icon: menu;"></span></button>
					</div>
					<div class="col-xxl-6 col-xl-6 col-lg-7 col-md-12 col-sm-12 col-xs-12 py-xxl-4 py-xl-4 py-lg-4 py-md-0 py-sm-0 py-xs-0 bar1">
						<div class="row fondo-bar-sm">
							<div class="col-xxl-3 col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
							
							</div>
							<div class="col-xxl-9 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 
									 
										text-white 
										mx-auto py-1 
										text-center 
									">
										@if ($leng == 'eng')
											<a href="{{ route('front.index', ['leng' => 'eng']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
												HOME
											</a>
										@else 
											<a href="{{ route('front.index', ['leng' => 'eng']) }}" style="text-decoration: none; font-size: 12px;" class="link-nav">
												INICIO
											</a>
										@endif
									</div>
									<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 
									 
										text-white 
										mx-auto py-1 
										text-center 
									">
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
									<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 
									 
										text-white 
										mx-auto py-1 
										text-center 
									">
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
									<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 
									 
										text-white 
										mx-auto py-1 
										text-center 
									">
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
									<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12 
									 
										text-white 
										mx-auto py-1 
										text-center 
									">
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
				<div class="col-xxl-7 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center text-xs-center text-center py-1">
		
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
				  <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
					  <a class="text-white " href="{{ route('front.servicios', ['leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
					  {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
				  </div>
				  <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12  text-center py-1">
					  <a class="text-white " href="{{ route('front.servicios', ['leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
					  {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
				  </div>
			</div>
		</div>
				</div>
			</div>
		
  

<div class="col-12 px-5" >
	<div class="row px-3 mb-5" style="background-color: #3378C6;">
		<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 fs-2 fw-bolder py-2 text-white text-center">
			@if ($leng == 'eng')
				Speciality Sectors
			@else 
				Sectores de Especialidad
			@endif
		</div>
		<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
			<span uk-icon="icon: arrow-down; ratio: 3;" style="color: #44B2E3;"></span>
		</div>
		<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">

		</div>
	</div>

	<div class="row py-5 mt-5 mb-5 bg-white">
		@if ($contServicios != 0) 
			@foreach ($servicios as $serv)
				<div class="col-xxl-9 col-xl-9 col-lg-9 col-md-11 col-sm-11 col-xs-11 col-11 mx-auto mt-5">
					<div class="card scale-up mb-3 border-0">
						<div class="row g-0">
							<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 rounded-start">
								<div class="img-servicio" style="
									background-image: url('{{ asset('img2/photos/servicios/'.$serv->foto) }}');
									background-size: cover;
									background-position: center center;
									background-repeat: no-repeat;
									width: 100%;
								"></div>
							</div>
							<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12 shadow rounded-end">
								<div class="card-body">
									<div class="row">
										<div class="col-10 mx-auto">
											<div class="row">
												<div class="col-xxl-11 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<h5 class="card-title fs-1" style="color: #1E4A89;">
														@if ($leng == 'eng')
															{{ $serv->nombre_en }}
														@else
															{{ $serv->nombre }}
														@endif
													</h5>
													<p class="card-text-servicio m-0 scroll-1" style="font-size: 14px; color: black;">
														@if ($leng == 'eng')
															{{ $serv->descripcion_en }}
														@else
															{{ $serv->descripcion }}
														@endif
													</p>
													<p class="card-text">
														<div class="row">
															<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-xs-5 col-5 mx-1 text-start fw-bolder" style="">
																@if ($leng == 'eng')
																	<a href="{{ route('front.contacto', ['leng' => 'eng']) }}" style="text-decoration: none;" class="text-dark">
																		Contact
																	</a>
																@else
																	<a href="{{ route('front.contacto', ['leng' => 'esp']) }}" style="text-decoration: none;" class="text-dark">
																		Contacto
																	</a>
																@endif	
															</div>
														</div>
														<div class="row">
															<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-4 px-0 mx-3" style="border-bottom: 4px solid #44B2E3;"></div>
														</div>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		@else
			<h1>No hay servicios disponibles</h1>
		@endif
		

		
	</div>
</div>

<div class="col-12 px-5">
@endsection

@section('jqueryExtra')


@endsection



