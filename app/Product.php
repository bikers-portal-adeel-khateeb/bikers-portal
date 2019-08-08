<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [];
	
	public function orderDetails()
	{
		return $this->hasMany('App\OrderDetail');
	}

    public function ProductCategory()
    {
    	return $this->belongsTo('App\ProductCategory');
    }

}
