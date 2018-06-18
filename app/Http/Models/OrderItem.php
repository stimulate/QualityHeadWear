<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $guarded = ['id', 'updated_at'];  
    public function order()
    {
       return $this->belongsTo('App\Http\Models\Order');  
    }
    public function cap() {
        return $this->hasOne('App\Http\Models\Cap');
    }
}
