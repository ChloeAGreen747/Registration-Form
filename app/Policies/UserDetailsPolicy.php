<?php

namespace App\Policies;

use App\Models\User;
use App\Models\userDetails;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class UserDetailsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {

    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\userDetails  $userdetails
     * @return mixed
     */
    public function view(User $user, UserDetailsPolicy $userdetails)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\userDetails  $userdetails
     * @return mixed
     */
    public function update(User $user, UserDetailsPolicy $userdetails)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\userDetails  $userdetails
     * @return mixed
     */
    public function delete(User $user, UserDetailsPolicy $userdetails)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\userDetails  $userdetails
     * @return mixed
     */
    public function restore(User $user, UserDetailsPolicy $userdetails)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\userDetails  $userdetails
     * @return mixed
     */
    public function forceDelete(User $user, UserDetailsPolicy $userdetails)
    {
        //
    }
}
