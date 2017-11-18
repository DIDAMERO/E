<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    'name','short','body',

    ];



    	public function productid () {

    		return $this->hasMany('sale::class');

    	}

}
