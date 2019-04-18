<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestGovernment extends Model
{

		protected $table = 'request_government';

    protected $fillable = [
    	'answer1',
    	'answer2',
    	'answer3',
    ];
}
