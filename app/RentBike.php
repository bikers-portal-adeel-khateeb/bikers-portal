<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentBike extends Model
{
    protected $guarded = [];

     public function city()
     {

     	return $this->belongsTo('App\City');
     }

     public function rentOrders()
     {

     	return $this->hasMany('App\RentOrder');
     }
}
