<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Producto;

use App\Categoria;
use Illuminate\Http\Request;
use Session;


class ShopController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('front.shoppingcar',compact('categorias'));
    }


    public function store(Request $request){

        $request->session()->flush();
        return redirect()->route('productos.index');

        // $prod = Producto::find($request->id);

        // $r = [$prod->id, $prod->producto, $request->cantidad, $prod->precio];
        // session(['fila' => $r]);

        // return redirect()->route('shop.show',1);

    }

    public function showcart(Request $reques){
        $categorias = Categoria::all();
        $productos = null;
        if(!Session::has('cart')){
            return view('front.shoppingcart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $productos = $cart->items;
        $total = $cart->total;
        $importes = ['total'=>$cart->total,'descuentos'=>$cart->descuentos];
        return view('front.shoppingcart',compact('productos','importes','categorias'));

    }

    public function addItem(Request $request){

        $producto = Producto::find($request->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($producto,$producto->id,$request->cantidad);
        $request->session()->put('cart',$cart);
        $request->session()->get('cart');
        return redirect()->route('showcart');

    }


    public function pagar(){
        $pedido = Session::get('cart');
        dd($pedido);
    }
}
