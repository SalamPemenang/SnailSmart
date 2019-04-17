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

    public function category()
    {
            return $this->belongsTo('App\Category');
    }

    public function government()
    {
    		return $this->belongsTo('App\Government');
    }

}
