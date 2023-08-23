<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.front');
// });

use Carbon\Carbon;

Route::name('front.')->group(function(){
	Route::get('/', 'FrontController@root')->name('root');
	Route::get('/home/{leng?}', 'FrontController@index')->name('index');
	Route::get('nosotros/{leng?}', 'FrontController@aboutus')->name('aboutus');
	Route::get('productos/{leng?}', 'FrontController@productos')->name('productos');
	Route::get('productos_detalle/{producto}/{leng?}', 'FrontController@productos_detalle')->name('productos_detalle');
	Route::get('servicios/{leng?}', 'FrontController@servicios')->name('servicios');
	Route::post('getServicio', 'FrontController@getServicio')->name('getServicio');
	Route::get('contacto/{leng?}', 'FrontController@contacto')->name('contacto');
	Route::get('vacantes', 'FrontController@vacantes')->name('vacantes');
	Route::get('soluciones', 'FrontController@soluciones')->name('soluciones');
	Route::get('productos/{product?}', 'FrontController@details')->name('details');
	Route::get('preguntas/{leng?}', 'FrontController@preguntas')->name('preguntas');
	Route::get('/cambiarIdioma/{idioma}', 'FrontController@cambiarIdioma');
	Route::get('/cambiar-idioma2/{idioma}', function ($idioma) {
		if (in_array($idioma, ['es', 'en'])) {
			session(['locale' => $idioma]);
		}
		return back();
	})->name('cambiarIdioma2');
	Route::get('/admin', 'FrontController@admin')->name('admin');
	Route::post('/adminp', 'FrontController@adminp')->name('adminp');
});


// USUARIOS (LOGIN REGISTER)
Route::get('/register/{leng?}', 'UserController@getRegister')->name('user.register')->middleware('guest');
Route::post('/signup/{leng?}', 'UserController@postSignup')->name('user.signup')->middleware('guest');
Route::get('/login/{leng?}', 'UserController@getLogin')->name('user.login')->middleware('guest');
Route::post('/signin/{leng?}', 'UserController@postSignin')->name('user.signin')->middleware('guest');
Route::get('/perfil/{leng?}', 'UserController@getProfile')->name('user.profile')->middleware('auth');
Route::get('/logout/{leng?}', 'UserController@getLogout')->name('user.logout')->middleware('auth');

// CARRITO DE COMPRAS
Route::get('/add-to-cart/{id}/{leng?}/{pag?}', 'CarritoController@getAddToCart')->name('addToCart')->middleware('auth');
Route::get('/shopping-cart/{leng?}', 'CarritoController@getCart')->name('shoppingCart')->middleware('auth');
Route::get('/reduce/{id}/{leng?}', 'CarritoController@getReduceByOne')->name('reduceByOne')->middleware('auth');
Route::get('/remove/{id}/{leng?}', 'CarritoController@getRemoveItem')->name('remove')->middleware('auth');
 
// PASARELA DE PAGOS 
Route::get('checkoutStripe/{leng?}', 'CarritoController@getCheckoutStripe')->name('checkoutStripe')->middleware('auth');
Route::post('checkoutStripe/{leng?}', 'CarritoController@postCheckoutStripe')->name('checkoutStripe')->middleware('auth');

Route::get('getcheckoutConekta/{leng?}', 'CarritoController@getCheckoutConekta')->name('getcheckoutConekta')->middleware('auth');
Route::post('postcheckoutConekta/{leng?}', 'CarritoController@postCheckoutConekta')->name('postcheckoutConekta')->middleware('auth');
Route::get('paysuccess/{leng?}', 'CarritoController@paySuccess')->name('paysuccess')->middleware('auth');
Route::get('payerror/{msg?}/{leng?}', 'CarritoController@payError')->name('payerror')->middleware('auth');

// rutas al admin
Route::namespace("Admin")->prefix('adnin')->group(function(){
	Route::name('admin.')->group(function(){
		Route::get('/', 'HomeController@index')->name('home');
		Route::get('/nuevo', 'HomeController@create')->name('create');
		Route::get('/users', 'HomeController@show')->name('show');
		Route::post('/guardar', 'HomeController@store')->name('store');
		Route::delete('/delete', 'HomeController@destroy')->name('delete');

		Route::namespace('Auth')->group(function(){
			Route::get('/login', 'LoginController@showLoginForm')->name('login');
			Route::post('/login', 'LoginController@login');
			Route::post('logout', 'LoginController@logout')->name('logout');
		});
	});

// rutas al admin configuraciones
// controllers dentro de Controllers/Admin/
	Route::prefix('config')->name('config.')->group(function(){
		Route::get('index','ConfiguracionController@index')->name('index');
		Route::get('general','ConfiguracionController@general')->name('general');
		Route::get('contacto','ConfiguracionController@contact')->name('contact');
	});
	// Route::prefix('config')->name('config.')->group(function(){
	// 	Route::get('index','ConfiguracionController@index')->name('index');
	// });
});

// rutas al admin configuraciones
// controllers dentro de Controllers/
Route::prefix('admin')->group(function(){
	
	
	Route::prefix('config')->name('config.')->group(function(){
		
		Route::prefix('colores')->name('color.')->group(function(){
			Route::get('/','ColorController@index')->name('index');
			Route::post('/','ColorController@store')->name('store');
			Route::get('editar/{id}','ColorController@edit')->name('edit');
			Route::put('{id}','ColorController@update')->name('update');
			Route::delete('/','ColorController@destroy')->name('delete');
		});

		Route::prefix('sliders')->name('slider.')->group(function(){
			Route::get('/{seccion?}','CarruselController@index')->name('index');
			Route::post('/','CarruselController@store')->name('store');
			Route::delete('/','CarruselController@destroy')->name('delete');
		});
		Route::prefix('usuarios')->name('usuarios.')->group(function(){
			Route::get('/','HomeController@index')->name('index');
			//Route::post('/','CarruselController@store')->name('store');
			//Route::delete('/','CarruselController@destroy')->name('delete');
		});

		Route::prefix('politicas')->name('politica.')->group(function(){
			Route::get('/','PoliticaController@index')->name('index');
			Route::put('/{id}','PoliticaController@update')->name('update');
		});

		Route::prefix('secciones')->name('seccion.')->group(function(){
			Route::get('/','SeccionController@index')->name('index');
			Route::get('/{slug}','SeccionController@show')->name('show');
			Route::put('/{id}','ElementoController@update')->name('update');
			Route::put('/portada/{id}', 'SeccionController@update')->name('updatePortada');

			Route::post('/imgStatic','SeccionController@imgStatic')->name('imgStatic');

			Route::post('/imgSider','SeccionController@imgSider')->name('imgSider');
			Route::delete('/delSide/{side}', 'SeccionController@delSide')->name('delSide');

			Route::post('/clientesSlider','SeccionController@clientesSlider')->name('clientesSlider');
			Route::delete('/delClientes/{cliente}', 'SeccionController@delClientes')->name('delClientes');

			Route::post('/categoriaSlider','SeccionController@categoriaSlider')->name('categoriaSlider');
			Route::delete('/delCategoria/{categoria}', 'SeccionController@delCategoria')->name('delCategoria');

			Route::post('/productoSide','SeccionController@productoSide')->name('productoSide');
			Route::put('/productoUpdate/{producto}','SeccionController@productoUpdate')->name('productoUpdate');
			Route::put('/imgProducto/{producto}','SeccionController@imgProducto')->name('imgProducto');
			
			Route::get('/galeriaSide/{producto}','SeccionController@galeriaSide')->name('galeriaSide');
			Route::post('/addGaleriaSide','SeccionController@addGaleriaSide')->name('addGaleriaSide');
			Route::delete('/delGaleriaSide/{galeria}','SeccionController@delGaleriaSide')->name('delGaleriaSide');
			Route::post('/imgSiderGaleria','SeccionController@imgSiderGaleria')->name('imgSiderGaleria');

			Route::delete('/delGaleria/{foto}','SeccionController@delGaleria')->name('delGaleria');
			Route::delete('/delProducto/{producto}', 'SeccionController@delProducto')->name('delProducto');
			Route::put('/caracteristicasSide/{producto}','SeccionController@caracteristicasSide')->name('caracteristicasSide');
			Route::delete('/delCaracteristica/{caracteristica}', 'SeccionController@delCaracteristica')->name('delCaracteristica');


			Route::get('/usersList','SeccionController@usersList')->name('usersList');
			Route::get('/usuario_detalle/{usuario}','SeccionController@usuario_detalle')->name('usuario_detalle');
			Route::get('/lista_usuarios','SeccionController@lista_usuarios')->name('lista_usuarios');
			Route::put('/check/{order}', 'SeccionController@checkUpdate')->name('check');


			Route::post('/servicioSide','SeccionController@servicioSide')->name('servicioSide');
			Route::put('/imgServicio/{servicio}','SeccionController@imgServicio')->name('imgServicio');
			Route::delete('/delServicio/{servicio}', 'SeccionController@delServicio')->name('delServicio');

			Route::post('/fechasSide','SeccionController@fechasSide')->name('fechasSide');
			Route::delete('/delFecha/{fecha}', 'SeccionController@delFecha')->name('delFecha');

			Route::post('/certificacionesSide','SeccionController@certificacionesSide')->name('certificacionesSide');
			Route::delete('/delCertificacion/{certificacion}', 'SeccionController@delCertificacion')->name('delCertificacion');

		});

		Route::prefix('faq')->name('faq.')->group(function(){
			Route::get('/','FaqController@index')->name('index');
			Route::get('nueva','FaqController@create')->name('create');
			Route::post('/','FaqController@store')->name('store');
			Route::get('{id}','FaqController@edit')->name('edit');
			Route::put('{id}','FaqController@update')->name('update');
			Route::delete('/','FaqController@destroy')->name('delete');
		});

		Route::prefix('dimension')->name('size.')->group(function(){
			// NOTE:  falta method edit
			Route::get('/','CategTamanoController@index')->name('index');
			Route::post('/','CategTamanoController@store')->name('store');
			Route::delete('/','CategTamanoController@destroy')->name('delete');

			Route::name('dimension.')->group(function(){
				// NOTE:  falta method edit
				Route::get('/{slug?}','SizeController@index')->name('index');
				Route::post('t','SizeController@store')->name('store');
				Route::delete('t','SizeController@destroy')->name('delete');
			});
		});

		Route::prefix('cupones')->name('cupons.')->group(function(){
			// NOTE:  falta method edit
			Route::get('/','CuponController@index')->name('index');
			Route::post('/','CuponController@store')->name('store');
			Route::delete('d','CuponController@destroy')->name('delete');
		});
	});

	
	Route::prefix('servicios')->name('productos.')->group(function () {
		
		Route::get('/', 'ProductoController@index')->name('index');
		Route::get('nuevo', 'ProductoController@create')->name('create');
		Route::post('nuevo', 'ProductoController@store')->name('store');
		Route::get('detalle/{id}', 'ProductoController@show')->name('show');
		Route::get('{id}', 'ProductoController@edit')->name('edit');
		Route::put('{id}', 'ProductoController@update')->name('update');
		Route::put('upimg/{id}', 'ProductoController@updateimg')->name('updateimg');
		Route::post('delete', 'ProductoController@destroy')->name('delete');

		Route::name('pic.')->group(function () {
			Route::post('newpic/{id}', 'ProductosPhotoController@store')->name('store');
			Route::delete('/', 'ProductosPhotoController@destroy')->name('delete');
		});

		Route::name('version.')->group(function () {
			
			Route::post('newvar/', 'ProductoVarianteController@store')->name('store');
			Route::get('variante/{id_var}', 'ProductoVarianteController@show')->name('show');
			Route::get('variante/edit/{id_var}', 'ProductoVarianteController@edit')->name('edit');
			Route::put('variante/{id_var}', 'ProductoVarianteController@update')->name('update');
		// 	Route::delete('pv/', 'ProductoVersionPhotoController@destroy')->name('delete');
		});

		
		Route::name('rel.')->group(function(){
			
			Route::put('rel/{id}','ProductoRelacionController@update')->name('update');
			// Route::delete('rel/','ProductoRelacionController@destroy')->name('delete');
		});

		Route::name('categoria' )->group(function () {
			
			Route::get('categoria/{id}', 'ProductosPhotoController@store')->name('store');
		});

	});

	Route::prefix('vacantes')->name('vacante.')->group(function () {
		Route::get('/', 'VacanteController@index')->name('index');
		Route::get('nuevo', 'VacanteController@create')->name('create');
		Route::post('nuevo', 'VacanteController@store')->name('store');
		Route::get('detalle/{id}', 'VacanteController@show')->name('show');
		Route::get('{id}', 'VacanteController@edit')->name('edit');
		Route::put('{id}', 'VacanteController@update')->name('update');
		Route::put('upimg/{id}', 'VacanteController@updateimg')->name('updateimg');
		Route::post('delete', 'VacanteController@destroy')->name('delete');

	});

	Route::prefix('categorias')->name('categ.')->group(function(){
		Route::get('/','CategoriaController@index')->name('index');
		Route::post('/','CategoriaController@store')->name('store');
		Route::get('/{id}','CategoriaController@show')->name('show');
		Route::get('subcategoria/{id}','CategoriaController@sub')->name('sub');
		Route::post('/delete','CategoriaController@destroy')->name('delete');
	});

});

// rutas funciones generales
Route::prefix('varios')->name('func.')->group(function(){
	Route::post('editarajax','FuncGenController@editajax')->name('editajax');
	Route::post('orderajax','FuncGenController@orderajax')->name('orderajax');
	Route::post('toggleajax','FuncGenController@toggleajax')->name('toggleajax');

	Route::post('addcart','CartController@addcart')->name('addcart');
	Route::get('emptycart','CartController@emptycart')->name('emptycart');
	Route::post('getcart','CartController@getcart')->name('getcart');
	Route::get('updatecart','CartController@updatecart')->name('updatecart');
});

// rutas test
Route::prefix('test')->group(function(){
	Route::get('strand',function(){
		return Str::random(15);
	});
	Route::get('uuid',function(){
		return Str::uuid();
	});
	Route::get('correo',function(){

		return view('front.mailcontact',compact('data'));
	});

	Route::get('slug/{key}', function ($llave) {
		return Str::slug($llave,'-');
	});
});

/** rutas de los formularios de contacto */
Route::post('/formularioContac', 'FrontController@mailcontact')->name('formularioContac');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('clear')->group(function(){
	//Clear Cache facade value:
	Route::get('/clear-cache', function() {
		$exitCode = Artisan::call('cache:clear');
		return '<h1>Cache facade value cleared</h1>';
	});

	//Reoptimized class loader:
	Route::get('/optimize', function() {
		$exitCode = Artisan::call('optimize');
		return '<h1>Reoptimized class loader</h1>';
	});

	//Route cache:
	Route::get('/route-cache', function() {
		$exitCode = Artisan::call('route:cache');
		return '<h1>Routes cached</h1>';
	});

	//Clear Route cache:
	Route::get('/route-clear', function() {
		$exitCode = Artisan::call('route:clear');
		return '<h1>Route cache cleared</h1>';
	});

	//Clear View cache:
	Route::get('/view-clear', function() {
		$exitCode = Artisan::call('view:clear');
		return '<h1>View cache cleared</h1>';
	});

	//Clear Config cache:
	Route::get('/config-cache', function() {
		$exitCode = Artisan::call('config:cache');
		return '<h1>Clear Config cleared</h1>';
	});
});
