<?php



use App\Product;

Route::redirect('/', '/productos', 301);

Route::resource('productos', 'ProductosController');
Route::get('producto/{category}','ProductosController@clasified')->name('producto.categoria');
Route::resource('shop', 'ShopController');
// Route::get('/product', function () {
//     $product = Product::orderBy('name','asc')->first();
//     $related = Product::inRandomOrder()->take(3)->get();
//     return view('front.product',compact('product','related'));

// });


// Route::view('cart','front.shopingcart');

// Route::get('landing',function(){
//     $popular = Product::all();
//     return view('landing',compact('popular'));
// });
