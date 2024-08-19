<?php

namespace App\Policies;

use App\Models\Riwayatopd;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RiwayatopdPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Riwayatopd $riwayatopd): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Riwayatopd $riwayatopd): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Riwayatopd $riwayatopd): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Riwayatopd $riwayatopd): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Riwayatopd $riwayatopd): bool
    {
        //
    }
}
