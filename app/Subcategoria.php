<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $fillable = ['subcategoria','categoria_id'];

    public function categoria(){
        $this->belongsTo('App\Categoria');
    }

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }


}
