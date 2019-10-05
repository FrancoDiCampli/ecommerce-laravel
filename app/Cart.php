<?php

namespace App;



class Cart
{
    public $items=null;
    public $cantidad=0;
    public $total=0;
    public $descuentos=0;

    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->cantidad = $oldCart->cantidad;
            $this->total = $oldCart->total;
            $this->descuentos = $oldCart->descuentos;

        }
    }

    public function add($item,$id,$cant){
        $storedItem = ['qty'=>0,'price'=>$item->precio,'item'=>$item];

        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']+=$cant;
        $storedItem['price'] = $item->precio * $storedItem['qty'];

        $this->descuentos += $item->descuento;

        $this->items[$id]=$storedItem;
        $this->cantidad +=$storedItem['qty'];
        $this->total += $item->precio;
    }

}
