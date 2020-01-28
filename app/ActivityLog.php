<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'action_events';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
