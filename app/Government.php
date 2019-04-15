<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    protected $table = 'government';

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
}
