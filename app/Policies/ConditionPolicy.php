<?php

namespace App\Policies;

use App\Models\Condition;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ConditionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Condiciones: Listar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Condiciones: Crear');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Condition $condition): bool
    {
        return $user->can('Condiciones: Editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Condition $condition): bool
    {
        return $user->can('Condiciones: Eliminar');
    }
}
