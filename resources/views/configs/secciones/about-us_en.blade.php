@extends('layouts.admin')

@section('cssExtras')

@endsection

@section('jsLibExtras')

@endsection

@section('styleExtras')

<style>
    .dot {
        width: 10px;
        height: 10px;
        background-color: #4CB5E6;
        border-radius: 50%;
    }

</style>
<style>
   .slider-for .img-producto {
        position: relative;
        overflow: hidden;
    }

    .slider-for .img-producto::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        transition: transform 0.3s ease;
        transform: scale(1);
        opacity: 0;
        pointer-events: none;
    }

    .slider-for .img-producto:hover::after {
        opacity: 1;
        transform: scale(1.5); /* Ajusta el nivel de zoom */
    }
</style>

<style>
    .slide-imagen {
        border: 2px solid #44B2E5;
        margin-left: 15px; 
        margin-right: 5px; 
        margin-top: 5px;
        margin-bottom: 5px;
        border-radius: 16px;
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
    @media (min-width: 1400px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -50px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }       

        .img-nosotros {
            height: 900px;
        }

       

    }

    /* xl */
    @media (min-width: 1200px) and (max-width: 1400px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -30px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -60px;
        }       

        .img-nosotros {
            height: 800px;
        }

        

    }

    /* lg */
    @media (min-width: 992px) and (max-width: 1200px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -50px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }     
        
        .img-nosotros {
            height: 700px;
        }

        

    }

    /* md */
    @media (min-width: 768px) and (max-width: 992px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -50px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }     
        
        .img-nosotros {
            height: 600px;
        }

    }

    /* sm */
    @media (min-width: 576px) and (max-width: 768px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            margin-left: -160px;
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -140px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }  
        
        .img-nosotros {
            height: 500px;
        }

    }

    /* xs */
    @media (min-width: 0px) and (max-width: 576px) {
        .cuadro-texto-primero {
            max-height: 130px; 
            margin-left: -120px;
            line-height: 1;
        }

        .cuadro-texto-medio {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -100px;
        }

        .cuadro-texto-ultimo {
            max-height: 130px; 
            line-height: 1; 
            margin-left: -60px;
        }      

        .img-nosotros {
            height: 400px;
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

@endsection

@section('content')
<div class="row mb-4 px-2">
    <div class="col-9">
        <a href="{{ route('config.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i>Back</a>
    </div>
    <div class="col-3 text-center">
        <a href="/admin/config/secciones/about-us_en" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/usa.png') }}" alt=""></a>
        <a href="/admin/config/secciones/about-us" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/mexico.png') }}" alt=""></a>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col bg-white py-5">
            <div class="row">
                <div class="col-11 py-5 mx-auto">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-9 col-sm-12 col-xs-12 col-12 fs-2 mx-auto fw-bolder py-5">
                            <div class="row">
                                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-11 col-sm-11 col-xs-11 col-11 mt-5 mx-auto text-start">
                                   
                                    <textarea class="form-control fs-3 bg-transparent editarajax m-0" id="" rows="3" name="texto" data-id="{{ $elements[33]->id }}" data-table="Elemento" data-campo="texto" style="color: #3378C6;">{{ $elements[33]->texto }}</textarea> 

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto">
                            <div class="row">
                                <div class="col-11 mx-auto">
                                    <div class="row">
                                        <div class="col">
                                            <textarea class="form-control bg-transparent editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[34]->id }}" data-table="Elemento" data-campo="texto" style="color: #1E4A89; font-size: 64px;">{{ $elements[34]->texto }}</textarea> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col py-4">
                                            
                                            <textarea class="form-control bg-transparent editarajax m-0" id="" rows="10" name="texto" data-id="{{ $elements[35]->id }}" data-table="Elemento" data-campo="texto">{{ $elements[35]->texto }}</textarea> 

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col img-nosotros" style="
                    background-image: url('{{ asset('img2/photos/imagenes_estaticas/'.$elements[16]->imagen) }}');
                    background-size: contain;
                    background-position: center center;
                    background-repeat: no-repeat;
                    height: 800px;
                    width: 100%;
                ">
                    <form id="form_imagen-staticn" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_static" value="{{ $elements[16]->id }}">
                        <input id="input_imagen-staticn" class="m-0 p-0" type="file" name="archivo_s">
                        <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_imagen-staticn" style="opacity: 100%; border-radius: 26px; background-color: #1E4A89;">Choose file</label>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mx-auto py-3 text-center display-3" style="color: #1E4A89;">
                    <textarea class="form-control bg-transparent text-center editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[36]->id }}" data-table="Elemento" data-campo="texto" style="color: #1E4A89; font-size: 64px;">{{ $elements[36]->texto }}</textarea> 
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #1E4A89; color: white;">
                        Add new  
                    </button>
                </div>
        
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">New</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('config.seccion.fechasSide') }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col">
                                            <label for="anio">Year</label>
                                            <input type="number" name="anio" min="1900" max="2100" class="form-control" placeholder="" id="yearInput" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <label for="descripcion">Description</label>
                                            <textarea name="descripcion" id="" cols="30" rows="8" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6 text-center mx-auto">
                                            <input type="submit" class="btn btn-outline border border-dark" value="Add new">
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
            <div class="row py-5">
                <div class="col-12">
                    <div class="tiempo">    
                        @if ($contFechas != 0)
                            @foreach ($fechas as $fe)
                                <div>
                                    <div class="col position-relative">
                                        <div class="card border-dark mb-3" style="max-width: 18rem;">
                                            <div class="card-header">
                                                <input type="number" class="form-control bg-transparent fw-bolder text-start editarajax m-0" name="texto" data-id="{{ $fe->id }}" value="{{ $fe->anio }}" data-table="MFecha" data-campo="anio">
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <textarea class="form-control bg-transparent fw-bolder text-start editarajax m-0" id="" rows="4" name="texto" data-id="{{ $fe->id }}" data-table="MFecha" data-campo="texto_en">{{ $fe->texto_en }}</textarea> 
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 py-3 bg-transparent position-absolute top-0 end-0 translate-middle-y mt-4">
                                            <form action="{{ route('config.seccion.delFecha', [$fe->id]) }}" method="POST" style="display: inline;">						
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <h2>No se han añadido fechas a la linea de tiempo.</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
 
<div class="container-fluid" style="background-color: #3378C6;">
    <div class="row">
        <div class="col py-5">
            <div class="row">
                <div class="col-10 mx-auto">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto mt-5 bg-white py-0">
                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12 ">
                                    <div class="row">
                                        <div class="col position-relative text-center py-5">
                                            <img src="{{ asset('img2/photos/imagenes_estaticas/'.$elements[18]->imagen) }}" alt="" class="img-fluid">
                                            <div class="col position-absolute top-0 start-0">
                                                <form id="form_imagen-mission" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_static" value="{{ $elements[18]->id }}">
                                                    <input id="input_imagen-mission" class="m-0 p-0" type="file" name="archivo_s">
                                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_imagen-mission" style="opacity: 100%; border-radius: 26px; background-color: #1E4A89;">Choose file</label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col-11 mx-auto fs-3 mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 mt-xs-5 mt-0 mb-1" style="color: #1E4A89;">
                                            <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[37]->id }}" data-table="Elemento" data-campo="texto" style="color: #1E4A89; font-size: 24px;">{{ $elements[37]->texto }}</textarea> 
                                        </div>
                                    </div>
                                    <div class="row mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-xs-5 mb-5">
                                        <div class="col-11 mx-auto" style="line-height: 1;">
                                            <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="5" name="texto" data-id="{{ $elements[38]->id }}" data-table="Elemento" data-campo="texto" style="line-height: 1;">{{ $elements[38]->texto }}</textarea> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto mt-5 bg-white">
                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col position-relative text-center py-5">
                                            <img src="{{ asset('img2/photos/imagenes_estaticas/'.$elements[21]->imagen) }}" alt="" class="img-fluid">
                                            <div class="col position-absolute top-0 start-0">
                                                <form id="form_imagen-vission" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_static" value="{{ $elements[21]->id }}">
                                                    <input id="input_imagen-vission" class="m-0 p-0" type="file" name="archivo_s">
                                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_imagen-vission" style="opacity: 100%; border-radius: 26px; background-color: #1E4A89;">Choose file</label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col-11 mx-auto fs-3 mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 mt-xs-5 mt-0  mb-1" style="color: #1E4A89;">
                                            <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[39]->id }}" data-table="Elemento" data-campo="texto" style="color: #1E4A89; font-size: 24px;">{{ $elements[39]->texto }}</textarea> 
                                        </div>
                                    </div>
                                    <div class="row mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-xs-5 mb-5">
                                        <div class="col-11 mx-auto" style="line-height: 1;">
                                            <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="5" name="texto" data-id="{{ $elements[40]->id }}" data-table="Elemento" data-campo="texto" style="line-height: 1;">{{ $elements[40]->texto }}</textarea> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto mt-5 bg-white py-0">
                            <div class="row">
                                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col position-relative text-center py-5">
                                            <img src="{{ asset('img2/photos/imagenes_estaticas/'.$elements[24]->imagen) }}" alt="" class="img-fluid">
                                            <div class="col position-absolute top-0 start-0">
                                                <form id="form_imagen-values" action="imgStatic" method="POST"  class="file-upload mt-2" style="" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id_static" value="{{ $elements[24]->id }}">
                                                    <input id="input_imagen-values" class="m-0 p-0" type="file" name="archivo_s">
                                                    <label class="col-12 m-0 p-2 d-flex justify-content-center align-items-center" for="input_imagen-values" style="opacity: 100%; border-radius: 26px; background-color: #1E4A89;">Choose file</label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-12">
                                    <div class="row">
                                        <div class="col-11 mx-auto fs-2 mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-5 mt-sm-5 mt-xs-5 mt-0 mb-1" style="color: #1E4A89;">
                                            <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="1" name="texto" data-id="{{ $elements[41]->id }}" data-table="Elemento" data-campo="texto" style="color: #1E4A89; font-size: 24px;">{{ $elements[41]->texto }}</textarea> 
                                        </div>
                                    </div>
                                    <div class="row mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-xs-5 mb-5">
                                        <div class="col-11 mx-auto" style="line-height: 1;">
                                            <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="5" name="texto" data-id="{{ $elements[42]->id }}" data-table="Elemento" data-campo="texto" style="line-height: 1;">{{ $elements[42]->texto }}</textarea>    
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
<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-11 mx-auto py-5">
            <div class="row">
                <div class="col py-5 text-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" style="background-color: #1E4A89; color: white;">
                        Add certification
                    </button>
                </div>
        
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel2">Nueva Certificación</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('config.seccion.certificacionesSide') }}" method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col">
                                            <label for="certificacion">Certificación</label>
                                            <input type="text" name="certificacion" class="form-control" placeholder="Ingresa el nombre de la certificación" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col">
                                            <label for="descripcion">Descripción</label>
                                            <textarea name="descripcion" id="" cols="30" rows="8" class="form-control" placeholder="Ingresa una breve descripción de la certificación." required></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6 text-center mx-auto">
                                            <input type="submit" class="btn btn-outline border border-dark" value="Agregar certificación">
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
            <div class="row">
                <div class="certificaciones">
                    
                    @if ($contCertificaciones != 0)
                        @foreach ($certificaciones as $cer)
                            <div>
                                <div class="col position-relative">
                                    <div class="card border-0">
                                        <div class="col-6 mx-auto">
                                            <img src="{{ asset('img/design/nosotros/certificado.png') }}" alt="" class="img-fluid certifi">
                                        </div>
                                        <div class="card-body">
                                            <div class="col-12 text-center fw-bolder">
                                                <textarea class="form-control bg-transparent fw-bolder text-start editarajax m-0" id="" rows="1" name="texto" data-id="{{ $cer->id }}" data-table="MCertificacion" data-campo="titulo">{{ $cer->titulo }}</textarea> 
                                            </div>
                                            <div class="col-12 text-center px-0"  style="line-height: 1; font-weight: 500;">
                                                <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="4" name="texto" data-id="{{ $cer->id }}" data-table="MCertificacion" data-campo="descripcion_en" style="line-height: 1">{{ $cer->descripcion_en }}</textarea> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 py-3 bg-transparent position-absolute top-0 end-0">
                                        <form action="{{ route('config.seccion.delCertificacion', [$cer->id]) }}" method="POST" style="display: inline;">						
                                            @csrf
                                            @method('DELETE') 
                                            <button type="submit" class="btn btn-danger btn-block bg-danger rounded-pill"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2>No hay certificados</h2>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jsLibExtras2')
<script>
    $(document).ready(function() {

        $('.bar1, .bar2').show();

        $('.btn-toggle').click(function() {
            $('.bar1, .bar2').toggle();
        });
    });
</script>

<script>
    $('.tiempo').slick({
        dots: false,
        arrows: false, 
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1224,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false
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
    $('.certificaciones').slick({
        dots: false,
        arrows: false, 
        infinite: false,
        speed: 300,
        slidesToShow: 7,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
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
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
    });
</script>
<script>
    $('#input_imagen-staticn').change(function(e) {
		$('#form_imagen-staticn').trigger('submit');
	});

    $('#input_imagen-mission').change(function(e) {
		$('#form_imagen-mission').trigger('submit');
	});

    $('#input_imagen-vission').change(function(e) {
		$('#form_imagen-vission').trigger('submit');
	});

    $('#input_imagen-values').change(function(e) {
		$('#form_imagen-values').trigger('submit');
	});

    const yearInput = document.getElementById('yearInput');

yearInput.addEventListener('input', function() {
  const maxLength = 4; // Número máximo de dígitos permitidos
  if (yearInput.value.length > maxLength) {
    yearInput.value = yearInput.value.slice(0, maxLength); // Limita la longitud del valor
  }
});

</script>
@endsection

@section('jqueryExtra')

@endsection
