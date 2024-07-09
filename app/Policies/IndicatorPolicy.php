<?php

namespace App\Policies;

use App\Models\Indicator;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class IndicatorPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Indicadores: Listar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Indicadores: Crear');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Indicator $indicator): bool
    {
        return $user->can('Indicadores: Editar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Indicator $indicator): bool
    {
        return $user->can('Indicadores: Eliminar');
    }
}
