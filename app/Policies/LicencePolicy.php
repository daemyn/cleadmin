<?php

namespace App\Policies;

use App\User;
use App\Licence;
use Illuminate\Auth\Access\HandlesAuthorization;

class LicencePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the licence.
     *
     * @param  \App\User  $user
     * @param  \App\Licence  $licence
     * @return mixed
     */
    public function view(User $user, Licence $licence)
    {
        return ($user->id == $licence->user_id || $user->role == 'admin');
    }

    /**
     * Determine whether the user can create licences.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return ($user->role == 'revendeur' || $user->role == 'admin');
    }

    /**
     * Determine whether the user can update the licence.
     *
     * @param  \App\User  $user
     * @param  \App\Licence  $licence
     * @return mixed
     */
    public function update(User $user, Licence $licence)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can delete the licence.
     *
     * @param  \App\User  $user
     * @param  \App\Licence  $licence
     * @return mixed
     */
    public function delete(User $user, Licence $licence)
    {
        return $user->role == 'admin';
    }
}
