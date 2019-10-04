<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;
use ShoppingCart;


class ShopController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view('front.shoppingcar',compact('categorias'));
    }


    public function store(Request $request){

        $prod = Producto::find($request->id);

        $r = [$prod->id, $prod->producto, $request->cantidad, $prod->precio];
        session(['fila' => $r]);

        return redirect()->route('shop.show',1);

    }

    public function show($id){


        $row = session()->all();

        return redirect()->route('shop.index');

    }
}
