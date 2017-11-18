<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{

    /*1.)primero creas la llave foranea aqui en el modelo*/
       /*2.)segundo paso crear la relacion en el modelo*/


	protected $fillable = [
    'name','short','body','product_id',

    ];

public function produtcid (){

	return $this->belongs('Product::class');
}


}
