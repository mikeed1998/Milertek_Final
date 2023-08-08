<?php

namespace App\Http\Controllers;
use App\User;
use App\Domicilio;
use App\Factura;
use App\Pedido;
use App\MProductos;
use App\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
	public function getRegister($leng = 'esp') {
		$data = Configuracion::first();
		$pagina = 'signup';
		return view('front.user.register', compact('data', 'pagina', 'leng'));
	}


	public function postSignup(Request $request) {
		$this->validate($request, [
			'email' => 'email|required|unique:users',
			'password' => 'required|min:4'
		]);

		$user = new User([
			'email' => $request->input('email'),
			'password' => bcrypt($request->input('password'))
		]);

		$user->save();

		Auth::login($user);

		if(Session::has('oldUrl')) {
			$oldUrl = Session::get('oldUrl');
			Session::forget('oldUrl');
			return redirect()->to($oldUrl);
		}

		return redirect()->route('user.profile');
	}

	public function getLogin($leng = 'esp') {
		$data = Configuracion::first();
		$pagina = 'signin';
		return view('front.user.login', compact('data', 'pagina', 'leng'));
	}

	public function postSignin(Request $request) {
		$this->validate($request, [
			'email' => 'email|required',
			'password' => 'required|min:4'
		]);

		if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

			if(Session::has('oldUrl')) {
				$oldUrl = Session::get('oldUrl');
				Session::forget('oldUrl');
			}

			return redirect()->route('user.profile');
		}

		return redirect()->back();
	}

	public function getProfile() {
		$data = Configuracion::first();
		$orders = Auth::user()->orders;

		$orders->transform(function($order, $key) {
			$order->cart = unserialize($order->cart);
			return $order;
		});

		return view('front.user.perfil', compact('data', 'orders'));
	}

	public function getLogout() {
		Auth::logout();
		Session::forget('cart');
		return redirect()->route('user.signin');
	}
}
