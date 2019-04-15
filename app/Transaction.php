<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = [
    		'debit',
    		'kredit',
    ];

    public function user()
    {
    		return $this->belongsTo('App\User');
    }
}
