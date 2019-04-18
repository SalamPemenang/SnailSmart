<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Government extends Authenticatable
{
    use Notifiable;

    protected $table = 'government';

    protected $primaryKey = 'id';

    protected $fillable = [
    		'npsn',
    		'no_rek',
            'category_id',
    		'name',
    		'type',
    		'address',
    		'phone',
    		'email',
    		'password',
    		'website',
    ];

    public function donate()
    {
        return $this->hasMany('App\Donate');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
}
