<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\ProductosPhoto;
use App\Elemento;
use App\Carrusel;
use App\Politica;
use App\Vacante;
use App\Faq;
use App\Categoria;
use App\Configuracion;
use App\Producto;
use App\MCaracteristicaProducto;
use App\MCategorias;
use App\MCertificacion;
use App\MClientes;
use App\MFecha;
use App\MGaleriaProducto;
use App\MProductos;
use App\MServicios;
use App\MSliderPrincipal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Brian2694\Toastr\Facades\Toastr;

class FrontController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function root() {
		return redirect()->route('front.index', ['leng' => 'esp']);
	}

		public function index($leng = 'esp'){

			$elements = Elemento::all();

			$slider_principal = MSliderPrincipal::all();
			$productos = MProductos::all();
			$clientes = MClientes::all();
			$categorias = MCategorias::all();

			$sliderCont = 0;
	        foreach($slider_principal as $ssp) {
    	        $sliderCont++;
        	}

			$productosCont = 0;
	        foreach($productos as $ppds) {
    	        $productosCont++;
        	}

			$clientesCont = 0;
	        foreach($clientes as $cc) {
    	        $clientesCont++;
        	}

	        $categoriasCont = 0;
    	    foreach($categorias as $catt) {
        	    $categoriasCont++;
        	}

			$pagina = "inicio";

			return view('front.index',compact('elements', 'pagina', 'slider_principal', 'productos', 'clientes', 'categorias', 'sliderCont', 'productosCont', 'clientesCont', 'categoriasCont', 'leng'));
	}

	// public function servicios(Producto $serv){
		
	// 	if($serv->id == null){
	// 		return redirect()->back();
	// 	}
	// 	$seccion = Seccion::find(2);
	// 	$elements = Elemento::where('seccion', $seccion->id)->get();

	// 	$fianzas = Producto::where('activo',1)->where('categoria',1)->get(['id','nombre']);
	// 	$seguros = Producto::where('activo',1)->where('categoria',2)->get(['id','nombre']);
	// 	$servicios = array(
	// 		'fianzas' => $fianzas,
	// 		'seguros' => $seguros,
	// 	);

	// 	$productos_rel = $serv->relacionados()->get()->pluck('otroProducto');

	// 	$productos_rel = Producto::whereIn('id', $productos_rel)->get();

		
	// 	foreach ($productos_rel as $prodimg) {
	// 		$fphoto = ProductosPhoto::where('producto',$prodimg->id)->orderBy('orden','ASC')->get()->first();
	// 		$prodimg->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
	// 	}

	// 	$photo_product = ProductosPhoto::where('producto',$serv->id)->orderBy('orden','ASC')->get();

	// 	// if(!empty($productos_rel->count())){
	// 	// 	dd("viene con datos");
	// 	// }else{
	// 	// 	dd("No viene");
	// 	// }
	// 	// echo($productos_rel);
	// 	// dd($productos_rel);

	// 	$config = Configuracion::first();
		
	// 	return view('front.servicios',compact('elements','servicios','serv','productos_rel','photo_product','config'));
	// }

	public function servicios($leng = 'esp') {
		$elements = Elemento::all();
		$servicios = MServicios::all();

		$contServicios = 0;
		foreach($servicios as $sse) {
			$contServicios++;
		}

		$pagina = "servicios";

		return view('front.servicios', compact('elements', 'pagina', 'contServicios', 'servicios', 'leng'));
	}

	public function productos($leng = 'esp') {
		$elements = Elemento::all();
		$productos = MProductos::paginate(6);
		$categorias = MCategorias::all();


			$productosCont = 0;
	        foreach($productos as $ppds) {
    	        $productosCont++;
        	}

	        $categoriasCont = 0;
    	    foreach($categorias as $catt) {
        	    $categoriasCont++;
        	}

		$pagina = "productos";

		return view('front.productos', compact('elements', 'pagina', 'productos', 'categorias', 'productosCont', 'categoriasCont', 'leng'));
	}

	public function productos_detalle(MProductos $producto, $leng = 'esp') {
		$caracteristicas = MCaracteristicaProducto::all();
		$galeria = MGaleriaProducto::all();
		$categorias = MCategorias::all();
		$productos = MProductos::all();

		$productosCont = 0;
		foreach($productos as $ppds) {
			$productosCont++;
		}

		$categoriasCont = 0;
		foreach($categorias as $catt) {
			$categoriasCont++;
		}

		$galeria_fotos = array();
		foreach($galeria as $gal) {
			if($gal->producto == $producto->id) {
				$galeria_fotos[] = $gal->foto;
			}
		}

		$auxC = 0;
		foreach($categorias as $caaa) {		
			if($caaa->id == $producto->categoria) {
				$auxC = $caaa->id;
				break;
			}
		}

		$caraArray = array();

		foreach($caracteristicas as $carac) {
			if($carac->producto == $producto->id) {
				$caraArray[] = $carac->caracteristica;
			}
		}

		$caraArray_en = array();

		foreach($caracteristicas as $carac2) {
			if($carac2->producto == $producto->id) {
				$caraArray_en[] = $carac2->caracteristica_en;
			}
		}

		$pagina = "productos_detalle";

		return view('front.detalles', compact('pagina', 'producto', 'categorias', 'productos', 'productosCont', 'categoriasCont', 'auxC', 'caraArray', 'caraArray_en', 'galeria_fotos', 'leng'));
	}

	public function getServicio(Request $request){
		$producto = Producto::find($request->service);
		return response()->json($producto,200);
	}

	public function contacto($leng = 'esp'){
		$elements = Elemento::all();
		$config = Configuracion::first();

		$pagina = "contacto";

		return view('front.contacto', compact('elements', 'pagina', 'leng', 'config'));
	}

	public function cambiarIdioma(Request $request, $idioma)
    {
        if (!in_array($idioma, ['es', 'en'])) {
            abort(404);
        }

        app()->setLocale($idioma);

        $traducciones = [
            'bienvenido' => trans('bienvenido'),
            'despedida' => trans('despedida'),
			'inicio' => trans('inicio'),
			'productos' => trans('productos'),
			'servicios' => trans('servicios'),
			'nosotros' => trans('nosotros'),
			'contacto' => trans('contacto'),
			'sectoresespeciaidad' => trans('sectoresespeciaidad'),
			'verproductos' => trans('verproductos'),
			'nosotros2' => trans('nosotros2'),
			'servicios2' => trans('servicios2'),
			'vermas' => trans('vermas'),
			'productos2' => trans('productos2'),
			'vertodo' => trans('vertodo'),
			'nuestrosclientes' => trans('nuestrosclientes'),
			'enviarmensaje' => trans('enviarmensaje'),
			'verpro' => trans('verpro'),
			'nombreform' => trans('nombreform'),
			'mensajeform' => trans('mensajeform'),
			'enviarform' => trans('enviarform'),
			'headerinicio' => trans('headerinicio'),
			'headerproductos' => trans('headerproductos'),
			'headerservicios' => trans('headerservicios'),
			'headernosotros' => trans('headernosotros'),
			'headercontacto' => trans('headercontacto'),
			'footerinicio' => trans('footerinicio'),
			'footerproductos' => trans('footerproductos'),
			'footerservicios' => trans('footerservicios'),
			'footernosotros' => trans('footernosotros'),
			'footercontacto' => trans('footercontacto'),
			'footerfaq' => trans('footerfaq')
        ];

        return response()->json($traducciones);
    }

	public function details(Producto $product){
		// $product = Producto::find($producto);

		$product->categoria = Categoria::find($product->categoria);

		$product->gallery = $product->fotos()->orderBy('orden', 'asc')->get();

		// $variantes = ProductoVariante::where('producto', $product->id)->get();
		$medidas = ProductoMedida::where('producto',$product->id)->orderBy('orden', 'asc')->get();
		// return view('front.detalles', compact('product','variantes','productos_rel','elements'));
		$data = array(
			'product' => $product,
			'medidas' => $medidas,
		);
		return response()->json($data);
		// return $product;
	}

	public function aboutus($leng = 'esp'){
		$elements  = Elemento::all();
		$certificaciones= MCertificacion::all();
		$fechas = MFecha::all();

		$pagina = "aboutus";

		$fechas_array = [];
		$primero = 0;
		$ultimo = 0;
		$contFecha = 0;
		$unico = 0;
		foreach($fechas as $fech) {
			$fechas_array[] = $fech->toArray();

			if($contFecha == 0) {
				$primero = $contFecha;
				$unico = 1;
			}

			if($contFecha > 0) {
				$unico = 0;
			}

			$contFecha++;
		}

		$ultimo = $contFecha - 1;

		return view('front.aboutus', compact('elements', 'pagina', 'certificaciones', 'fechas', 'contFecha', 'primero', 'ultimo', 'unico', 'leng'));
		// return view('front.aboutus');
	}


	public function admin() {
		$data = Configuracion::first();

		return view('front.admin_fake', compact('data'));
	}

	public function adminp(Request $request) {
		$data = Configuracion::first();

		if($request->email == 'admin@wozial.com') {
			if($request->password == 'wozial') {
				return redirect()->route('config.index');
			}
		}

		return view('front.admin_fake', compact('data'));
	}


	public function vacantes(){
		$seccion = Seccion::find(4);
		$elements = Elemento::where('seccion', $seccion->id)->get();
		$vacantes = Vacante ::where('activo',1)->get();

		//$vacantes->requisitos=explode(";",$vacantes->requisitos);
		//dd($vacantes[]->requisitos=explode(";",$vacantes[]->requisitos));
		return view('front.vacantes',compact('elements','vacantes'));
		// return view('front.aboutus');
	}
	public function soluciones(){
		$seccion = Seccion::find(3);
		$elements = Elemento::where('seccion', $seccion->id)->get();
		return view('front.soluciones',compact('elements'));
		// return view('front.aboutus');
	}
	public function garantias(){
		$politica = Politica::find(5);
		return view('front.politicas',compact("politica"));
	}

	public function aviso(){
		$politica = Politica::find(1);
		return view('front.politicas',compact("politica"));
	}

	public function pagos(){
		$politica = Politica::find(2);
		return view('front.politicas',compact("politica"));
	}

	public function devoluciones(){
		$politica = Politica::find(3);
		return view('front.politicas',compact("politica"));
	}

	public function tyc(){
		$politica = Politica::find(4);
		return view('front.politicas',compact("politica"));
	}

	public function preguntas($leng = 'esp'){
		$preguntas = Faq::all();

		$pagina = "preguntas";

		return view('front.faq',compact("preguntas", "pagina", "leng"));
	}

	// correo de contacto normal
	public function mailcontact(Request $request){

		
		
		$validate = Validator::make($request->all(),[
			'tipoForm' => 'required',
			'nombre' => 'required',
			'empresa' => 'nullable',
			'correo' => 'nullable',
			'whatsapp' => 'required|numeric',
			'mensaje' => 'nullable',
		],[],[]);

		if ($validate->fails()) {
			\Toastr::error('Error, se requieren todos los datos');
			return redirect()->back();
		}

		$data = array(
			'tipoForm' => $request->tipoForm,
			'nombre' => $request->nombre,
			'empresa' => $request->empresa,
			'correo' => $request->correo,
			'whatsapp' => $request->whatsapp,
			'mensaje' => $request->mensaje,
			'asunto' => 'Formulario de contacto',
			'hoy' => Carbon::now()->format('d-m-Y')
		);
		
		$html = view('front.mailcontact',compact('data'));

		$config = Configuracion::first();

		$mail = new PHPMailer;

		
		
		try {
			$mail->isSMTP();
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
			// $mail->SMTPDebug = 2;
			$mail->Host = $config->remitentehost;
			$mail->SMTPAuth = true;
			$mail->Username = $config->remitente;
			$mail->Password = $config->remitentepass;
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port = $config->remitenteport;
			
			$mail->SetFrom($config->remitente, 'Milertek (Formulario Contacto)');
			$mail->isHTML(true);
			
			$mail->addAddress($config->destinatario,'Sektor Contacto');
			if (!empty($config->destinatario2)) {
				$mail->AddBCC($config->destinatario2,'Sektor Contacto');
			}
			$mail->Subject = $data['asunto'];
			$mail->msgHTML($html);
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			$mail->send();

			
			\Toastr::success('Correo enviado Exitosamente!');
				return redirect()->back();
		} catch (phpmailerException $e) {
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
			echo $e->getMessage(); //Boring error messages from anything else!
		}
		

	}

	

}
