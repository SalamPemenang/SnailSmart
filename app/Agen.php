<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agen extends  Authenticatable
{
    use Notifiable;

    protected $table = 'agen';

    protected $fillable = [
    	'name',
    	'nik',
    	'no_rek',
    	'no_ktp',
    	'email',
    	'password',
    	'address',
    	'phone',
    	'photo',
    ];
}
