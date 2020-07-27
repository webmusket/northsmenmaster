<?php

namespace App\Policies;

use App\Admin;
use App\Styleoption;
use Illuminate\Auth\Access\HandlesAuthorization;

class StyleoptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the styleoption.
     *
     * @param  \App\User  $user
     * @param  \App\Styleoption  $styleoption
     * @return mixed
     */
    public function viewAny(Admin $user){
        return false;
    }

    public function view(Admin $user, Styleoption $styleoption)
    {
        //
    }

    /**
     * Determine whether the user can create styleoptions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        //
    }

    /**
     * Determine whether the user can update the styleoption.
     *
     * @param  \App\User  $user
     * @param  \App\Styleoption  $styleoption
     * @return mixed
     */
    public function update(Admin $user, Styleoption $styleoption)
    {
        //
    }

    /**
     * Determine whether the user can delete the styleoption.
     *
     * @param  \App\User  $user
     * @param  \App\Styleoption  $styleoption
     * @return mixed
     */
    public function delete(Admin $user, Styleoption $styleoption)
    {
        //
    }


}
