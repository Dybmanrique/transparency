<?php

namespace App\Policies;

use App\Models\Regulation;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RegulationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Reglamentos: Listar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Reglamentos: Crear');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Regulation $regulation): bool
    {
        return $user->can('Reglamentos: Editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Regulation $regulation): bool
    {
        return $user->can('Reglamentos: Eliminar');
    }
}
