<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $casts = ['expiry_time' => 'date'];
}
