<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agen extends Model
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
