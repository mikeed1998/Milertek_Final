@extends('layouts.admin')

@section('cssExtras')



@endsection

@section('jsLibExtras')

@endsection

@section('styleExtras')

<style>
    .slider-container {
        position: relative;
    }

    .slider-dots-container {
        position: absolute;
        /* left: 130px;
        bottom: 230px; */
        transform: translateX(-50%);
        z-index: 1;
    }

    .slider-dots {
        display: flex;
        justify-content: center;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .slider-dots li {
        margin: 0 5px;
    }

    .slider-dots button {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #FEFEFE;
        border: none;
        cursor: pointer;
    }

    .slider-dots button.slick-active {
        background-color: #366DB1;
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

    .productos > .slick-dots {
        bottom: -70px;
    }

    .input-mensaje {
        color: white;
        border: 2px solid #44B2E3;
        background-color: #1E4A89;
    }

    .input-mensaje::placeholder {
        font-size: 13px;
        color: white;
    }

    .input-mensaje:focus {
        color: white;
        background-color: #1E4A89;
    }

    /* Para navegadores WebKit */
    .scroll-1::-webkit-scrollbar {
        width: 12px; /* Cambia el ancho de la barra de desplazamiento */
        background-color: transparent; /* Establece el fondo de la barra de desplazamiento como transparente */
    }

    .scroll-1::-webkit-scrollbar-thumb {
        background-color: transparent; /* Establece el color del pulgar de la barra de desplazamiento como transparente */
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
    

</style>

<style>
    /*  Píxeles	REM
        1px	0.06rem */
    /*  REM	Píxeles
        0.01rem	0.16px */

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
        .apartado {
            margin-left: 50px;
        }

        .slider-dots-container {
            left: 130px;
            bottom: 210px;
        }

        .slider_pri-img {
            height: 55rem; 
        }

        .banner {
            height: 800px;
        }

        .btn-todo {
            width: 50%;
        }

        .img_producto {
            height: 280px;
        }

    }

    /* xl */
    @media (min-width: 1200px) and (max-width: 1400px) {
        .apartado {
            margin-top: 0.3rem;
            margin-left: 20px;
        }

        .inicio {
            margin-left: 30px;
        }

        .contacto {
            margin-right: 20px;
        }

        .slider-dots-container {
            left: 120px;
            bottom: 210px;
        }

        .slider_pri-img {
            height: 55rem; 
        }

        .banner {
            height: 700px;
        }

        .btn-todo {
            width: 50%;
            margin-left: 10px;
        }

        .img_producto {
            height: 240px;
        }

    }

    /* lg */
    @media (min-width: 992px) and (max-width: 1200px) {
        .apartado {
            margin-left: 1px;
        }

        .slider-dots-container {
            left: 120px;
            bottom: 120px;
        }

        .slider_pri-img {
            height: 44rem; 
        }

        .banner {
            height: 660px;
        }

        .btn-todo {
            width: 70%;
            margin-left: 10px;
        }

        .img_producto {
            height: 210px;
        }

    }

    /* md */
    @media (min-width: 768px) and (max-width: 992px) {
        .apartado {
            margin-left: 1px;
        }

        .slider-dots-container {
            left: 120px;
            bottom: 50px;
        }

        .slider_pri-img {
            height: 34rem; 
        }

        .banner {
            height: 600px;
        }

        .btn-todo {
            width: 75%;
            margin-left: 34px;
        }

        .img_producto {
            height: 190px;
        }

    }

    /* sm */
    @media (min-width: 576px) and (max-width: 768px) {
        .slider-dots-container {
            left: 110px;
            bottom: 15px;
        }

        .slider_pri-img {
            height: 27rem; 
        }

        /* Inicio */

        .fondo-bar-sm {
            background-color: #3378C6;
        }

        .banner {
            height: 400px;
        }

        .btn-todo {
            width: 75%;
            margin-left: 34px;
        }

        .img_producto {
            height: 180px;
        }

    }

    /* xs */
    @media (min-width: 0px) and (max-width: 576px) {
        .slider-dots-container {
            left: 70px;
            bottom: 8px;
        }

        .slider_pri-img {
            height: 24rem; 
        }

        /* Inicio */

        .fondo-bar-sm {
            background-color: #3378C6;
        }

        .banner {
            height: 300px;
        }

        .cont-todo {
            margin-top: 60px;
        }

        .btn-todo {
            width: 100%;
            margin-left: 10px;
        }

        .img_producto {
            height: 160px;
        }

    }

</style>
<style>
    .cuadro:hover {
        background-color: black; opacity: 80%;
    }

    .cuadro:hover > .btn {
        display: block;
        color: black;
        background-color: white;
        opacity: 100%;
    }

    .cuadro:hover > .btn:hover {
        display: block;
        color:white;
        background-color: red;
        opacity: 100%;
    }

    .cuadro > .btn {
        display: none;
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

@endsection

@section('content')
<div class="row mb-4 px-2">
    <div class="col-9">
        <a href="{{ route('config.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>
    <div class="col-3 text-center">
        <a href="/admin/config/secciones/home_en" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/usa.png') }}" alt=""></a>
        <a href="/admin/config/secciones/home" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/mexico.png') }}" alt=""></a>
    </div>
</div>

<div class="container-fluid" style="background-color: #1E4A89;">
    <div class="row px-4">
        <div class="col position-relative mx-auto mt-5">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div class="col-12 d-flex justify-content-center align-items-center flex-column mt-2 text-center">
                                <h3 class="fs-1 fw-bolder" style="color:white; font-family: Arial, sans-serif;">Agregar slider</h3>
                                <form id="form_image_slider" action="imgSider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                    @csrf
                                    <input id="input_slider_img" class="m-0 p-0" type="file" name="archivo">
                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_img" style="opacity: 100%; !important; border-radius: 26px; background-color: #44B2E3;">Seleccionar archivo</label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="slider-container px-0">
                            
                            <div class="slider px-0">

                                @if ($conts != 0)
                                    @foreach ($slider_principal as $sp)
                                        <div class="col position-relative">
                                            <div class="row">
                                                <div class="slider_pri-img" style="
                                                background-image: url('{{ asset('img2/photos/slider_principal/'.$sp->imagen) }}');
                                                background-repeat: no-repeat;
                                                background-size: cover;
                                                background-position: center center;
                                                width: 100%;
                                                box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.6);
                                            "></div>
                                            <div class="col-xxl-6 col-xl-8 col-lg-9 col-md-10 col-sm-12 col-xs-12 position-absolute py-1 px-0 top-50 start-0">
                                                <div class="row">
                                                    <div class="col-xxl-1 col-xl-1 col-lg-1 col-md-1 col-sm-11 col-xs-11 mx-2"></div>
                                                        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
                                                            <div class="row">
                                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-11 col-xs-11 col-11 position-relative mx-auto display-1 scroll-1 text-white" style="overflow: auto; max-height: 90px;">
                                                                    <textarea class="form-control fs-2 fw-bolder text-white bg-transparent text-start editarajax m-0 titulo" id="aux" rows="1" name="texto" data-id="{{ $sp->id }}" data-table="MSliderPrincipal" data-campo="titulo"> {{ $sp->titulo }} </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-11 col-xs-11 col-11 mx-auto text-white scroll-1" style="overflow: auto; max-height: 70px;">
                                                                   
                                                                    <textarea class="form-control fw-bolder text-white bg-transparent text-start editarajax m-0" id="" rows="3" name="texto" data-id="{{ $sp->id }}" data-table="MSliderPrincipal" data-campo="descripcion"> {{ $sp->descripcion }} </textarea>  
                                                                    {{-- A mexican company with over 12 years experience in Design, Development, Manufacturing and Tech innovation coupled by a professional equipment supply and maintenance company --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1 py-3 position-absolute top-0 end-0">
                                                <form action="{{ route('config.seccion.delSide', [$sp->id]) }}" method="POST" style="display: inline;">						
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
                            <div class="slider-dots-container ">
                                <ul class="slider-dots"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-3" style="background-color: #3378C6;">
    <div class="row px-3">
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 fs-2 fw-bolder text-white">
            {{-- <textarea class="form-control fs-2 fw-bolder text-white bg-transparent text-center editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[0]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[0]->texto }}</textarea>    --}}
            Sectores de Especialidad
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
            <span uk-icon="icon: arrow-down; ratio: 3;" style="color: #44B2E3;"></span>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
        </div>
    </div>
</div>

<div class="container-fluid mt-5 mb-5" style="background-color: #3378C6;">
    <div class="row">
        <div class="col position-relative">
            <div class="row py-5" style="border-bottom: 2px dashed black;">
                <div class="col-xxl-3 col-xl-3 col-lg-12 col-md-11 col-sm-11 col-xs-11 col-11 mx-auto">
                    <div class="row">
                        <div class="col-xxl-1 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 "></div>
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-11 col-xs-11 mx-auto text-white " style="line-height: 1.1;">
                            
                                {{ $elements[8]->texto }}
                           
                            
                            {{-- <p class="m-0" id="texto-sectoresespeciaidad">{{ trans('sectoresespeciaidad') }}</p> --}}
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-19 col-xl-12 col-lg-12 col-md-9 col-sm-11 col-xs-11 mx-auto py-4 text-center">
                           
                                <a href="{{ route('front.productos', ['leng' => 'esp']) }}">
                                    <div class="btn btn-outline px-5 py-2 text-white boton-productos">
                                        Ver Productos
                                    </div>
                                </a>
                           
                                
                                   
                                    
                               
                            
                             {{-- Ver Productos --}}
                                    {{-- <p class="m-0" id="texto-verproductos">{{ trans('verproductos') }}</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-9">
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
                                                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-3 col-xs-2 col-4 text-center py-3 circulo-productos">
                                                                <img src="{{ asset('img2/photos/categorias/'.$categoria->icono) }}" alt="" class="img-fluid mx-auto gran" style="width: 40px; height: 40px;">
                                                            </div>
                                                            <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-8 col-sm-9 col-xs-9 col-8 p-4 text-white">
                                                                <strong class="texto-productos">

                                                                        {{ $categoria->categoria }}
                                                                  
                                                                </strong>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </a>
                                       
                                    </div>
                                @endforeach
                            @else
                            
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center flex-column position-absolute top-0 bottom-0 start-0 cuadro">
                <a href="{{ route('config.seccion.show', ['slug' => 'products']) }}" class="btn btn-outline bg-white">Editar desde la sección "Productos"</a>
            </div>
        </div>
        
    </div>




    <div class="row py-5">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto">
                    <div class="row">
                        <div class="col py-3 text-white display-5">
                            {{-- <textarea class="form-control fs-2 fw-bolder text-white bg-transparent editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[1]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[1]->texto }}</textarea>    --}}
                            Nosotros
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-12 col-sm-12 col-xs-12" >
                            <textarea class="form-control bg-transparent editarajax m-0" id="" rows="5" name="texto" data-id="{{ $elements[2]->id }}" data-table="Elemento" data-campo="texto" style="color: #44B2E3; line-height: 1.2;">{{ $elements[2]->texto }}</textarea>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 px-0 py-5">
                            {{-- <img src="{{ asset('img/design/inicio/imagen.png') }}" alt="" class="img-fluid shadow-lg"> --}}
                            <div class="imagen-soluciones shadow-lg" style="
                                background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[3]->imagen) }}');
                                background-position: center center;
                                background-size: cover;
                                background-repeat: no-repeat;
                                width: 100%;
                                height: 420px;
                            ">
                                <form id="form_imagen-static" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id_static" value="{{ $elements[3]->id }}">
                                    <input id="input_imagen-static" class="m-0 p-0" type="file" name="archivo_s">
                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_imagen-static" style="opacity: 100%; border-radius: 26px; background-color: #44B2E3;">Seleccionar archivo</label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                        <div class="col-xxl-9 col-xl-9 col-lg-10 col-md-12 col-sm-12 col-xs-12 position-relative px-0 text-end">
                            <a href="servicios.php">
                            <img src="{{ asset('img/design/inicio/servicios.png') }}" alt="" class="img-fluid">
                            <div class="col-6 mt-xxl-4 mt-xl-3 mt-lg-2 mt-md-1 mt-sm-0 mt-xs-0 position-absolute top-0 start-0">
                                <div class="row">
                                    <div class="col text-white text-center display-5">
                                     
                                        {{-- <textarea class="form-control display-5 fs-3 text-white bg-transparent editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[4]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[4]->texto }}</textarea>    --}}
                                        Servicios
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12"></div>
                                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-8 col-sm-8 col-xs-8 mx-xxl-auto mx-xl-auto mx-lg-auto mx-md-auto mx-sm-auto mx-xs-auto text-start">
                                        <img src="{{ asset('img/design/inicio/flecha.png') }}" alt="" class="img-fluid">
                                        
                                    </div>
                                </div>
                            </div>
                            </a>
                            
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-9 col-sm-12 col-xs-12"></div>
                        <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-9 col-sm-12 col-xs-12 py-5 text-white text-start" style="line-height: 1.2;">
                            <textarea class="form-control text-start text-white bg-transparent editarajax m-0" id="" rows="10" name="texto" data-id="{{ $elements[6]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[6]->texto }}</textarea>   
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-9 col-sm-12 col-xs-12"></div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-4 col-xs-4 col-5 px-4 fw-bolder text-white text-start">
                            <a href="nosotros.php" class="text-white" style="text-decoration: none;">
                                <p style="border-bottom: 5px solid #44B2E3;">Ver Más</p>
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="row mt-5">
                <div class="col position-relative bg-white py-5">
                    <div class="row">
                        <div class="col-11 px-4 py-5 mx-auto display-1" style="color: #1E4A89;">
                           
                                Productos
                           
                        </div>
                    </div>
                    <div class="row mb-5 py-5">
                     
                        <div class="col-11 mx-auto position-relative">
                            <div class="productos">
                                @if ($productosCont != 0)
                                    @foreach ($productos as $p)
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-10 col-sm-10 col-xs-10 col-10 columna_productos dato-cat categoria{{ $p->categoria }}">
                                        <div class="row">
                                            <div class="col-11 fw-bolder py-3 mx-auto" style="font-size: 14px;">
                                                @foreach ($categorias as $cate_prod)
                                                    @if ($cate_prod->id == $p->categoria)
                                                       
                                                            {{ $cate_prod->categoria }}
                                                       
                                                        
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
                                                       
                                                            {{ $p->nombre }}
                                                       
                                                    </div>
                                                    <div class="col-5 text-end">
                                                        <a href="{{ route('front.productos_detalle', ['producto' => $p->id]) }}" class="text-dark text-decoration-underline" style="font-size: 14px;">
                                                        
                                                                Ver Producto
                                                            
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    @endforeach
                                @else 
                                    
                                        <h2>No hay productos disponibles</h2>   
                                   
                                @endif
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 cont-todo position-absolute top-100 start-0">
                                <div class="row">
                                    <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-xs-12 mx-auto">
                                        <a href="{{ route('front.productos') }}" class="btn btn-todo py-3" style="text-decoration: none; border: 2px solid #1E4A89; color: #1E4A89;">
                                                Ver Todo
                                            
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center flex-column position-absolute top-0 bottom-0 start-0 cuadro">
                        <a href="{{ route('config.seccion.show', ['slug' => 'products']) }}" class="btn btn-outline bg-white">Editar desde la sección "Productos"</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="row">
        {{-- <div class="col banner" style="
            background-image: url('{{ asset('img/design/inicio/banner.png') }}');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            width: 100%;
        "></div> --}}
        <div class="imagen-soluciones shadow-lg" style="
            background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[7]->imagen) }}');
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 800px;
        ">
            <form id="form_imagen-static2" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id_static" value="{{ $elements[7]->id }}">
                <input id="input_imagen-static2" class="m-0 p-0" type="file" name="archivo_s">
                <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_imagen-static2" style="opacity: 100%; border-radius: 26px; background-color: #1E4A89;">Cambiar imagen</label>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col py-5 bg-white">
            <div class="row mt-5">
                <div class="col text-center display-2">
                    Nuestros Clientes
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <span uk-icon="icon: arrow-down; ratio: 2.6;" style="color: #44B2E3;"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center flex-column mt-2 text-center">
                    <h3>Agregar cliente</h3>
                    <form id="form_image_slider2" action="clientesSlider" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                        @csrf
                        <input id="input_slider_img2" class="m-0 p-0" type="file" name="logo">
                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_slider_img2" style="opacity: 100%; !important; border-radius: 26px; background-color: #1E4A89;">Seleccionar archivo</label>
                    </form>
                </div>
            </div>
            <div class="row py-5 mb-5">
                <div class="col-11 mx-auto text-center">
                    <div class="clientes">
                        @if($clientesCont != 0) 
                            @foreach ($clientes as $cli)
                                <div>
                                    <div class="col position-relative" style="
                                        background-image: url('{{ asset('img2/photos/clientes/'.$cli->logo) }}');
                                        background-size: contain;
                                        background-position: center center;
                                        background-repeat: no-repeat;
                                        width: 100%;
                                        height: 80px;
                                    "><div class="col-4 py-3 bg-transparent position-absolute top-0 end-0">
                                            <form action="{{ route('config.seccion.delClientes', [$cli->id]) }}" method="POST" style="display: inline;">						
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                  
                                        
                                   
                                </div>
                            @endforeach
                        @else

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    



    <div class="row">
        <div class="col position-relative" style="background-color: #1E4A89;">
            <div class="row mt-5">
                <div class="col text-center text-white display-2">
                    Envía un Mensaje
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-12 col-xs-12 mx-auto text-center" style="color: #44B2E3;">
                    <textarea class="form-control text-start bg-transparent editarajax m-0" id="" rows="2" name="texto" data-id="{{ $elements[44]->id }}" data-table="Elemento" data-campo="texto" style="color: #44B2E3;">{{ $elements[44]->texto }}</textarea>  
                </div>
            </div>
            <div class="row mb-5 mt-5">
                <div class="col-xxl-8 col-xl-10 col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-9 col-sm-12 col-xs-12 py-xxl-0 py-xl-0 py-lg-0 py-md-2 py-sm-2 py-xs-2 py-2 mx-auto">
                            <input type="text" class="form-control input-mensaje" placeholder="Nombre" disabled>    
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-9 col-sm-12 col-xs-12 py-xxl-0 py-xl-0 py-lg-0 py-md-2 py-sm-2 py-xs-2 py-2 mx-auto">
                            <input type="number" class="form-control input-mensaje" placeholder="Whatsapp" disabled>  
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 py-xxl-0 py-xl-0 py-lg-0 py-md-2 py-sm-2 py-xs-2 py-2 mx-auto">
                            <input type="text" class="form-control input-mensaje" placeholder="Mensaje" disabled>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-9 col-sm-12 col-xs-12 py-xxl-0 py-xl-0 py-lg-0 py-md-2 py-sm-2 py-xs-2 py-2 mx-auto">
                            <button class="btn w-100 btn-outline bg-white text-dark rounded" style="font-size: 13px;  font-weight: bold;" disabled>
                                <div style="color: #1E4A89;">Enviar</div>                                                                                                                                                                                                     
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col d-flex justify-content-center align-items-center flex-column position-absolute top-0 bottom-0 start-0 cuadro">
                <a href="#/" class="btn btn-outline bg-white">No es editable</a>
            </div> --}}
        </div>
    </div>
</div>
@endsection

@section('jsLibExtras2')
<script>
    $(document).ready(function() {
        var slider = $('.slider');

        slider.slick({
            // Opciones del slider
            arrows: false,
        });

        var dotsContainer = $('.slider-dots');
        var slideCount = slider.slick('getSlick').slideCount;

        for (var i = 0; i < slideCount; i++) {
            dotsContainer.append('<li><button></button></li>');
        }

        var dots = dotsContainer.find('button');

        dots.click(function() {
            var index = $(this).parent().index();
            slider.slick('slickGoTo', index);
        });

        slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            dotsContainer.find('li').removeClass('slick-active');
            dotsContainer.find('li').eq(nextSlide).addClass('slick-active');
        });

        slider.on('afterChange', function(event, slick, currentSlide) {
            dots.removeClass('slick-active');
            dots.eq(currentSlide).addClass('slick-active');
        });
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
    $('.categorias_productos').slick({
            autoplay: false,
            dots: false,
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
                    dots: false
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
        });

        $('.productos').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
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
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
    });

    $('.clientes').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
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
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
    });
    
</script>
<script>
    $('#input_slider_img').change(function(e) {
		$('#form_image_slider').trigger('submit');
	});

    $('#input_slider_img2').change(function(e) {
		$('#form_image_slider2').trigger('submit');
	});

    $('#input_imagen-static').change(function(e) {
		$('#form_imagen-static').trigger('submit');
	});

    $('#input_imagen-static2').change(function(e) {
		$('#form_imagen-static2').trigger('submit');
	});
</script>
@endsection

@section('jqueryExtra')

@endsection
