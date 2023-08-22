<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\Elemento;
use App\MCaracteristicaProducto;
use App\MCategorias;
use App\MCertificacion;
use App\MClientes;
use App\MFecha;
use App\MOrder;
use App\User;
use App\MGaleriaProducto;
use App\MProductos;
use App\MServicios;
use App\MSliderPrincipal;
use App\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
			$seccion = Seccion::all();
            
			foreach ($seccion as $sec) {
				$sec->elements = $sec->elementos()->count();
			}

          
			return view('configs.secciones.index',compact('seccion'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function show($seccion) {
		$elements = Elemento::all();
        $caracteristicas_producto = MCaracteristicaProducto::all();
        $categorias = MCategorias::all();
        $certificaciones = MCertificacion::all();
        $clientes = MClientes::all();
        $fechas = MFecha::all();
        $galeria_producto = MGaleriaProducto::all();
        $productos = MProductos::all();
        $servicios = MServicios::all();
        $slider_principal = MSliderPrincipal::all();
        $data = Configuracion::first();
        $ordenes = MOrder::all();
        $usuarios = User::all();

        $ruta = 'configs.secciones.'.$seccion;

        $conts = 0;
        foreach($slider_principal as $sp) {
            $conts++;
        }

        $clientesCont = 0;
        foreach($clientes as $cc) {
            $clientesCont++;
        }

        $categoriasCont = 0;
        foreach($categorias as $catt) {
            $categoriasCont++;
        }

        $contServ = 0;
        foreach($servicios as $sss) {
            $contServ++;
        }

        $contCertificaciones = 0;
        foreach($certificaciones as $ccer) {
            $contCertificaciones++;
        }

        $contFechas = 0;
        foreach($fechas as $ffe) {
            $contFechas++;
        }

        $contProductos = 0;
        foreach($productos as $prod) {
            $contProductos++;
        }

        $productosCont = 0;
	        foreach($productos as $ppds) {
    	        $productosCont++;
        	}

        $contGaleria = 0;
        foreach($galeria_producto as $gaa) {
            $contGaleria++;
        }

		return view($ruta, compact('elements', 'caracteristicas_producto', 'categorias', 'certificaciones', 'clientes', 'fechas', 'galeria_producto', 'productos', 'servicios', 'slider_principal', 'conts', 'clientesCont', 'categoriasCont', 'contServ', 'contCertificaciones', 'contFechas', 'contProductos', 'contGaleria', 'productosCont', 'data', 'ordenes', 'usuarios'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccion $seccion)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $seccion) {

		if (empty($seccion)) {
			\Toastr::error('Error, intentalo mas tarde');
			return redirect()->back();
		}

		$seccion = Seccion::find($seccion);

		$file = $request->file('portada');
		$oldFile = $seccion->portada;
		$extension = $file->getClientOriginalExtension();
		$namefile = Str::random(30) . '.' . $extension;

		\Storage::disk('local')->put("/img/photos/seccions/" . $namefile, \File::get($file));

		\Storage::disk('local')->delete("/img/photos/seccions/" . $oldFile);

		$seccion->portada = $namefile;

		$seccion->save();
		\Toastr::success('Guardado');
		return redirect()->back();
    }


    public function imgStatic(Request $request) {
        $elem = Elemento::find($request->id_static);

        if ($request->hasFile('archivo_s')) {
            $oldFile = $elem->imagen;
            $file = $request->file('archivo_s');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/imagenes_estaticas/".$namefile , \File::get($file));
            \Storage::disk('local')->delete("/img2/photos/imagenes_estaticas/".$oldFile);

            $elem->imagen = $namefile;
        }

        $elem->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function imgSider(Request $request) {
        $slider = new MSliderPrincipal;
        // dd($request->archivo);
        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/slider_principal/".$namefile , \File::get($file));

            $slider->imagen = $namefile;
        }

        // if ($request->video) {
        //     $slider->video = $request->video;
        // }

        $slider->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function delSide(MSliderPrincipal $side) {
        $imgDel = 'img2/photos/slider_principal/'.$side->imagen;
        unlink($imgDel);

        $side->delete();

        return redirect()->back();
    }


    public function clientesSlider(Request $request) {
        $slider = new MClientes;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/clientes/".$namefile , \File::get($file));

            $slider->logo = $namefile;
        }

        $slider->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function delClientes(MClientes $cliente) {
        $imgDel = 'img2/photos/clientes/'.$cliente->logo;
        unlink($imgDel);

        $cliente->delete();

        return redirect()->back();
    }


    public function categoriaSlider(Request $request) {
        $slider = new MCategorias;

        if ($request->hasFile('imagen_cate')) {
            $file = $request->file('imagen_cate');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/categorias/".$namefile , \File::get($file));

            $slider->icono = $namefile;
            $slider->categoria = $request->cate_esp;
            $slider->categoria_en = $request->cate_eng;
        }

        $slider->save();
        
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function delCategoria(MCategorias $categoria) {
        $imgDel = 'img2/photos/categorias/'.$categoria->icono;
        unlink($imgDel);

        $productos = MProductos::all();
        foreach($productos as $prod) {
            if($prod->categoria == $categoria->id) {
                $this->delProducto($prod);
            }
        }

        $categoria->delete();

        return redirect()->back();
    }


    public function productoSide(Request $request) {
        
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'nombre_en' => 'required|string|max:255',
            'descripcion_en' => 'required|string',
            'precio_mxn' => 'required|Integer',
            'precio_usd' => 'required|Integer',
            'ficha_tecnica' => 'nullable|mimes:pdf',
            'imagen_principal' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
            'caracteristicas.*' => 'nullable|string|max:255',
            'caracteristicas3.*' => 'nullable|string|max:255',
            'categoriaProducto' => 'required|integer',
        ]);

        // Comprobar si la validación falla
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $producto = new MProductos;
        $producto->categoria = $request->categoriaProducto;
        $producto->save();

        $caracteristicas = $request->input('caracteristicas');
        $caracteristicas_en = $request->input('caracteristicas3');
        
        $producto_aux = $producto->id;

        $caracteristicas_general = array_map(null, $caracteristicas, $caracteristicas_en);

        foreach($caracteristicas_general as $caracteristica) {
            $caracteisticas_producto = new MCaracteristicaProducto;

            [$cara, $cara_en] = $caracteristica;

            $caracteisticas_producto->producto = $producto_aux;
            $caracteisticas_producto->caracteristica = $cara;
            $caracteisticas_producto->caracteristica_en = $cara_en;

            $caracteisticas_producto->save();
        }


        if ($request->hasFile('ficha_tecnica')) {
            $pdf = $request->file('ficha_tecnica');
            $extension = $pdf->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/productos/ficha_tecnica/".$namefile , \File::get($pdf));

            $producto->ficha_tecnica = $namefile;
        } else {
            return redirect()->back();
        }

        if ($request->hasFile('imagen_principal')) {
            $foto = $request->file('imagen_principal');
            $extension = $foto->getClientOriginalExtension();
            $namefile2 = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/productos/galeria/".$namefile2 , \File::get($foto));

            $producto->foto_principal = $namefile2;
        } else {
            return redirect()->back();
        }

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->nombre_en = $request->nombre_en;
        $producto->descripcion_en = $request->descripcion_en;
        $producto->precio_mxn = $request->precio_mxn;
        $producto->precio_usd = $request->precio_usd;

        $producto->update();
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function productoUpdate(Request $request, MProductos $producto) {
        if($request->tipof == "pdf") {
            if ($request->hasFile('ficha')) {
                $oldFile = $producto->ficha_tecnica;
                $file = $request->file('ficha');
                $extension = $file->getClientOriginalExtension();
                $namefile = Str::random(30).'.'.$extension;

                \Storage::disk('local')->put("/img2/photos/productos/ficha_tecnica/".$namefile , \File::get($file));
                \Storage::disk('local')->delete("/img2/photos/productos/ficha_tecnica/".$oldFile);

                $producto->ficha_tecnica = $namefile;
                $producto->update();
                
                \Toastr::success('Guardado');
                return redirect()->back();
            }
        } else if($request->tipof == "fotos") {
            if ($request->hasFile('imagen_g')) {
                $galeria = new MGaleriaProducto;

                $file = $request->file('imagen_g');
                $extension = $file->getClientOriginalExtension();
                $namefile = Str::random(30).'.'.$extension;

                \Storage::disk('local')->put("/img2/photos/productos/galeria/".$namefile , \File::get($file));

                $galeria->producto = $producto->id;
                $galeria->foto = $namefile;
                $galeria->save();
                
                \Toastr::success('Guardado');
                return redirect()->back();
            }
        }
    }


    public function imgProducto(Request $request, MProductos $producto) {
        if ($request->hasFile('foott')) {
            $oldFile = $producto->foto_principal;
            $file = $request->file('foott');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;
    
            \Storage::disk('local')->put("/img2/photos/productos/galeria/".$namefile , \File::get($file));
            \Storage::disk('local')->delete("/img2/photos/productos/galeria/".$oldFile);
                
            $producto->foto_principal = $namefile;

            $producto->update();
            \Toastr::success('Guardado');
            return redirect()->back();
        }
    }


    public function galeriaSide(MProductos $producto) {
        $galeria = MGaleriaProducto::all();

        return view('configs.secciones.galeria', compact('producto', 'galeria'));
    }


    public function addGaleriaSide(Request $request) {
        // dd($request);
        $galeria = new MGaleriaProducto;

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/productos/galeria/".$namefile , \File::get($file));

            $galeria->producto = $request->producto;
            $galeria->imagen = $namefile;
        }

        $galeria->save();

        \Toastr::success('Guardado');
		return redirect()->back();
    }


    public function delGaleriaSide(MGaleriaProducto $galeria) {
        $fotoGal = "img2/photos/productos/galeria/".$galeria->foto;
        unlink($fotoGal);

        $galeria->delete();

        \Toastr::success('Guardado');
        return redirect()->back();
    }

    public function imgSiderGaleria(Request $request) {
        $galeria = new MGaleriaProducto;
        // dd($request->archivo);
        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/productos/galeria/".$namefile , \File::get($file));

            $galeria->producto = $request->producto_padre;
            $galeria->foto = $namefile;
        }

        $galeria->save();
        
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function delProducto(MProductos $producto) {
        $caracteristicas_aux = MCaracteristicaProducto::all();
        $galeria_aux = MGaleriaProducto::all();
        $id_aux = $producto->id;

        $imagen = "img2/photos/productos/galeria/".$producto->foto_principal;
        $pdf = "img2/photos/productos/ficha_tecnica/".$producto->ficha_tecnica;

        unlink($imagen);
        unlink($pdf);

        foreach($caracteristicas_aux as $cara) {
            if($cara->producto == $id_aux) {
                $cara->delete();
            }
        }

        foreach($galeria_aux as $ga) {
            if($ga->producto == $id_aux) {
                $this->delGaleriaSide($ga);
                // $img_ga_aux = "img2/photos/productos/galeria/".$ga->foto;
                // unlink($img_ga_aux);
                // $ga->delete();
            }
        }

        $producto->delete();
        return redirect()->back();
    }


    public function caracteristicasSide(Request $request, MProductos $producto) {

        // dd($request);

        $caracteristicas = $request->input('caracteristicas');
        $caracteristicas_en = $request->input('caracteristicas3');
        
        $producto_aux = $producto->id;

        $caracteristicas_general = array_map(null, $caracteristicas, $caracteristicas_en);
        
        foreach($caracteristicas_general as $caracteristica) {
            $caracteisticas_producto = new MCaracteristicaProducto;

            [$cara, $cara_en] = $caracteristica;

            $caracteisticas_producto->producto = $producto_aux;
            $caracteisticas_producto->caracteristica = $cara;
            $caracteisticas_producto->caracteristica_en = $cara_en;

            $caracteisticas_producto->save();
        }

        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function delCaracteristica(MCaracteristicaProducto $caracteristica) {
        // dd($caracteristica);
        $caracteristica->delete();

        return redirect()->back();
    }


    public function servicioSide(Request $request) {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'descripcion' => 'required',
            'nombre_en' => 'required',
            'descripcion_en' => 'required',
            'imagen_servicio' => 'required|image|mimes:jpeg,png,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $servicio = new MServicios;

        if ($request->hasFile('imagen_servicio')) {
            $file = $request->file('imagen_servicio');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;

            \Storage::disk('local')->put("/img2/photos/servicios/".$namefile , \File::get($file));

            $servicio->foto = $namefile;
        }

        $servicio->nombre = $request->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->nombre_en = $request->nombre_en;
        $servicio->descripcion_en = $request->descripcion_en;

        $servicio->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function imgServicio(Request $request, MServicios $servicio) {
        if ($request->hasFile('archivo_s')) {
            $oldFile = $servicio->foto;
            $file = $request->file('archivo_s');
            $extension = $file->getClientOriginalExtension();
            $namefile = Str::random(30).'.'.$extension;
    
            \Storage::disk('local')->put("/img2/photos/servicios/".$namefile , \File::get($file));
            \Storage::disk('local')->delete("/img2/photos/servicios/".$oldFile);
            
            $servicio->foto = $namefile;

            $servicio->update();
            \Toastr::success('Guardado');
            return redirect()->back();
        }
    }


    public function delServicio(MServicios $servicio) {
        $imgDel = 'img2/photos/servicios/'.$servicio->foto;
        unlink($imgDel);

        $servicio->delete();

        return redirect()->back();
    }


    public function fechasSide(Request $request) {
        $validator = Validator::make($request->all(), [
            'anio' => 'required',
            'descripcion' => 'required',
            'descripcion_en' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $fecha = new MFecha;

        $fecha->anio = $request->anio;
        $fecha->texto = $request->descripcion;
        $fecha->texto_en = $request->descripcion_en;

        $fecha->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function delFecha(MFecha $fecha) {
        $fecha->delete();

        return redirect()->back();
    }


    public function certificacionesSide(Request $request) {
        $validator = Validator::make($request->all(), [
            'certificacion' => 'required',
            'descripcion' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $certificacion = new MCertificacion;

        $certificacion->titulo = $request->certificacion;
        $certificacion->descripcion = $request->descripcion;

        $certificacion->save();
        \Toastr::success('Guardado');
        return redirect()->back();
    }


    public function delCertificacion(MCertificacion $certificacion) {
        $certificacion->delete();

        return redirect()->back();
    }

    

    public function usersList() {
        $ordenes = MOrder::all();

        return view('configs.secciones.carts', compact('ordenes'));
    }

    public function usuario_detalle($usuario) {
        $usuario = User::find($usuario);

        return view('configs.secciones.usuarios', compact('usuario'));
    }

    public function lista_usuarios($leng = 'esp') {
        $usuarios = User::all();

        return view('configs.secciones.users', compact('usuarios'));
    }

    public function checkUpdate(Request $request, $order)
    {
        $order = MOrder::find($order);
        $order->entregado = $request->estado;
        $order->update();
        return redirect()->route('config.seccion.usersList');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seccion $seccion)
    {
        //
    }
}
