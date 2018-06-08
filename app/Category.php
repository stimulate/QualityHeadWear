<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function caps() {
        return $this->hasMany('App\Cap');
    }
}
