<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentOrder extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

  public function address()
    {
        return $this->belongsTo('App\Address');
    }

    public function rentbike()
    {
        return $this->belongsTo('App\Rentbike');
    }
}
