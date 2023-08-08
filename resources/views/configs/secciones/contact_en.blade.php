@extends('layouts.admin')

@section('cssExtras')

@endsection

@section('jsLibExtras')

@endsection

@section('styleExtras')
<style>
    /* input::placeholder, textarea::placeholder {
        font-weight: bold;
    } */

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

    /* xxl */
    @media (min-width: 1400px) {
        .mapa {
            height: 800px;
            width: 100%;
        }

    }

    /* xl */
    @media (min-width: 1200px) and (max-width: 1400px) {
        .mapa {
            height: 700px;
            width: 100%;
        }

    }

    /* lg */
    @media (min-width: 992px) and (max-width: 1200px) {
        .mapa {
            height: 600px;
            width: 100%;
        }

    }

    /* md */
    @media (min-width: 768px) and (max-width: 992px) {
        .mapa {
            height: 500px;
            width: 100%;
        }

    }

    /* sm */
    @media (min-width: 576px) and (max-width: 768px) {
        .mapa {
            height: 400px;
            width: 100%;
        }
    }

    /* xs */
    @media (min-width: 0px) and (max-width: 576px) {
        .mapa {
            height: 300px;
            width: 100%;
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
@endsection

@section('content')
<div class="row mb-4 px-2">
    <div class="col-9">
        <a href="{{ route('config.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
    </div>
    <div class="col-3 text-center">
        <a href="/admin/config/secciones/contact_en" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/usa.png') }}" alt=""></a>
        <a href="/admin/config/secciones/contact" class="col col-md-2  darken-2 text-white mr-auto"><img src="{{ asset('img/design/inicio/mexico.png') }}" alt=""></a>
    </div>
</div>
	
<div class="container-fluid">
    <div class="row" style="background-color: #3378C6;"> 
        <div class="col display-3 text-white text-center py-3">
            Contact
        </div>
    </div>
    <div class="row bg-white">
        <div class="col-10 mx-auto py-5">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 col-12 mx-auto py-5 position-relative">
                    <div class="row">
                        <div class="col-xxl-1 col-xl-1 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12"></div>
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-11 col-sm-11 col-xs-11 col-11 py-1">
                            <textarea class="form-control bg-transparent text-start editarajax m-0" id="" rows="5" name="texto" data-id="{{ $elements[43]->id }}" data-table="Elemento" data-campo="texto" style="line-height: 1; color: #44B2E5;">{{ $elements[43]->texto }}</textarea>   
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col mx-xxl-2 mx-xl-3 mx-lg-0 mx-md-0 mx-sm-0 mx-xs-0 mx-0">
                            <div class="row">
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 py-1 text-end">
                                    <img src="{{ asset('img/design/contacto/gps.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10 col-sm-10 col-xs-10 col-10 fw-bolder py-1" style="line-height: 1;">
                                    <textarea class="form-control bg-transparent text-start editarajax m-0" id="" cols="30" rows="2" name="texto" data-id="{{ $data->id }}" data-table="Elemento" data-campo="texto" style="line-height: 1;">{{ $data->direccion }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col mx-xxl-2 mx-xl-3 mx-lg-0 mx-md-0 mx-sm-0 mx-xs-0 mx-0">
                            <div class="row">
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-2 py-1 text-end">
                                    <img src="{{ asset('img/design/contacto/mail.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10 col-sm-10 col-xs-10 col-10 fw-bolder py-1" style="line-height: 1;">
                                    <textarea class="form-control bg-transparent text-start editarajax m-0" id="" cols="30" rows="2" name="texto" data-id="{{ $data->id }}" data-table="Elemento" data-campo="texto" style="line-height: 1;">{{ $data->destinatario }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col position-relative">
                            <div class="row">
                                <div class="col-xxl-1 col-xl-1 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12"></div>
                                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-11 col-sm-11 col-xs-11 col-11 py-1">
                                    <a href="" class="px-2" uk-icon="icon: whatsapp; ratio: 1.6;" style="color: #44B2E5;"></a>
                                    <a href="" class="px-2" uk-icon="icon: facebook; ratio: 1.6;" style="color: #44B2E5;"></a>
                                    <a href="" class="px-2" uk-icon="icon: instagram; ratio: 1.6;" style="color: #44B2E5;"></a>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center flex-column position-absolute top-0 bottom-0 start-0 cuadro">
                                <a href="{{ route('config.contact') }}" class="btn btn-outline bg-white">Press this button to edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-10 col-sm-12 col-xs-12 col-12 mx-auto py-5 position-relative">
                    <form action="vendor/Correos/mail.php" method="POST">
                        <div class="row mt-2">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-auto py-2">
                                <input type="text" name="nombre" class="form-control" placeholder="Name" style="border: 2px solid #44B2E5; box-shadow: none;"> 
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-auto py-2">
                                <input type="text" name="empresa" class="form-control" placeholder="Company" style="border: 2px solid #44B2E5; box-shadow: none;">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-auto py-2">
                                <input type="number" name="whatsapp" class="form-control" placeholder="Whatsapp" style="border: 2px solid #44B2E5; box-shadow: none;">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-auto py-2">
                                <input type="email" name="correo" class="form-control" placeholder="Email" style="border: 2px solid #44B2E5; box-shadow: none;">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col py-3">
                                <textarea name="mensaje" id="" cols="30" rows="4" class="form-control" placeholder="Message" style="border: 2px solid #44B2E5; box-shadow: none;"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-auto mx-sm-0 mx-xs-0 mx-0 py-2">
                                <input type="submit" class="form-control bg-white" value="Send" style="border: 2px dashed #44B2E5; border-radius: 16px; color: #1E4A89;">
                            </div>
                        </div>
                    </form>
                    <div class="col d-flex justify-content-center align-items-center flex-column position-absolute top-0 bottom-0 start-0 cuadro">
                        <a href="#/" class="btn btn-outline bg-white">not editable</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col position-relative px-0">
            <!--Google map  map-container-->
            <div id="map-container-google-1" >
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14934.698168984944!2d-103.3966255!3d20.6421186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0ed241a9bb%3A0xbb4c3906c38265fd!2sWozial%20Marketing%20Lovers!5e0!3m2!1ses-419!2smx!4v1685136732153!5m2!1ses-419!2smx" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--Google Maps-->
            <div class="col d-flex justify-content-center align-items-center flex-column position-absolute top-0 bottom-0 start-0 cuadro">
                <a href="{{ route('config.contact') }}" class="btn btn-outline bg-white">Press this button to edit</a>
            </div>
        </div>
    </div>
 </div>
@endsection

@section('jsLibExtras2')

@endsection

@section('jqueryExtra')

@endsection
