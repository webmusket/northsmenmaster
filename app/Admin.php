<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isSuperAdmin()
    {
        return $this->hasRole('super-admin');
    }

    public function receivesBroadcastNotificationsOn()
    {
        return 'users.' . $this->id;
    }
}