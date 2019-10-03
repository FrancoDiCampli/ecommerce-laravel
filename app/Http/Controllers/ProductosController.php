<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use App\Subcategoria;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){

        $categorias = Categoria::all();
        $popular = Producto::where('destacado',1)->take(3)->get();
        $promo = Producto::where('promo',1)->take(3)->get();
        return view('front.main',compact('popular','categorias','promo'));
    }

    public function show($slug){
        $categorias = Categoria::all();
        $producto = Producto::where('slug','=',$slug)->firstOrFail();
        $related = Producto::where('categoria_id',$producto->categoria_id)->get();
        return view('front.product',compact('producto','related','categorias'));
    }


    public function clasified($categoria){



        $categorias = Categoria::all();

        $productos = Categoria::where('categoria',$categoria)->with('productos')->get();


        return view('front.clasified',compact('productos','categorias'));
    }
}
