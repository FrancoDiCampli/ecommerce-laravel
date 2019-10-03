<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'categoria'=>'Hardware'
        ]);

        Categoria::create([
            'categoria'=>'Software'
        ]);
        Categoria::create([
            'categoria'=>'Conectividad'
        ]);
    }
}
