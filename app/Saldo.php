<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $table = 'saldo';

    protected $fillable = [
    	'debit',
    	'kredit',
    	'nominal',
    ];

    public function user()
    {
    		return $this->belongsTo('App\User');
    }
}
