<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
     protected $table = 'bill';

	 protected $fillable = [
		'type_bill',
		'remaining',
	];


	public function bill()
	{
		return $this->belongsTo(School::class);
	}


	public function biil()
	{
		return $this->belongsTo(User::class);
	}

}
