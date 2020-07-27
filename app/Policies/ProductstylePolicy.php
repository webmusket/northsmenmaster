<?php

namespace App\Policies;

use App\Admin;
use App\Productstyle;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductstylePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the productstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Productstyle  $productstyle
     * @return mixed
     */
    public function viewAny(Admin $user){
        return false;
    }
    public function view(Admin $user, Productstyle $productstyle)
    {
        //
    }

    /**
     * Determine whether the user can create productstyles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can update the productstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Productstyle  $productstyle
     * @return mixed
     */
    public function update(Admin $user, Productstyle $productstyle)
    {
        //
    }

    /**
     * Determine whether the user can delete the productstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Productstyle  $productstyle
     * @return mixed
     */
    public function delete(Admin $user, Productstyle $productstyle)
    {
       //
    }

   
}
