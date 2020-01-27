<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Shippo;

class DeliveryAddress extends Model
{
    public function __construct()
    {
        // Grab this private key from
        // .env and setup the Shippo api
        Shippo::setApiKey(env('SHIPPO_PRIVATE'));
    }
}
