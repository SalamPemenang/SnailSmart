<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agen extends Authenticatable
{

    use Notifiable;

    protected $table = 'agen';

    protected $fillable = [
    	'name', 
      'email', 
      'password', 
      'nik', 
      'no_rek', 
      'virtual_account', 
      'address', 
      'phone', 
      'photo',
      'saldo',
      'save',
    ];

    public function transaction()
    {
      return $this->hasMany('App\Transaction');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
