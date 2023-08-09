@extends('layouts.admin')

@section('cssExtras')

@endsection

@section('jsLibExtras')

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
<style>
    .btn-link:hover {
  background-color: transparent;
}

</style>
@endsection

@section('content')
<div class="row mb-4 px-2">
    <div class="col-9">
        <a href="{{ route('config.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>
    <div class="col-3 text-center">
        <a href="/admin/config/secciones/products_en" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/usa.png') }}" alt=""></a>
        <a href="/admin/config/secciones/products" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/mexico.png') }}" alt=""></a>
    </div>
</div>
	

{{-- <div class="col-12 d-flex justify-content-center align-items-center flex-column mt-2 text-center">
    <h3 style="color:black; font-family: Arial, sans-serif;">Agregar slider</h3>
    <form id="form_image_slider" action="imgSider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
        @csrf
        <input id="input_slider_img" class="m-0 p-0" type="file" name="archivo">
        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center bg-success" for="input_slider_img" style="opacity: 100%; !important; border-radius: 26px;">Seleccionar archivo</label>
    </form>
</div> --}}

<div class="container-fluid">
    
    <div class="row px-xxl-5 px-xl-4 px-lg-1 px-md-1 px-sm-0 px-xs-1 px-1 py-4" style="background-color: #3378C6;">
    
        <div class="col-xxl-3 col-xl-3 col-lg-12 col-md-11 col-sm-11 col-xs-11 col-11 mx-auto mt-3">
            <div class="row">
                <div class="col-xxl-1 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 "></div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-11 col-xs-11 mx-auto text-white" >
                    <textarea class="form-control text-white bg-transparent text-start editarajax m-0" id="" rows="5" name="texto" data-id="{{ $elements[8]->id }}" data-table="Elemento" data-campo="texto" style="line-height: 1.1;">{{ $elements[8]->texto }}</textarea>   
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-9 col-sm-11 col-xs-11 mx-auto py-4 text-center ">
                <a href="#" onclick="location.reload()" style="text-decoration: none; color: #FFF;">
                    <div class="btn btn-outline px-5 py-2 text-white boton-productos">
                        Ver Productos
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xxl-9 col-xl-9 col-lg-12 col-md-11 col-sm-12 col-xs-12 col-12 mx-auto">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center flex-column mt-2 text-center">
                    <form id="form_image_slider3" action="categoriaSlider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                        @csrf
                        <input id="input_slider_img3" class="m-0 p-0" type="file" name="icono">
                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_img3" style="opacity: 100% !important; background-color: #1E4A89; border-radius: 26px;">Crear nueva categoría</label>
                    </form>
                </div>
            </div>
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
                                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-3 col-xs-2 col-4 text-center py-3 circulo-productos">
                                                    <img src="{{ asset('img2/photos/categorias/'.$categoria->icono) }}" alt="" class="img-fluid mx-auto gran" style="width: 40px; height: 40px;">
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-9 col-xs-9 col-8 p-4 text-white">
                                                    <strong class="texto-productos">
                                                        <textarea class="form-control text-white bg-transparent text-start editarajax m-0" id="" rows="1" name="texto" data-id="{{ $categoria->id }}" data-table="MCategorias" data-campo="categoria" style="line-height: 1.1;">{{ $categoria->categoria }}</textarea>   
                                                    </strong>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            </a>
                            <div class="col-3 position-absolute top-0 end-0 ">
                                <form action="{{ route('config.seccion.delCategoria', ['categoria' => $categoria->id]) }}" method="POST" style="display: inline;">						
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
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
                    Productos 
                    <?php 
                        echo (isset($_GET['cat'])) ? "El dato GET es: " . $_GET['cat'] : "";
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #1E4A89; color: white;">
                        Crear nuevo producto    
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo producto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('config.seccion.productoSide') }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row form-group py-3">
                                        <div class="col-12 py-2">
                                            <label for="nombre" class="fs-5">Nombre del producto</label>
                                            <input type="text" name="nombre" placeholder="Nombre del producto" class="form-control" required>
                                        </div>
                                        <div class="col-12 py-2">
                                            <label for="descripcion" class="fs-5">Descripción del producto</label>
                                            <textarea name="descripcion" id="" cols="30" rows="6" class="form-control" placeholder="Descripción del producto"></textarea>
                                        </div>
                                        <div class="col-12 py-2">
                                            <label for="nombre_en" class="fs-5">Name [EN]</label>
                                            <input type="text" name="nombre_en" placeholder="Name" class="form-control" required>
                                        </div>
                                        <div class="col-12 py-2">
                                            <label for="descripcion_en" class="fs-5">Description [EN]</label>
                                            <textarea name="descripcion_en" id="" cols="30" rows="6" class="form-control" placeholder="Description"></textarea>
                                        </div>
                                        <div class="col-5 mx-auto py-2">
                                            <label for="precio_mxn" class="fs-5">Precio (MXN)</label>
                                            <input type="number" name="precio_mxn" placeholder="Precio del producto" class="form-control" required>
                                        </div>
                                        <div class="col-5 mx-auto py-2">
                                            <label for="precio_usd" class="fs-5">Equivalente (USD)</label>
                                            <input type="number" name="precio_usd" placeholder="Equivalente en dolares" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row form-group py-3">
                                        <div class="col-12 text-center">
                                            <label for="ficha_tecnica" class="fs-5">Ficha Técnica</label>
                                        </div>
                                        <div class="col text-center">
                                            <div class="file-select">
                                                <input type="file" name="ficha_tecnica" aria-label="Archivo" accept=".pdf" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group border py-3">
                                        <div class="col-12 text-center">
                                            <label for="imagen_principal" class="fs-5">Imagen del producto</label>
                                        </div>
                                        <div class="col text-center">
                                            <div class="file-select">
                                                <input type="file" name="imagen_principal" aria-label="Archivo" accept="image/jpeg, image/png, image/gif" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group border py-3">
                                        <div class="col-12 text-center">
                                            <label for="" class="fs-5">Características del producto</label>
                                        </div>
                                        <div class="col-9 text-center mx-auto">
                                            <div id="inputsContainer">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="caracteristicas[]" class="caracteristica form-control" required>
                                               
                                                    <input type="text" name="caracteristicas3[]" class="caracteristica3 form-control" required>
                                                </div>
                                            </div>
                                            
                                            <button type="button" id="addInputButton" class="btn btn-outline border">Agregar otra caractrística</button>
                                        </div>
                                    </div>
                                    <div class="row form-group border py-3">
                                        <div class="col-12 text-center fs-5">
                                            Categoría del producto
                                        </div>
                                        <div class="col-9 mx-auto text-center">
                                            <select name="categoriaProducto" id="categoriaProducto" class="form-control">
                                                @if($categoriasCont != 0)
                                                    @foreach ($categorias as $categ)
                                                        <option value="{{ $categ->id }}">{{ $categ->categoria }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="0">No hay categorías disponibles</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6 mx-auto">
                                            <input type="submit" value="Crear Producto" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-5 py-5 ">
                <div class="col-1"></div>
                    <div class="col-11 position-relative mx-auto">
                        <div class="js-filter">
                        
                            @if ($contProductos != 0)
                                @foreach ($productos as $pd)
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-10 col-sm-10 col-xs-10 col-10 columna_productos dato-cat categoria{{ $pd->categoria }}">
                                        <div class="row">
                                            <div class="col-11 fw-bolder py-3 mx-auto" style="font-size: 14px;">
                                                @foreach ($categorias as $cat_pd)
                                                    @if ($cat_pd->id == $pd->categoria)
                                                        {{ $cat_pd->categoria }}
                                                        @break
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="img_producto position-relative" style="
                                                    background-color: #FFF;
                                                    background-image: url('{{ asset('img2/photos/productos/galeria/'.$pd->foto_principal) }}');
                                                    background-size: contain;
                                                    background-position: center center;
                                                    background-repeat: no-repeat;
                                                    width: 100%;
                                                ">
                                                    <div class="col-12 py-3 bg-transparent position-absolute top-0 start-0">
                                                        <form action="{{ route('config.seccion.imgProducto', ['producto' => $pd->id]) }}" id="formu-img{{ $pd->id }}" method="POST"  enctype="multipart/form-data" required>
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row form-group">
                                                                <div class="col text-center rounded fs-5 bg-info">
                                                                    <input type="file" name="foott" class="btn btn-info form-control" value="Actualizar Imagen" required>
                                                                    <input type="submit" class="btn btn-block border border-white" value="Cambiar foto">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-11 py-3 mx-auto">
                                                <div class="row">
                                                    <div class="col-12 py-3 fw-bolder" >
                                                        <textarea class="form-control fw-bolder bg-transparent text-start editarajax m-0" id="" rows="1" name="nombre" data-id="{{ $pd->id }}" data-table="MProductos" data-campo="nombre" style="line-height: 1.1; font-size: 14px;">{{ $pd->nombre }}</textarea> 
                                                    </div>
                                                    <div class="col-12 text-end">
                                                        <div class="row">
                                                            <div class="col-4 d-flex align-items-center">
                                                                <button type="button" class="btn btn-link btn-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $pd->id }}">
                                                                    <i class="fas fa-info-circle bg-info text-dark rounded fs-3 p-3"></i>
                                                                </button>
                                                                <div class="modal fade" id="staticBackdrop{{ $pd->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-xl">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificaciones en el detalle del producto</h1>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-11 py-3 text-start mx-auto">
                                                                                        <label for="nombre" class="form-label text-start fs-5">Modificar el nombre</label>
                                                                                        <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="1" name="nombre" data-id="{{ $pd->id }}" data-table="MProductos" data-campo="nombre" style="line-height: 1.1; font-size: 14px;">{{ $pd->nombre }}</textarea> 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-11 mx-auto text-start">
                                                                                        <label for="descripcion" class="form-label text-start fs-5">Modificar la descripción del producto</label>
                                                                                        <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="6" name="descripcion" data-id="{{ $pd->id }}" data-table="MProductos" data-campo="descripcion" style="line-height: 1.1; width: 100%; min-height: 100px;">{{  $pd->descripcion  }}</textarea> 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-11 py-3 text-start mx-auto">
                                                                                        <label for="nombre_en" class="form-label text-start fs-5">Edit Name [EN]</label>
                                                                                        <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="1" name="nombre_en" data-id="{{ $pd->id }}" data-table="MProductos" data-campo="nombre_en" style="line-height: 1.1; font-size: 14px;">{{ $pd->nombre_en }}</textarea> 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-11 mx-auto text-start">
                                                                                        <label for="descripcion_en" class="form-label text-start fs-5">Edit Description [EN]</label>
                                                                                        <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="6" name="descripcion_en" data-id="{{ $pd->id }}" data-table="MProductos" data-campo="descripcion_en" style="line-height: 1.1; width: 100%; min-height: 100px;">{{  $pd->descripcion_en  }}</textarea> 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12 mt-5 fs-5 text-center">Modificar precio</div>
                                                                                    <div class="col-5 text-start mx-auto py-2">
                                                                                        <label class="fs-5">Precio (MXN)</label>
                                                                                        <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="1" data-id="{{ $pd->id }}" data-table="MProductos" data-campo="precio_mxn" style="line-height: 1.1;">{{  $pd->precio_mxn  }}</textarea> 
                                                                                    </div>
                                                                                    <div class="col-5 text-start mx-auto py-2">
                                                                                        <label class="fs-5">Equivalente (USD)</label>
                                                                                        <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="1" data-id="{{ $pd->id }}" data-table="MProductos" data-campo="precio_usd" style="line-height: 1.1;">{{  $pd->precio_usd  }}</textarea> 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mt-5">
                                                                                    <div class="col-12 fs-5 text-center">
                                                                                        Actualizar ficha técnica
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <form action="{{ route('config.seccion.productoUpdate', ['producto' => $pd->id]) }}" id="formu-{{ $pd->id }}" method="POST"  enctype="multipart/form-data">
                                                                                            @csrf
                                                                                            @method('PUT')
                                                                                            <div class="row form-group py-3">
                                                                                               
                                                                                                <div class="col text-center">
                                                                                                    <div class="file-select">
                                                                                                        <input type="hidden" name="tipof" value="pdf">
                                                                                                        <input type="file" name="ficha" aria-label="Archivo" accept=".pdf" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row form-group">
                                                                                                <div class="col-6 mx-auto text-center">
                                                                                                    <input type="submit" class="btn btn-outline border" value="Guardar ficha tecnica actualizada">
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row border">
                                                                                    <div class="col-12 text-center py-3 fs-5">Modificar o quitar características del producto</div>
                                                                                    @foreach ($caracteristicas_producto as $capp) 

                                                                                        @if ($capp->producto == $pd->id)
                                                                                            <div class="col-8 mx-auto position-relative">
                                                                                                {{-- posibilidad de agregar mas --}}
                                                                                                {{-- <input type="text" class="form-control" value="{{ $capp->caracteristica }}"> --}}
                                                                                                <div class="row">
                                                                                                    <div class="col-6">
                                                                                                        <textarea class="form-control fs-5 fw-normal bg-transparent text-start text-dark editarajax m-0" id="" rows="1" name="texto" data-id="{{ $capp->id }}" data-table="MCaracteristicaProducto" data-campo="caracteristica">{{ $capp->caracteristica }}</textarea>
                                                                                                    </div>
                                                                                                    <div class="col-6">
                                                                                                        <textarea class="form-control fs-5 fw-normal bg-transparent text-start text-dark editarajax m-0" id="" rows="1" name="texto" data-id="{{ $capp->id }}" data-table="MCaracteristicaProducto" data-campo="caracteristica_en">{{ $capp->caracteristica_en }}</textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-2 position-absolute top-0 start-100">
                                                                                                    <form action="{{ route('config.seccion.delCaracteristica', ['caracteristica' => $capp->id]) }}" method="POST" style="display: inline;">						
                                                                                                        @csrf
                                                                                                        @method('DELETE') 
                                                                                                        <button type="submit" class="btn btn-link text-dark m-0 bg-danger p-0">
                                                                                                        <i class="fas fa-trash bg-danger rounded fs-3 p-1"></i>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                </div>
                                                                                                {{-- <div class="col-2 position-absolute top-0 start-100">
                                                                                                    <form action="{{ route('config.seccion.delCaracteristica', ['caracteristica' => $capp->id]) }}" method="POST" class="delete-form" style="display: inline;">						
                                                                                                        @csrf
                                                                                                        @method('DELETE') 
                                                                                                        <button type="button" class="btn btn-link text-dark m-0 bg-danger p-0 delete-button" data-id="{{ $capp->id }}">
                                                                                                            <i class="fas fa-trash bg-danger rounded fs-3 p-1"></i>
                                                                                                        </button>
                                                                                                    </form>
                                                                                                </div> --}}
                                                                                            </div>
                                                                                            
                                                                                        @endif
                                                                                        
                                                                                    @endforeach

                                                                                    {{-- <div class="col-12 py-3 text-center fs-5">Agregar nuevas características</div> --}}
                                                                                    <form action="{{ route('config.seccion.caracteristicasSide', ['producto' => $pd->id]) }}" method="POST" enctype="multipart/form-data" class="myForm" id="fomuu-{{ $pd->id }}">
                                                                                        @csrf
                                                                                        @method('PUT')
                                                                                        <div class="row form-group py-3 mt-3">
                                                                                            <div class="col-12 text-center">
                                                                                                <label for="" class="fs-5">Añadir nuevas características al producto</label>
                                                                                            </div>
                                                                                            <div class="col-9 text-center mx-auto">
                                                                                                <div class="inputsContainer">
                                                                                                    <div class="input-group mb-3">
                                                                                                        <input type="text" name="caracteristicas[]" class="caracteristica form-control" required>
                                                                                                        <input type="text" name="caracteristicas3[]" class="caracteristica3 form-control" required>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <button type="button" class="addInputButton btn border">Agregar otra caractrística</button>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row form-group">
                                                                                            <div class="col-6 mx-auto">
                                                                                                <input type="submit" value="Agregar nuevas características" class="form-control btn-secondary">
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                    
                                                                                    

                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex align-items-center">
                                                                
                                                                <a href="{{ route('config.seccion.galeriaSide', ['producto' => $pd->id]) }}" class="btn btn-link btn-block">
                                                                    <i class="fas fa-camera bg-info text-dark rounded fs-3 p-3"></i>
                                                                </a>
                                                               
                                                            </div>
                                                            <div class="col-4 d-flex align-items-center">
                                                                <form action="{{ route('config.seccion.delProducto', ['producto' => $pd->id]) }}" method="POST" style="display: inline;">						
                                                                    @csrf
                                                                    @method('DELETE') 
                                                                    <button type="submit" class="btn btn-link text-dark m-0 bg-danger p-0">
                                                                        <i class="fas fa-trash bg-danger rounded fs-3 p-3"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        {{-- <i class="fas fa-trash bg-danger rounded fs-3 p-3"></i> --}}
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                @endforeach
                            @else
                                <h2>No hay productos</h2>
                            @endif

                        </div>
                        <div class="row js-filter oculta" style="display: none;">
                            <div class="col-md-12">
                                <!-- Contenido de la columna oculta -->
                                <div class="row">
                                    <div class="col-9 mx-auto text-center display-5">
                                        No hay productos disponibles dentro de esta categoría.
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

@section('jsLibExtras2')

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
            
         
        ]
        });
    </script>
    <script>
        $('.galeriaslider').slick({
            autoplay: true,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
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
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

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
<script>
    $('#input_slider_img3').change(function(e) {
		$('#form_image_slider3').trigger('submit');
	});
</script>
<script>
    function actualizarInputFile() {
        var filename = "'" + this.value.replace(/^.*[\\\/]/, '') + "'";
        this.parentElement.style.setProperty('--fn', filename);
    }

    document.querySelectorAll(".file-select input").forEach((ele)=>ele.addEventListener('change', actualizarInputFile));
</script>


<script>
const addInputButton = document.getElementById('addInputButton');
const inputsContainer = document.getElementById('inputsContainer');
const myForm = document.getElementById('myForm');

let inputIndex = 1;

addInputButton.addEventListener('click', function() {
  const inputDiv = document.createElement('div');
  inputDiv.classList.add('input-group', 'mb-3');

  const newInput1 = document.createElement('input');
  newInput1.type = 'text';
  newInput1.name = 'caracteristicas[]';
  newInput1.classList.add('form-control', 'caracteristica', 'mt-1', 'py-2');
  inputDiv.appendChild(newInput1);

  const newInput2 = document.createElement('input');
  newInput2.type = 'text';
  newInput2.name = 'caracteristicas3[]'; // Different name for the second input
  newInput2.classList.add('form-control', 'caracteristica2', 'mt-1', 'py-2');
  inputDiv.appendChild(newInput2);

  const deleteInputButton = document.createElement('button');
  deleteInputButton.type = 'button';
  deleteInputButton.classList.add('btn', 'btn-danger', 'deleteInputButton');
  deleteInputButton.innerHTML = '&times;';

  inputDiv.appendChild(deleteInputButton);
  inputsContainer.appendChild(inputDiv);
  inputIndex++;
});

inputsContainer.addEventListener('click', function(event) {
  if (event.target.classList.contains('deleteInputButton')) {
    const inputDiv = event.target.parentNode;
    inputDiv.remove();
  }
});


myForm.addEventListener('submit', function(event) {
  event.preventDefault();
  
  const caracteristicas = document.querySelectorAll('.caracteristica');
  const caracteristicas3 = document.querySelectorAll('.caracteristica3');
  
  const caracteristicaValues = Array.from(caracteristicas).map(input => input.value);
  const caracteristica3Values = Array.from(caracteristicas3).map(input => input.value);
  
  // Realizar acciones con los arrays de valores (caracteristicaValues y caracteristica2Values)
  console.log(caracteristicaValues);
  console.log(caracteristica3Values);
  
  // Aquí puedes enviar el formulario al servidor
});

</script>

<script>
    // Get all the forms on the page
    const forms = document.querySelectorAll('.myForm');

    forms.forEach(form => {
        const addInputButton = form.querySelector('.addInputButton');
        const inputsContainer = form.querySelector('.inputsContainer');

        let inputIndex = 1;

        addInputButton.addEventListener('click', function() {
            const existingInputs = inputsContainer.querySelectorAll('.input-group');
            const inputDiv = document.createElement('div');
            inputDiv.classList.add('input-group', 'mb-3');

            const newInput1 = document.createElement('input');
            newInput1.type = 'text';
            newInput1.name = `caracteristicas[]`;
            newInput1.classList.add('form-control', 'caracteristica', 'mt-1', 'py-2');
            inputDiv.appendChild(newInput1);

            const newInput2 = document.createElement('input');
            newInput2.type = 'text';
            newInput2.name = `caracteristicas3[]`;
            newInput2.classList.add('form-control', 'caracteristica3', 'mt-1', 'py-2');
            inputDiv.appendChild(newInput2);

            const deleteInputButton = document.createElement('button');
            deleteInputButton.type = 'button';
            deleteInputButton.classList.add('btn', 'btn-danger', 'deleteInputButton');
            deleteInputButton.innerHTML = '&times;';
            inputDiv.appendChild(deleteInputButton);
    
            inputsContainer.appendChild(inputDiv);
            inputIndex++;
        });

        inputsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('deleteInputButton')) {
                const inputDiv = event.target.parentNode;
                inputDiv.remove();
            }
        });

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const caracteristicas = form.querySelectorAll('.caracteristica');
            const caracteristicas3 = form.querySelectorAll('.caracteristica3');

            const caracteristicaValues = Array.from(caracteristicas).map(input => input.value);
            const caracteristica3Values = Array.from(caracteristicas3).map(input => input.value);

            // Realizar acciones con los arrays de valores (caracteristicaValues y caracteristica3Values)
            console.log(caracteristicaValues);
            console.log(caracteristica3Values);

            // Aquí puedes enviar el formulario al servidor
            // Por ejemplo:
            form.submit(); // Esto enviará el formulario al servidor.
        });
    });
</script>


{{--
    <script>
    // Get all the forms on the page
    const forms = document.querySelectorAll('.myForm');

    forms.forEach(form => {
        const addInputButton = form.querySelector('.addInputButton');
        const inputsContainer = form.querySelector('.inputsContainer');

        let inputIndex = 1;

        addInputButton.addEventListener('click', function() {
            const inputDiv = document.createElement('div');
            inputDiv.classList.add('input-group', 'mb-3');

            const newInput1 = document.createElement('input');
            newInput1.type = 'text';
            // newInput1.name = `caracteristicas${inputIndex}[]`;
            newInput1.name = `caracteristicas${inputIndex}[]`;
            newInput1.classList.add('form-control', 'caracteristica', 'mt-1', 'py-2');
            inputDiv.appendChild(newInput1);

            const newInput2 = document.createElement('input');
            newInput2.type = 'text';
            // newInput2.name = `caracteristicas${inputIndex + 2}[]`; // Different name for the second input
            newInput2.name = `caracteristicas${inputIndex + 2}[]`; // Different name for the second input
            newInput2.classList.add('form-control', 'caracteristica3', 'mt-1', 'py-2');
            inputDiv.appendChild(newInput2);

            const deleteInputButton = document.createElement('button');
            deleteInputButton.type = 'button';
            deleteInputButton.classList.add('btn', 'btn-danger', 'deleteInputButton');
            deleteInputButton.innerHTML = '&times;';

            inputDiv.appendChild(deleteInputButton);
            inputsContainer.appendChild(inputDiv);
            inputIndex++;
        });

        inputsContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('deleteInputButton')) {
                const inputDiv = event.target.parentNode;
                inputDiv.remove();
            }
        });

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const caracteristicas = form.querySelectorAll('.caracteristica');
            const caracteristicas3 = form.querySelectorAll('.caracteristica3');

            const caracteristicaValues = Array.from(caracteristicas).map(input => input.value);
            const caracteristica3Values = Array.from(caracteristicas3).map(input => input.value);

            // Realizar acciones con los arrays de valores (caracteristicaValues y caracteristica3Values)
            console.log(caracteristicaValues);
            console.log(caracteristica3Values);

            // Aquí puedes enviar el formulario al servidor
            // Por ejemplo:
            form.submit(); // Esto enviará el formulario al servidor.
        });
    });
</script>
--}}

<script>
    $(document).ready(function() {
        $('.delete-button').click(function() {
            const form = $(this).closest('.delete-form');

            if (confirm('¿Estás seguro de que deseas eliminar este elemento?')) {
                $.ajax({
                    url: ,
                    type: 'POST',
                    data: {
                        _method: 'DELETE',
                        _token: $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function(response) {
                        // Manejar la respuesta de éxito, si es necesario
                        // Por ejemplo, actualizar la lista de elementos, etc.
                        console.log('Elemento eliminado correctamente');
                    },
                    error: function(error) {
                        // Manejar errores, si es necesario
                        console.error('Error al eliminar el elemento:', error);
                    }
                });
            }
        });
    });
</script>


@endsection

@section('jqueryExtra')

@endsection





































{{-- 
<script>
    const addInputButton = document.getElementById('addInputButton');
const inputsContainer = document.getElementById('inputsContainer');
const myForm = document.getElementById('myForm');

let inputIndex = 1;

addInputButton.addEventListener('click', function() {
  const inputDiv = document.createElement('div');
  inputDiv.classList.add('input-group', 'mb-3');

  const newInput = document.createElement('input');
  newInput.type = 'text';
  newInput.name = 'caracteristicas[]';
  newInput.classList.add('form-control', 'caracteristica', 'mt-1', 'py-2');
  inputDiv.appendChild(newInput);

  const deleteInputButton = document.createElement('button');
  deleteInputButton.type = 'button';
  deleteInputButton.classList.add('btn', 'btn-danger', 'deleteInputButton');
  deleteInputButton.innerHTML = '&times;';

  inputDiv.appendChild(deleteInputButton);
  inputsContainer.appendChild(inputDiv);
  inputIndex++;
});

inputsContainer.addEventListener('click', function(event) {
  if (event.target.classList.contains('deleteInputButton')) {
    const inputDiv = event.target.parentNode;
    inputDiv.remove();
  }
});


myForm.addEventListener('submit', function(event) {
  event.preventDefault();
  
  const caracteristicas = document.querySelectorAll('.caracteristica');
  const caracteristicaValues = Array.from(caracteristicas).map(input => input.value);
  
  // Realizar acciones con el array de valores (caracteristicaValues)
  console.log(caracteristicaValues);
  
  // Aquí puedes enviar el formulario al servidor
});

</script> --}}
{{-- 
<script>
    const addInputButtons2 = document.querySelectorAll('.addInputButton2');
const inputsContainers2 = document.querySelectorAll('.inputsContainer2');
const myForms2 = document.querySelectorAll('.myForm2');

addInputButtons2.forEach(function(addInputButton2, index) {
  const inputsContainer2 = inputsContainers2[index];
  const myForm2 = myForms2[index];

  let inputIndex2 = 1;

  addInputButton2.addEventListener('click', function() {
    const inputDiv2 = document.createElement('div');
    inputDiv2.classList.add('input-group', 'mb-3');

    const newInput2 = document.createElement('input');
    newInput2.type = 'text';
    newInput2.name = 'caracteristicas2[]';
    newInput2.classList.add('form-control', 'caracteristica2', 'mt-1', 'py-2');
    inputDiv2.appendChild(newInput2);

    const deleteInputButton2 = document.createElement('button');
    deleteInputButton2.type = 'button';
    deleteInputButton2.classList.add('btn', 'btn-danger', 'deleteInputButton2');
    deleteInputButton2.innerHTML = '&times;';

    inputDiv2.appendChild(deleteInputButton2);
    inputsContainer2.appendChild(inputDiv2);
    inputIndex2++;
  });

  inputsContainer2.addEventListener('click', function(event) {
    if (event.target.classList.contains('deleteInputButton2')) {
      const inputDiv2 = event.target.parentNode;
      inputDiv2.remove();
    }
  });

  myForm2.addEventListener('submit', function(event) {
    event.preventDefault();

    const myForm = event.target; // Obtener el formulario específico

    const caracteristicas2 = myForm.querySelectorAll('.caracteristica2');
    const caracteristicaValues2 = Array.from(caracteristicas2).map(input => input.value);

    // Realizar acciones con el array de valores (caracteristicaValues)
    console.log(caracteristicaValues2);

    // Aquí puedes enviar el formulario al servidor
    myForm.submit();
  });
});
</scrip> --}}