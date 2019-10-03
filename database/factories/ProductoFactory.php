<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Producto;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

// 'codproducto','producto','slug','detalle','precio','cantidad','descripcion','foto','promo'
    // 'descuento','destacado'
$factory->define(Producto::class, function (Faker $faker) {
    return [
        'codproducto' => 'PRO'.($faker->ean8),
        'producto' => $faker->sentence(2),
        'slug' => $faker->slug,
        'detalle' => $faker->sentence(8),
        'cantidad' => 10,
        'precio' => $faker->randomFloat(2,2,9999),
        'descripcion' => $faker->text(),
        'foto' => '/images/product.png',
        'promo'=>$faker->numberBetween(0,1),
        'destacado'=>$faker->numberBetween(0,1),
        'descuento'=>$faker->randomFloat(2,0,1),
        'categoria_id'=>$faker->numberBetween(1,3),

    ];
});
// factory(App\Producto::class, 20)->create()->each(function ($producto) {
//     $producto->subcategoria()->save(ramdom(1,3));
// });
