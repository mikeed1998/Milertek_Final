@extends('layouts.admin')

@section('cssExtras')

@endsection

@section('jsLibExtras')

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

<style>
    /* input con opacidad y sin boton de selecciond e archivo */
		.file-upload input[type="file"] {
                    position: absolute;
                    left: -9999px;
                    }

                    .file-upload label {
                    display: inline-block;
                    background-color: #00000031;
                    color: #fff;
                    padding: 6px 12px;
                    cursor: pointer;
                    border-radius: 4px;
                    font-weight: normal;
                    opacity: 0%;
                    }

                    .file-upload input[type="file"] + label:before {
                    content: "\f07b";
                    font-family: "Font Awesome 5 Free";
                    font-size: 16px;
                    margin-right: 5px;
                    transition: all 0.5s;
                    }

                    .file-upload input[type="file"] + label {
                        transition: all 0.5s;
                    }

                    .file-upload input[type="file"]:focus + label,
                    .file-upload input[type="file"] + label:hover {
                    backdrop-filter: blur(5px);
                    background-color: #41464a37;
                    opacity: 100%;
                    transition: all 0.5s;
                    }
    /* input con opacidad y sin boton de selecciond e archivo */
</style>
<style>
    .file-select {
position: relative;
display: inline-block;
}

.file-select::before {
background-color: #5678EF;
color: white;
display: flex;
justify-content: center;
align-items: center;
border-radius: 3px;
content: 'Seleccionar'; /* testo por defecto */
position: absolute;
left: 0;
right: 0;
top: 0;
bottom: 0;
}

.file-select input[type="file"] {
opacity: 0;
width: 200px;
height: 32px;
display: inline-block;
}

:root {
--fn: 'Seleccionar Archivo';
}

.file-select::before {
white-space: nowrap;
content: var(--fn);
}
</style>
@endsection

@section('content')
<div class="row mb-4 px-2">
    <div class="col-9">
        <a href="{{ route('config.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Back</a>
    </div>
    <div class="col-3 text-center">
        <a href="/admin/config/secciones/services_en" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/usa.png') }}" alt=""></a>
        <a href="/admin/config/secciones/services" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/mexico.png') }}" alt=""></a>
    </div>
</div>

	<div class="container-fluid" style="background-color: #1E4A89;">
	<div class="row px-4">
		<div class="col position-relative mx-auto mt-5">
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col px-0 position-relative">
							<div class="slider_pri-img" style="
								background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[11]->imagen) }}');
								background-repeat: no-repeat;
								background-size: cover;
								background-position: center center;
								width: 100%;
								height: 900px;
								box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.6);
							">
								<form id="form_imagen-statics" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id_static" value="{{ $elements[11]->id }}">
                                    <input id="input_imagen-statics" class="m-0 p-0" type="file" name="archivo_s">
                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_imagen-statics" style="opacity: 100%; border-radius: 26px; background-color: #44B2E3;">Choose file</label>
								</form>
							</div>
							<div class="col-xxl-6 col-xl-8 col-lg-9 col-md-10 col-sm-12 col-xs-12 position-absolute py-1 px-0 top-50 start-0">
								<div class="row">
									<div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-11 col-xs-11 mx-2"></div>
										<div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
											<div class="row">
												<div class="col display-1 scroll-1 text-white" style="overflow: auto; max-height: 90px;">
													<textarea class="form-control fs-1 fw-bolder text-white bg-transparent editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[31]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[31]->texto }}</textarea>  
												</div>
											</div>
											<div class="row mt-3">
												<div class="col text-white scroll-1" style="overflow: auto; max-height: 70px;">
													<textarea class="form-control text-white bg-transparent editarajax m-0" id="" rows="6" name="texto" data-id="{{ $elements[32]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[32]->texto }}</textarea> 
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
	</div>
		
  


<div class="container-fluid py-0" >
	<div class="row px-3 mb-5" style="background-color: #3378C6;">
		<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 fs-2 fw-bolder py-2 text-white text-center">
			{{-- <textarea class="form-control fs-2 text-white bg-transparent editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[12]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[12]->texto }}</textarea>  --}}
            Specialty sectors
        </div>
		<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
			<span uk-icon="icon: arrow-down; ratio: 3;" style="color: #44B2E3;"></span>
		</div>
		<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">

		</div>
	</div>

	<div class="row py-5 mt-5 mb-5 bg-white">
		<div class="col-12 text-center">
			<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #1E4A89; color: white;">
				Add new service 
			</button>
			<!-- Modal -->
			<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title fs-5" id="staticBackdropLabel">New Service</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form action="{{ route('config.seccion.servicioSide') }}" method="POST"  enctype="multipart/form-data">
								@csrf
								<div class="row form-group">
									<div class="col">
										<label for="nombre">Name</label>
										<input type="text" name="nombre" class="form-control" placeholder="service name" required> 
									</div>
								</div>
								<div class="row form-group">
									<div class="col">
										<label for="descripcion">Descripction</label>
										<textarea name="descripcion" class="form-control" id="" cols="30" rows="8" placeholder="service description" required></textarea>
									</div>
								</div>
								<div class="row form-group border py-3">
									<div class="col-12 text-center">
										<label for="imagen_servicio" class="fs-5">Service image</label>
									</div>
									<div class="col text-center">
										<div class="file-select">
											<input type="file" name="imagen_servicio" aria-label="Archivo" accept="image/jpeg, image/png, image/gif" required>
										</div>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-6 mx-auto text-center">
										<input type="submit" class="btn btn-outline border" value="Create service">
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@if ($contServ != 0)
			@foreach ($servicios as $serv)
				<div class="col-xxl-9 col-xl-9 col-lg-9 col-md-11 col-sm-11 col-xs-11 col-11 position-relative mx-auto mt-5">
					<div class="card scale-up mb-3 border-0">
						<div class="row g-0">
							<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 rounded-start">
								<div class="img-servicio" style="
									background-image: url('{{ asset('img2/photos/servicios/'.$serv->foto) }}');
									background-size: cover;
									background-position: center center;
									background-repeat: no-repeat;
									width: 100%;
								">
									<form action="{{ route('config.seccion.imgServicio', [$serv->id]) }}" method="POST" enctype="multipart/form-data">
										@csrf
										@method('PUT')
										<input class="m-0 p-0 form-control" type="file" name="archivo_s" required>
										<input type="submit" class="col-12 m-0 p-2 form-control d-flex justify-content-center align-items-center grande" style="opacity: 100%; border-radius: 26px; background-color: #44B2E3;" value="Change photo">
									</form>
								</div>
							</div>
							<div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12 col-12 shadow rounded-end">
								<div class="card-body">
									<div class="row">
										<div class="col-10 mx-auto">
											<div class="row">
												<div class="col-xxl-11 col-xl-11 col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<h5 class="card-title">
														
														<textarea class="form-control fs-3 bg-transparent editarajax m-0" id="" rows="1" name="texto" data-id="{{ $serv->id }}" data-table="MServicios" data-campo="nombre_en" style="color: #1E4A89;">{{ $serv->nombre_en }}</textarea> 
													</h5>
													<p class="card-text-servicio m-0 scroll-1" style="font-size: 14px; color: black;">
													
														<textarea class="form-control bg-transparent editarajax m-0" id="" rows="6" name="texto" data-id="{{ $serv->id }}" data-table="MServicios" data-campo="descripcion_en" style="line-height: 1;">{{ $serv->descripcion_en }}</textarea> 
													</p>
													<p class="card-text">
														<div class="row">
															<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-xs-5 col-5 mx-1 text-start fw-bolder" style="">
																<a href="#/" style="text-decoration: none;" class="text-dark">Contacto</a>
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
					<div class="col-xxl-1 col-xl-1 col-lg-2 py-3 bg-transparent position-absolute top-0 end-0">
						<form action="{{ route('config.seccion.delServicio', [$serv->id]) }}" method="POST" style="display: inline;">						
							@csrf
							@method('DELETE') 
							<button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
						</form>
					</div>
				</div>
			@endforeach
		@else
			<h2 class="py-5 text-center">No hay servicios</h2>
		@endif
		
	</div>
</div>
@endsection

@section('jsLibExtras2')
	<script>
		$('#input_imagen-statics').change(function(e) {
			$('#form_imagen-statics').trigger('submit');
		});

		$('#input_imagen-statics2').change(function(e) {
			$('#form_imagen-statics2').trigger('submit');
		});
	</script>
	<script>
		function actualizarInputFile() {
			var filename = "'" + this.value.replace(/^.*[\\\/]/, '') + "'";
			this.parentElement.style.setProperty('--fn', filename);
		}
	
		document.querySelectorAll(".file-select input").forEach((ele)=>ele.addEventListener('change', actualizarInputFile));
	</script>
@endsection

@section('jqueryExtra')

@endsection
