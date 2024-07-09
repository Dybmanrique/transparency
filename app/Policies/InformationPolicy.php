<?php

namespace App\Policies;

use App\Models\Information;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class InformationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Información: Listar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Información: Crear');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Information $information): bool
    {
        return $user->can('Información: Editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Information $information): bool
    {
        return $user->can('Información: Eliminar');
    }
}
