<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [];
	
	public function Orders()
	{
		return $this->hasMany('App\Order');
	}

    public function ProductCategory()
    {
    	return $this->belongsTo('App\ProductCategory');
    }
}
