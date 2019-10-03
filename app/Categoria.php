<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['categoria'];

    public function subcategorias()
    {
        return $this->hasMany('App\Subcategoria');
    }

    public function totSubcategorias(){
        return $this->subcategorias()->count();
    }

    public function totProductos(){
        return $this->productos()->count();
    }

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
