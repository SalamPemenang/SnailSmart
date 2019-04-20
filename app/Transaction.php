<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = [
    		'agen_id',
            'debit',
    		'kredit',
    ];

    public function user()
    {
    		return $this->belongsTo('App\User');
    }

    public function school()
    {
    		return $this->belongsTo('App\School');
    }

    public function agen()
    {
      return $this->belongsTo('App\Agen');
    }
}
