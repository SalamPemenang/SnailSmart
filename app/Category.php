<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category_donate';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'image', 'category', 'ket',
    ];

    public function government()
    {
    	return $this->hasMany('App\Government');
    }
}
