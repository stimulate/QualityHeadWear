<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['created_at','updated_at'];
    public function caps() {
        return $this->hasMany('App\Http\Models\Cap');
    }
}