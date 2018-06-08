<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function caps() {
        return $this->hasMany('App\Cap');
    }
}
