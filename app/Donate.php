<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table = 'donate';

    protected $fillable = [
    	'donate',
    ];

    public function user()
    {
    		return $this->belongsTo('App\User');
    }

    public function government()
    {
    		return $this->belongsTo('App\Government');
    }

}
