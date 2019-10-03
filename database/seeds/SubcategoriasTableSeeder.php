<?php

use App\Subcategoria;
use Illuminate\Database\Seeder;

class SubcategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategoria::create([
            'subcategoria'=>'HD',
             'categoria_id'=>1
        ]);

        Subcategoria::create([
            'subcategoria'=>'Memoria',
             'categoria_id'=>1
        ]);

        Subcategoria::create([
            'subcategoria'=>'Windows',
             'categoria_id'=>2
        ]);
    }
}
