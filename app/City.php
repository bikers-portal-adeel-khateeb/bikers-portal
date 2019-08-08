<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

   	public function rentbikes()
   	{

   	return $this->hasMany('App\RentBike');
    }
}
