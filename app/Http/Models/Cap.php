<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Cap extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];    

    public function category()
    {
       return $this->belongsTo('App\Http\Models\Category');  
    }
    public function supplier()
    {
       return $this->belongsTo('App\Http\Models\Supplier');  
    }
    public function order_item()
    {
       return $this->belongsTo('App\Http\Models\OrderItem');         
    }
}
