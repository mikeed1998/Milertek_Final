
    <div class="row mt-5 px-0 bg-white">
        <div class="col mx-auto">
            <div class="row" style="border-bottom: 3px dashed black;">
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-xxl-1"></div>
                        <div class="col-xxl-1 col-xl-1 col-lg-2 col-md-2 col-sm-2 mx-auto col-xs-2 px-1 py-xxl-5 py-xl-4 py-lg-4 py-md-1 py-sm-3 py-xs-2 py-2 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-1 mt-xs-1 mt-1 fw-bolder text-center">
                            @if ($leng == 'eng')
                                <a href="{{ route('front.index', ['leng' => 'eng']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    HOME
                                </a>
                            @else 
                                <a href="{{ route('front.index', ['leng' => 'esp']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    INICIO
                                </a>
                            @endif
                        </div>
                        <div class="col-xxl-1 col-xl-1 col-lg-2 col-md-2 col-sm-2 mx-auto col-xs-2 px-1 py-xxl-5 py-xl-4 py-lg-4 py-md-1 py-sm-3 py-xs-2 py-2 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-1 mt-xs-1 mt-1 fw-bolder text-center">
                            @if ($leng == 'eng')
                                <a href="{{ route('front.productos', ['leng' => 'eng']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    PRODUCTS
                                </a>
                            @else 
                                <a href="{{ route('front.productos', ['leng' => 'esp']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    PRODUCTOS
                                </a>
                            @endif
                        </div>
                        <div class="col-xxl-1 col-xl-1 col-lg-2 col-md-2 col-sm-2 mx-auto col-xs-2 px-1 py-xxl-5 py-xl-4 py-lg-4 py-md-1 py-sm-3 py-xs-2 py-2 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-1 mt-xs-1 mt-1 fw-bolder text-center">
                            @if ($leng == 'eng')
                                <a href="{{ route('front.servicios', ['leng' => 'eng']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    SERVICES
                                </a>
                            @else 
                                <a href="{{ route('front.servicios', ['leng' => 'esp']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    SERVICIOS
                                </a>
                            @endif
                        </div>
                        <div class="col-xxl-1 col-xl-1 col-lg-2 col-md-2 col-sm-2 mx-auto col-xs-2 px-1 py-xxl-5 py-xl-4 py-lg-4 py-md-1 py-sm-3 py-xs-2 py-2 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-1 mt-xs-1 mt-1 fw-bolder text-center">
                            @if ($leng == 'eng')
                                <a href="{{ route('front.aboutus', ['leng' => 'eng']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    ABOUT US
                                </a>
                            @else 
                                <a href="{{ route('front.aboutus', ['leng' => 'esp']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    NOSOTROS
                                </a>
                            @endif
                        </div>
                        <div class="col-xxl-1 col-xl-1 col-lg-2 col-md-2 col-sm-2 mx-auto col-xs-2 px-1 py-xxl-5 py-xl-4 py-lg-4 py-md-1 py-sm-3 py-xs-2 py-2 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-1 mt-xs-1 mt-1 fw-bolder text-center">
                            @if ($leng == 'eng')
                                <a href="{{ route('front.contacto', ['leng' => 'eng']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    CONTACT
                                </a>
                            @else 
                                <a href="{{ route('front.contacto', ['leng' => 'esp']) }}" class="text-dark" style="text-decoration: none; font-size: 14px;">
                                    CONTACTO
                                </a>
                            @endif
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-2 col-sm-12 col-xs-12 py-xxl-5 py-xl-4 py-lg-4 py-md-1 py-sm-2 py-xs-2 py-2 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-3 mt-sm-1 mt-xs-1 mt-1 text-center" style="color:#44B2E3;">
                            @if ($leng == 'eng')
                                <a href="{{ route('front.preguntas', ['leng' => 'eng']) }}" class="text-dark" style="font-size: 14px; color:#44B2E3;">
                                    FAQ
                                </a>
                            @else 
                                <a href="{{ route('front.preguntas', ['leng' => 'esp']) }}" class="text-dark" style="font-size: 14px; color:#44B2E3;">
                                    Preguntas Frecuentes
                                </a>
                            @endif
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 py-1">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12"></div>
                        <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-12 col-sm-12 col-xs-12 fw-bolder text-start py-xxl-5 py-xl-4 py-lg-4 py-md-4 py-sm-1 py-xs-1">
                            Tel. 33 33 33 33 33
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-5">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-9 col-xs-9 col-9 mx-xxl-0 mx-xl-0 mx-lg-0 mx-md-0 mx-sm-auto mx-xs-auto mx-auto text-center py-xxl-5 py-xl-5 py-lg-5 py-md-5 py-sm-2 py-xs-2 py-3">
                    <img src="{{ asset('img/design/inicio/Logo_02.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-4 col-sm-12 col-xs-12 py-xxl-5 py-xl-5 py-lg-5 py-md-5 py-sm-2 py-xs-2 py-3">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12 mx-auto">
                        Calzada de los Cipreses 7164 Zapopan Mﾃｩxico
                        Contacto@milertek.com
                        </div>
                        <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-xs-12 text-xxl-start text-xl-start text-lg-start text-md-start text-sm-center text-xs-center text-center py-xxl-5 py-xl-5 py-lg-5 py-md-5 py-sm-2 py-xs-2 py-3">
                    <a href="" class="px-2 mt-4" uk-icon="icon: whatsapp; ratio: 1.6;" style="color: #44B2E3;"></a>
                    <a href="" class="px-2 mt-4" uk-icon="icon: facebook; ratio: 1.6;" style="color: #44B2E3;"></a>
                    <a href="" class="px-2 mt-4" uk-icon="icon: instagram; ratio: 1.6;" style="color: #44B2E3;"></a>
                    {{-- <a href=""><i class="fa-brands fa-whatsapp"></i></a> --}}
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col py-2 text-center text-white" style="background-color: #1E4A89;">
            MILERTEK 2023 TODOS LOS DERECHOS RESERVADOS DISE&Ntilde;O DE WOZIAL
        </div>
    </div>


<script>
    document.querySelectorAll('.btn-idioma').forEach(button => {
        button.addEventListener('click', function() {
            cambiarIdioma(this.getAttribute('data-idioma'));
        });
    });

    function cambiarIdioma(idioma) {
        fetch(`/cambiarIdioma/${idioma}`)
            .then(response => response.json())
            .then(data => actualizarContenido(data));
    }

    function actualizarContenido(data) {
        // Actualizar el contenido de los elementos con las nuevas traducciones
        document.getElementById('texto-footerinicio').textContent = data.footerinicio;
        document.getElementById('texto-footerproductos').textContent = data.footerproductos;
        document.getElementById('texto-footerservicios').textContent = data.footerservicios;
        document.getElementById('texto-footernosotros').textContent = data.footernosotros;
        document.getElementById('texto-footercontacto').textContent = data.footercontacto;
        document.getElementById('texto-footerfaq').textContent = data.footerfaq;

    }
</script>