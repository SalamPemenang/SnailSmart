<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class School extends Authenticatable
{

    use Notifiable;

    protected $table = 'school';

    protected $fillable = [
    		'npsn',
    		'no_rek',
    		'name',
    		'type',
    		'address',
    		'phone',
    		'email',
    		'password',
    		'website',
    ];

    public function transaction()
    {
    	return $this->hasMany('App\Transaction');
    }
}
