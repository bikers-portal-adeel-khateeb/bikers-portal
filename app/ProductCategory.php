<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public function products()
    {
    	return $this->hasMany('App\Product');

    }

    // public function limitProducts()
    // {
    // 	return $this->hasMany('App\Product');
    // 	return $this->hasMany('App\Product', 'ProductCategory_id')->orderBy('created_at')->take(1);

    	
    // }


}
