<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Lunaweb\EmailVerification\Traits\CanVerifyEmail;
use Lunaweb\EmailVerification\Contracts\CanVerifyEmail as CanVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends \TCG\Voyager\Models\User implements CanVerifyEmailContract
{
    use Notifiable;    
    use CanVerifyEmail;

public function isAdmin() 
{
    return $this->roles()->where('role_id', 1);
}
  
public function isUser() 
{
    return $this->roles()->where('role_id', 2)->first();
}

public function isGuest() 
{
    return $this->middleware('guest');
}
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders() {
        return $this->hasMany('App\Http\Models\Order');
    }
}
