<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productstyle extends Model
{
    public function styleoptions(){
	    return $this->hasMany(Styleoption::class);
	}
}
