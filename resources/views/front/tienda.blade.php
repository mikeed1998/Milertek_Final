@extends('layouts.front')

@section('title', 'Productos')
@section('styleExtras')
@endsection
@section('content')
	<section class="bg-huevo">
		<div class="container">
			@foreach ($cats as $cat)
				<div class="text-center py-3">
					<h3 class="mx-auto w-50 bg-white py-3 text-imbo fw-bold"> {{ $cat->nombre}}</h3>
				</div>
				<div class="py-3 row">
					@foreach ($products as $product)
						@if ($product->categoria == $cat->id)
							<div class="col-12 col-lg-4 py-2 mx-auto">
								<div class="bg-white p-3">
									<div class="d-block text-center fs-5 fw-bolder text-capitalize"> {{ $product->nombre }}</div>
									<div class="d-block">
										<img src="{{ asset('img/photos/productos/'.$product->portada) }}" alt="{{ $product->portada }}" class="img-fluid p-2">
									</div>
									<div class="d-block text-center py-2">
										<button type="button" class="btn btn-sm btn-primary py-2 px-4 btn-modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="{{$product->id}}">
										VER MEDIDAS Y PRECIOS
										</button>
									</div>
								</div>
							</div>
						@endif
					@endforeach
				</div>
			@endforeach
		</div>
	</section>
	<section style="border-top:1em #2d3e52 solid; border-bottom:1em #2d3e52 solid;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-lg-7 py-5">
					<div class="d-block text-center">
						REALIZAMOS ENVIOS A TODA LA REPUBLICA* <br>
						POR TRES VIAS DIFERENTES
					</div>
					<div class="row">
						<div class="col-12 col-lg-4 text-center">
							<img src="{{ asset('img/photos/seccions/'.$elements[1]->imagen) }}" alt="{{ $elements[1]->imagen }}" class="img-fluid">
							<div class="">{!! $elements[0]->texto !!}</div>
						</div>
						<div class="col-12 col-lg-4 text-center">
							<img src="{{ asset('img/photos/seccions/'.$elements[3]->imagen) }}" alt="{{ $elements[1]->imagen }}" class="img-fluid">
							<div class="">{!! $elements[2]->texto !!}</div>
						</div>
						<div class="col-12 col-lg-4 text-center">
							<img src="{{ asset('img/photos/seccions/'.$elements[5]->imagen) }}" alt="{{ $elements[1]->imagen }}" class="img-fluid">
							<div class="">{!! $elements[4]->texto !!}</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-5 py-5 bg-imbo">
					<div class="d-block text-white fw-bold text-center h3">
						{!! $elements[6]->texto !!}
					</div>
					<div class="d-block text-center py-3">
						<a href="https://wa.me/52{{ $config->whatsapp }}" class="btn btn-success fs-5" style="border: 2px #fff solid; border-radius:.5em;">Cotizar <i class="fab fa-whatsapp"></i></a>
					</div>
					<div class="d-block text-white text-center h5">
						{!! $elements[7]->texto !!}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content" style="background: unset;">
				<div class="modal-header" style="background: #fff;">
					<h5 class="modal-title text-imbo fw-bold text-uppercase" id="staticBackdropLabel"></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 col-lg-5 p-0 ps-sm-0 pe-sm-1">
								<div class="bg-white p-4">
									<div class="d-block my-4 text-imbo fw-bold fs-5 text-center">
										PARA ENTENDER LAS MEDIDAS
									</div>
									<img id="imgmed" src="" class="img-fluid">
									<p class="pt-2" id="moddesc"></p>
								</div>
								<div class="bg-white p-4 mt-2">
									<div class="container text-center my-3">
										<div class="d-block my-4 text-imbo fw-bold fs-5">
											OTRAS CARACTERÍSTICAS
										</div>
										<div id="carruselMod" class="carousel slide" data-bs-ride="carousel">
											<div class="carousel-indicators">
											</div>
											<div class="carousel-inner">
											</div>
											<button class="carousel-control-prev" type="button" data-bs-target="#carruselMod" data-bs-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Previous</span>
											</button>
											<button class="carousel-control-next" type="button" data-bs-target="#carruselMod" data-bs-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="visually-hidden">Next</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-7 p-0 pe-sm-0 ps-sm-1">
								<div class="bg-white p-4 h-100">
									<div class="d-block my-4">
										<div class=" text-imbo fw-bold fs-4 text-uppercase">
											medidas y precios en <span class="staticBackdropLabel"></span>
										</div>
										<div class="d-block my-2 ">
											Las medidas y precios mostrados a continuación son:
										</div>
									</div>
									<table id="modtable" class="table table-hover text-center">
										<thead class="border">
											<tr>
												<th class="border color1" scope="col">N°</th>
												<th class="text-danger" scope="col">X</th>
												<th class="color1" style="width:.5em;" scope="col">+</th>
												<th class="text-success" scope="col">Y</th>
												<th class="color1" style="width:.5em;" scope="col">x</th>
												<th class="text-info" scope="col">Z</th>
												{{-- <th scope="col">Precio</th> --}}
											</tr>
										</thead>
										<tbody> </tbody>
									</table>
									<p class="text-center py-3">
										Asegurate de tener la medida y cantidad de bosas que necesitas al hacer tu pedido, si tienes alguna duda también puedes comunicarte por este medio para resolverlo, Estamos para servirte!
									</p>
									<div class="text-center">
										<a href="https://wa.me/52{{ $config->whatsapp2 }}" class="btn btn-success">Hacer Pedido<i class="fab fa-whatsapp fa-fw"></i></a>
									</div>
									<p class="text-center py-3 fw-bolder color1">
										ACEPTAMOS DEPÓSITOS, TRANFERENCIAS Y PAGOS EN EFECTIVO
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('jsLibExtras2')
@endsection
@section('jqueryExtra')
	<script>

        $(document).ready(function() {
             // Ocultar subcategorías por defecto
            $('.subcategorias').hide();

            var $grid = $('#contenido').isotope({
                itemSelector: '.item',
                layoutMode: 'fitRows'
            });

            // Variables para mantener el filtro actual
            var filtroActual = '*';

            // Cambiar icono al hacer clic en la categoría
            $('.categorias > li > a').on('click', function(e) {
                e.preventDefault();
                
                var $categoria = $(this).parent();
                var $subcategorias = $categoria.find('.subcategorias');
                var $icon = $categoria.find('.icon');

                if ($subcategorias.is(':hidden')) {
                    $categoria.addClass('active');
                $subcategorias.slideDown();
                $icon.find('i').removeClass('fa-plus').addClass('fa-minus'); // Cambiar a icono de "fa-minus"
            } else {
                $categoria.removeClass('active');
                $subcategorias.slideUp();
                $icon.find('i').removeClass('fa-minus').addClass('fa-plus'); // Cambiar a icono de "fa-plus"
            }
        });

            // Filtrar al hacer clic en una subcategoría
            $('.subcategorias a').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                var $subcategoria = $(this).parent();
                var $categoriaPadre = $subcategoria.closest('.categorias > li');
                var categoria = $categoriaPadre.attr('data-filter');
                var subcategoria = $subcategoria.attr('data-filter');

                // Obtener el filtro actual
                var filtro = categoria + subcategoria;

                // Verificar si la subcategoría seleccionada es la misma que la subcategoría vacía
                var subcategoriaVacia = '.categoria' + categoria;
                var esSubcategoriaVacia = (subcategoria === subcategoriaVacia);

                if (esSubcategoriaVacia) {
                    // Si la subcategoría seleccionada es la subcategoría vacía, se establece el filtro solo con la categoría
                    filtro = categoria;
                } else {
                    // Si se selecciona una subcategoría diferente, se agrega la clase 'active' a la categoría padre
                    $categoriaPadre.addClass('active');
                }

                // Filtrar los elementos según la selección de categoría y subcategoría
                $grid.isotope({ filter: filtro });

                // Actualizar el filtro actual
                filtroActual = filtro;
            });
        });

    </script>
@endsection
