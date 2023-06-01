<?php

namespace App\Policies;

use App\Models\Produtct;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutctPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produtct  $produtct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Produtct $produtct)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produtct  $produtct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Produtct $produtct)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produtct  $produtct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Produtct $produtct)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produtct  $produtct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Produtct $produtct)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produtct  $produtct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Produtct $produtct)
    {
        //
    }
}
