<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment_school';

    protected $fillable = [
    	'tahunan',
    	'bulanan',
    	'daftar_ulang',
    	'praktik',
    	'pkl',
    	'ujianakhir',
    	'ujiannasional',
    ];


     public function school()
    {
        return $this->belongsTo(School::class);
    }
}
