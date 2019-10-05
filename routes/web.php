<?php



use App\Product;

Route::redirect('/', '/productos', 301);

Route::resource('productos', 'ProductosController');
Route::resource('checkout', 'CheckoutController');
Route::get('producto/{category}','ProductosController@clasified')->name('producto.categoria');
Route::resource('shop', 'ShopController');
// Route::get('add-item/{id}/{cantidad}','ShopController@addItem')->name('shop.additem');
Route::post('add-item','ShopController@addItem')->name('shop.additem');
Route::get('showcart','ShopController@showcart')->name('showcart');

Route::get('pagar','ShopController@pagar')->name('shop.pagar');

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
