<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = ['created_at','updated_at'];

    public function caps() {
        return $this->hasMany('App\Http\Models\Cap');
    }
}
