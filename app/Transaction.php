<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = [
            'user_id',
    		'agen_id',
            'debit',
    		'kredit',
            'debit_agen',
            'kredit_agen',
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
