<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agen extends Authenticatable
{
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
}
