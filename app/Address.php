<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = [];

    public function orders(){

    	return $this->hasMany('App\Order');
    }

      public function rentOrders(){

    	return $this->hasMany('App\RentOrder');
    }
}
