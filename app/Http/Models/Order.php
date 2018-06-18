<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
       
    public function order_items() {
        return $this->hasMany('App\Http\Models\OrderItem');
    }
    public function user()
    {
       return $this->belongsTo('App\Http\Models\User');  
    }
}
