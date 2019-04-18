<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestAgen extends Model
{
    protected $table = 'request_agen';

    protected $fillable = [
    	'answer1',
    	'answer2',
    	'answer3',
    ];
}
