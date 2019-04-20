<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name', 
      'email', 
      'password', 
      'nik', 
      'virtual_account', 
      'address', 
      'phone', 
      'photo',
      'saldo',
      'save',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function donate()
    {
        return $this->hasMany('App\Donate');
    }
    
    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }

    public function agen()
    {
      return $this->hasMany('App\Agen');
    }

}
