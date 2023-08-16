@extends('layouts.front')

@section('title')

@endsection

@section('styleExtras')
<style>
	.slide-imagen {
		border: 2px solid #44B2E5;
		margin-left: 15px; 
		margin-right: 5px; 
		margin-top: 5px;
		margin-bottom: 5px;
		border-radius: 6px;
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
	@media (min-width: 1600px) {
		.img_producto {
			height: 280px;
		}

		.img-producto {
			height: 120px;
			width: 90px;
		}

		.img-sub {
			height: 120px;
		}

	}

	@media (min-width: 1400px) and (max-width: 1600px) {
		.img_producto {
			height: 280px;
		}

		.img-producto {
			margin-left: -10px;
			height: 120px;
			width: 90px;
		}

		.img-sub {
			height: 80px;
		}

	}

	/* xl */
	@media (min-width: 1200px) and (max-width: 1400px) {
		.img_producto {
			height: 240px;
		}

		.img-producto {
			margin-left: -5px;
			height: 120px;
			width: 90px;
		}

		.img-sub {
			height: 80px;
		}

	}

	/* lg */
	@media (min-width: 992px) and (max-width: 1200px) {
		.img_producto {
			height: 210px;
		}

		.img-producto {
			height: 120px;
			width: 90px;
		}

		.img-sub {
			height: 100px;
		}

	}

	/* md */
	@media (min-width: 768px) and (max-width: 992px) {
		.img_producto {
			height: 190px;
		}

		.img-producto {
			height: 120px;
			width: 90px;
		}

		.img-sub {
			height: 100px;
		}

	}

	/* sm */
	@media (min-width: 576px) and (max-width: 768px) {
		.img_producto {
			height: 180px;
		}

		.img-producto {
			margin-left: 0px;
			height: 120px;
			width: 90px;
		}

		.img-sub {
			height: 110px;
		}

	}

	/* xs */
	@media (min-width: 0px) and (max-width: 576px) {
		.img_producto {
			height: 160px;
		}

		.img-producto {
			margin-left: 10px;
			height: 120px;
			width: 80px;
		}

		.img-sub {
			height: 80px;
		}

	}
</style>
@endsection

@section('cssExtras')

@endsection

@section('content')

<div class="container-fluid" style="background-color: #1E4A89;">
	<div class="row">
		<div class="col px-5 position-relative mx-auto mt-5" >
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
                            <a class="text-white " href="{{ route('front.productos_detalle', ['producto' => $producto->id, 'leng' => 'esp']) }}"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="es"><img src="{{ asset('img/design/inicio/mx.png') }}" alt="" class=""></button> --}}
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12  text-center py-1">
                            <a class="text-white " href="{{ route('front.productos_detalle', ['producto' => $producto->id, 'leng' => 'eng']) }}"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></a>
                            {{-- <button class="btn-idioma boton-imagen btn" data-idioma="en"><img src="{{ asset('img/design/inicio/usa.png') }}" alt="" class="img-fluid"></button> --}}
                        </div>
                    </div>
                </div>
            </div>


	<div class="row">
		<div class="col py-xxl-0 py-xl-0 py-lg-5 py-md-5 py-sm-5 py-xs-5 py-5 bg-white">
			<div class="row">
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-11 col-sm-12 col-xs-12 col-12 mx-auto py-xxl-5 py-xl-2">
					<div class="row">
						<div class="col-10 mx-auto">
							<div class="card py-2 border-0 shadow">
								<div class="slider-for py-xxl-5 py-xl-3 py-lg-3 py-md-0 py-sm-0 py-xs-0 py-0">
									
										@foreach ($galeria_fotos as $g)
											<div class="col py-0">
												<div class="imagen-products" style="
													width: 100%;
													height: 340px;
													background-image: url('{{ asset('img2/photos/productos/galeria/'.$g) }}');
													background-repeat: no-repeat;
													background-size: contain;
													background-position: center center;
													cursor: zoom-in;
													overflow: hidden;
												"></div>
												</div>
										@endforeach
										
									
								</div>
								<div class="card-body mt-1">
									<div class="row">
										<div class="slider-nav">
											@foreach ($galeria_fotos as $ga)
												<div>
													<div class='col slide-imagen'>
														<div class='row'>
															<div class='col-9 mx-auto p-2'>
																<div class='img-sub' style="
																	background-image: url('{{ asset('img2/photos/productos/galeria/'.$ga) }}');
																	background-size: contain;
																	background-position: center center;
																	background-repeat: no-repeat;
																	width: 100%;
																	
																"></div>
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
					</div>
				</div>
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto py-5">
					<div class="row">
						<div class="col-xxl-9 col-xl-10 mx-auto">
							<div class="row">
								<div class="col fw-bolder" style="color: #44B2E3;">
									@foreach ($categorias as $catt)
										@if ($catt->id == $auxC)
											@if ($leng == 'eng')
												{{ $catt->categoria_en }}
											@else
												{{ $catt->categoria }}
											@endif
											@break
										@endif
									@endforeach   
								</div>
							</div>
							<div class="row">
								<div class="col-xxl-9 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 col-12 py-3 display-3" style="line-height: 1;">
									@if ($leng == 'eng')
										{{ $producto->nombre_en }}
									@else
										{{ $producto->nombre }}
									@endif
								</div>
							</div>
							<div class="row">
								<div class="col-12 fs-5 fw-bolder">
									${{ $producto->precio_mxn }}
								</div>
							</div>
							<div class="row">
								<div class="col-xxl-11 col-xl-11 col-lg-11 col-md-12 col-sm-12 col-xs-12 col-12 fs-5 py-3" style="line-height: 1.1;">
									@if ($leng == 'eng')
										{{ $producto->descripcion_en }}
									@else
										{{ $producto->descripcion }}
									@endif
								</div>
							</div>
							<div class="row">
								<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-6 col-12 text-center py-xxl-5 py-xl-5 py-lg-5 py-md-5 py-sm-5 py-xs-5 py-2">
									<a href="{{ route('front.productos') }}" class="btn w-100 btn-outline px-5" style="border: 2px dashed #1E4A89; border-radius: 26px; color: #1E4A89;"><small>{{ ($leng == 'eng') ? "Go back" : "Regresar" }}</small></a>
								</div>
								<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-6 col-12 py-xxl-5 py-xl-5 py-lg-5 py-md-5 py-sm-5 py-xs-5 py-2">
									<a href="{{ route('addToCart', ['id' => $producto->id, 'leng' => ($leng == 'eng') ? 'eng' : 'esp']) }}" class="btn w-100 btn-outline px-4" style="border: 2px dashed #44B2E3; border-radius: 26px; color: #1E4A89;"><small>{{ ($leng == 'eng') ? "Buy Product" : "Comprar Producto" }}</small></a>
								</div>
							</div>
							<div class="row py-xxl-0 py-xl-0 py-lg-0 py-md-0 py-sm-0 py-xs-0 py-3">
								<a href="{{ asset('img2/photos/productos/ficha_tecnica/'.$producto->ficha_tecnica) }}" style="text-decoration: none;" download>
									<div class="col-xxl-11 col-xl-11 col-lg-11 col-md-10 col-sm-12 col-xs-12 col-12 px-3 py-3" style="background-color: #3378C6; border-radius: 12px;">
										<div class="row">
											<div class="col-2 text-center">
												<img src="{{ asset('img/design/detalle/pdf.png') }}" alt="" class="img-fluid">
											</div>
											<div class="col-10 mt-0 fs-3 text-white">
												@if ($leng == "eng")
													Download DataSheet
												@else 
													Descargar Ficha Técnica
												@endif
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 py-1 bg-light display-2" style="color: #1E4A89;">
					<div class="row">
						<div class="col-11 mx-auto">
							@if ($leng == 'eng')
								Characteristics
							@else 
								Características
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-5 text-center">
				@if ($leng == 'eng')
					@foreach ($caraArray_en as $cac_en)				
						<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 py-4" style="border-bottom: 2px dashed black;">
							<div class="fw-bolder py-4">{{ $cac_en}}</div>
						</div>	
					@endforeach
				@else 
					@foreach ($caraArray as $cac)				
						<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 py-4" style="border-bottom: 2px dashed black;">
							<div class="fw-bolder py-4">{{ $cac}}</div>
						</div>	
					@endforeach
				@endif
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col py-3">
			<div class="row">
				<div class="col-xxl-11 col-xl-11 col-lg-11 col-md-11 col-sm-9 col-xs-9 col-12 px-4 py-3 mx-auto display-2 text-white">
					@if ($leng == 'eng')
						Related
					@else
						Relacionados
					@endif
				</div>
			</div>
			<div class="row mb-5 py-2">
				
				<div class="col-xxl-11 col-xl-11 col-lg-12 col-md-11 col-sm-9 col-xs-9 col-12 mx-auto position-relative">
					<div class="productos">
						
						@if ($productosCont != 0)
                            @foreach ($productos as $p)

								{{-- Que solo pertenezcan a la misma categoria y que no sea en el que estoy actualmente --}}
								@if($p->categoria == $auxC && $p->id != $producto->id)
								<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-10 col-sm-10 col-xs-10 col-10 columna_productos bg-white dato-cat">
									<div class="row">
										<div class="col-11 fw-bolder py-3 mx-auto" style="font-size: 14px;">
											@foreach ($categorias as $cate_prod)
												@if ($cate_prod->id == $auxC)
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
														{{ $p->nombre_en }}
													@else
														{{ $p->nombre }}
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

								@endif
                            
                            @endforeach
                        @else 
                            <h2>No hay productos</h2>
                        @endif
					</div>
				  
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-12 px-5">

@endsection

@section('jsLibExtras2')
<script>
	
</script>
<script>
	$('.productos').slick({
		autoplay: false,
		dots: false,
		infinite: true,
		arrows: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		}
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
$('.slider-for').slick({
autoplay: false,
slidesToShow: 1,
slidesToScroll: 1,
arrows: false,
fade: true,
asNavFor: '.slider-nav'
});

$('.slider-nav').slick({
autoplay: false,
slidesToShow: 4,
slidesToScroll: 1,
asNavFor: '.slider-for',
// centerMode: true,
focusOnSelect: true,
responsive: [
	{
			breakpoint: 1201,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				infinite: true,
			}
		},
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
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
	]
});


});


</script>
@endsection

@section('jqueryExtra')

@endsection
