<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public $items = null;
    public $totalqty = 0;
    public $total = 0;

    public function _construct($oldcart)
    {
        if($oldcart){
            $this->items = $oldcart->items;
            $this->totalqty = $oldcart->totalqty;
            $this->total = $oldcart ->total;
        }
    }
    
    public function add($item, $id)
    {
        $storedItem = ['qty'=>0, 'price' =>$item->price, 'item' =>$item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item ->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalqty++;
        $this->total += $item->price;
    }

}
