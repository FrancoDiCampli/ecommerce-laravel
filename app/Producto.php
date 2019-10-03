<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // 'codproducto','producto','slug','detalle','precio','cantidad','descripcion','foto','promo'
    // 'descuento','destacado'
    protected $fillable = ['codproducto',
    'producto','slug','detalle','precio','cantidad',
    'descripcion','foto','promo',
    'descuento','destacado','categoria_id'];

    public function descontado(){
        $des = $this->precio - ($this->precio*$this->desuento);
        return $des;
    }

    public function categoria(){
        $this->belongsTo('App\Categoria');
    }



}
