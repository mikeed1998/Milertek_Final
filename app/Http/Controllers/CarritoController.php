<?php

namespace App\Http\Controllers;

use App\Configuracion;
use App\MProductos;
use App\Carrito;
use Illuminate\Http\Request;

use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;
use App\MOrder;


class CarritoController extends Controller
{
    public function getAddToCart(Request $request, $id, $leng = 'esp', $pag ='') {
        $product = MProductos::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Carrito($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));

        if($pag == 'shopping') {
            return redirect()->route('shoppingCart', ['leng' => $leng]);
        } else {
            return redirect()->route('front.productos_detalle', ['producto' => $id, 'leng' => $leng]);
        }
    }

    public function getReduceByOne($id, $leng = 'esp') {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Carrito($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('shoppingCart', ['leng' => $leng]);
    }

    public function getRemoveItem($id, $leng = 'esp') {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Carrito($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('shoppingCart', ['leng' => $leng]);
    }

    public function getCart($leng = 'esp') {
        $pagina = 'carrito';
 
        $data = Configuracion::first();
        if(!Session::has('cart')) {
            return view('front.carrito.shopping-cart', ['products' => null, 'data' => $data, 'pagina' => $pagina, 'leng' => $leng]);
        }

        $oldCart = Session::get('cart');
        $cart = new Carrito($oldCart);
        return view('front.carrito.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'data' => $data, 'pagina' => $pagina, 'leng' => $leng]);
    }

    public function getCheckoutStripe($leng = 'esp') {
        $data = Configuracion::first();
        if(!Session::has('cart')) {
            return view('front.carrito.shopping-cart', ['leng' => $leng]);
        }

        $pagina = 'pagoStripe';

        $oldCart = Session::get('cart');
        $cart = new Carrito($oldCart);
        $total = $cart->totalPrice;

        return view('front.carrito.checkoutStripe', ['total' => $total, 'data' => $data, 'leng' => $leng, 'pagina' => $pagina]);
    }

    public function postCheckoutStripe(Request $request, $leng = 'esp') {
        if(!Session::has('cart')) {
            return redirect()->route('shoppingCart');
        }

        $oldCart = Session::get('cart');
        $cart = new Carrito($oldCart);

        Stripe::setApiKey('sk_test_51Nb8P9Kuq6E1vXOyXhk1dDg9nNnmZ8y5Beo9eIaHvdGkvTNhOcmYYxIMpEm2YScJOWWJSBXCCaPDvCUwzTaUcRvg00a0oFXRax');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                // "source" => $request->input('stripeToken'), // Obtained with Stripe.js source or customer
                "source" => "tok_mastercard",
                "description" => "Test Charge"
            ));
            $order = new MOrder();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);
        } catch(\Exception $e) {
            return redirect()->route('checkoutStripe', ['leng' => $leng])->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('user.profile', ['leng' => $leng])->with('success', ($leng == 'eng') ? 'Successfully Purchased!' : '¡Compra Exitosa!');
    }

    public function getCheckoutConekta($leng = 'esp') {
        $data = Configuracion::first();
        if(!Session::has('cart')) {
            return view('front.carrito.shopping-cart');
        }

        $pagina = "pagoConekta";

        $oldCart = Session::get('cart');
        $cart = new Carrito($oldCart);
        $total = $cart->totalPrice;

        $user = Auth::user();

        return view('front.carrito.checkoutConekta', ['total' => $total, 'data' => $data, 'pagina' => $pagina, 'leng' => $leng, 'user' => $user]);
    }

    public function postCheckoutConekta(Request $request, $leng = 'esp') {
        // dd('llegue');
        if(!Session::has('cart')) {
            return redirect()->route('shoppingCart', ['leng' => ($leng == 'eng') ? 'eng' : 'esp']);
        }

        $oldCart = Session::get('cart');
        $cart = new Carrito($oldCart);

        $nombre_ = Auth::user()->name ." ". Auth::user()->lastname;
        $email_ = Auth::user()->email;
        $telefono_ = Auth::user()->telefono;

        // foreach($cart->items as $cat) {
        //     echo $cat['item']->nombre . "<br>";
        //     echo $cat['price'] . "<br>";
        //     echo $cat['qty'] . "<br>";
        // }

        // dd("stop");

        // dd($cart->items[14]);
        // dd($cart->items[14]['price']);
        // dd($cart->items[14]['qty']);
        // dd($cart->items[14]['item']->nombre);

        // Conekta::setApiKey('sk_test_51Nb8P9Kuq6E1vXOyXhk1dDg9nNnmZ8y5Beo9eIaHvdGkvTNhOcmYYxIMpEm2YScJOWWJSBXCCaPDvCUwzTaUcRvg00a0oFXRax');
        // try {
        //     $charge = Charge::create(array(
        //         "amount" => $cart->totalPrice * 100,
        //         "currency" => "usd",
        //         // "source" => $request->input('ConektaToken'), // Obtained with Conekta.js source or customer
        //         "source" => "tok_mastercard",
        //         "description" => "Test Charge"
        //     ));
        //     $order = new SOrder();
        //     $order->cart = serialize($cart);
        //     $order->address = $request->input('address');
        //     $order->name = $request->input('name');
        //     $order->payment_id = $charge->id;

        //     Auth::user()->orders()->save($order);
        // } catch(\Exception $e) {
        //     return redirect()->route('checkoutConekta')->with('error', $e->getMessage());
        // }

        require_once('vendor/libConekta/Conekta.php');
        // \Conekta\Conekta::setApiKey("key_Ax9YM8UMUQQUxHAeehKv9g");
        \Conekta\Conekta::setApiKey("key_smGi4GNG7dXpoUlMExZ0Vfg");

        \Conekta\Conekta::setApiVersion("2.0.0");

        $token_id= $request->conektaTokenId;

        // dd($nombre_);

        try {
            $customer = \Conekta\Customer::create(
                array(
                    "name" => $nombre_,
                    "email" => $email_,
                    "phone" => "+52". $telefono_,
                    "payment_sources" => array(
                        array(
                            "type" => "card",
                            "token_id" => $token_id
                        )
                    )//payment_sources
                )//customer
            );
        } catch (\Conekta\ProccessingError $error){
            return redirect()->route('payerror', ['msg' => $error->getMessage(), 'leng' => $leng]);
            // echo $error->getMesage();
        } catch (\Conekta\ParameterValidationError $error){
            // echo $error->getMessage();
            return redirect()->route('payerror', ['msg' => $error->getMessage(), 'leng' => $leng]);
        } catch (\Conekta\Handler $error){
            //  echo $error->getMessage();
            return redirect()->route('payerror', ['msg' => $error->getMessage(), 'leng' => $leng]);
        }


        $lineItems = [];

        foreach($cart->items as $cat) {
            $lineItems[] = [
                "name" => $cat['item']->nombre,
                "unit_price" => $cat['price'] * 100,
                "quantity" => $cat['qty'] 
            ];
        }

        try{
            $order = \Conekta\Order::create(
                array(
                    "line_items" => $lineItems,
                     //line_items
                    "shipping_lines" => array(
                        array(
                            "amount" => 0,
                            "carrier" => "FEDEX"
                        )
                    ), //shipping_lines - physical goods only
                    "currency" => "MXN",
                    "customer_info" => array(
                        "customer_id" => $customer->id
                    ), //customer_info
                    "shipping_contact" => array(
                        "address" => array(
                            "street1" => "Calle 123, int 2",
                            "postal_code" => "06100",
                            "country" => "MX"
                        )//address
                    ), //shipping_contact - required only for physical goods
                    "metadata" => array(
                        "reference" => "12987324097", 
                        "more_info" => "lalalalala"),
                    "charges" => array(
                        array(
                            "payment_method" => array(
                                "type" => "default"
                            ) //payment_method - use customer's default - a card
                            //to charge a card, different from the default,
                            //you can indicate the card's source_id as shown in the Retry Card Section
                        ) //first charge
                    ) //charges
                )//order
            );

            $order = new MOrder();
            $order->cart = serialize($cart);
            $order->address = Auth::user()->address;
            $order->name =  Auth::user()->name;
            $order->payment_id = $customer->id;

            Auth::user()->orders()->save($order);
        } catch (\Conekta\ProcessingError $error){
            // echo $error->getMessage();
            return route('payerror', ['msg' => $error->getMessage(), 'leng' => $leng]);
        } catch (\Conekta\ParameterValidationError $error){
            // echo $error->getMessage();
            return route('payerror', ['msg' => $error->getMessage(), 'leng' => $leng]);
        } catch (\Conekta\Handler $error){
            // echo $error->getMessage();
            return route('payerror', ['msg' => $error->getMessage(), 'leng' => $leng]);
        }

        // echo "ID: ". $order->id;
        // echo "<br>Status: ". $order->payment_status;
        // echo "<br>$". $order->amount / 100 . $order->currency;
        // echo "<br>Order";
        // echo $order->line_items[0]->quantity .
        //     "-". $order->line_items[0]->name .
        //     "- $". $order->line_items[0]->unit_price / 100;
        // echo "<br>Payment info";
        // echo "<br>CODE:". $order->charges[0]->payment_method->auth_code;
        // echo "<br>Card info:" .
        //     "- ". $order->charges[0]->payment_method->name .
        //     "- ". $order->charges[0]->payment_method->last4 .
        //     "- ". $order->charges[0]->payment_method->brand .
        //     "- ". $order->charges[0]->payment_method->type;

        // Response
        // ID: ord_2fsQdMUmsFNP2WjqS
        // $ 135.0 MXN
        // Order
        // 12 - Tacos - $10.0
        // Payment info
        // CODE: 035315
        // Card info: 4242 - visa - banco - credit



        
        Session::forget('cart');
        // return redirect()->route('user.profile', ['leng' => $leng])->with('success', ($leng == 'eng') ? 'Successfully purchased products!' : 'Pago exitoso');
        return redirect()->route('paysuccess', ['leng' => $leng]);
    }

    public function paySuccess($leng = 'esp') {
        return view('front.carrito.paysuccess', compact('leng'));
    }

    public function payError($msg = '', $leng = 'esp') {
        return view('front.carrito.payerror', compact('msg', 'leng'));
    }
}
