<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $casts = [
    	'expiry_time' => 'date',
    	'excludecouponproducts' => 'array',
    	'excludecouponcategories' => 'array',
    	'couponcategories' => 'array',
    	'couponproducts' => 'array',
    	'couponemails' => 'array'

    ];

    public function products(){
    	return $this->belongsToMany('App\Product');
    }
}


